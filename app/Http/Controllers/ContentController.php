<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Image\ImageRepository;
use App\Models\Content\ContentRepository;
use App\Models\User\UserRepository;
use App\Models\Clog\ChangeLogRepository;
use App\Models\Tab\TabRepository;
use App\Models\Accordion\AccordionRepository;
use App\Models\Reffurl\ReffurlRepository;

use App\Helpers\RightsConstantsManager;
use App\Models\Favourites\FavouritesRepository;
use App\Models\Category\CategoryRepository;

use App\Models\Log\Ugnheader\UgnHeaderLogRepository;

use App\Helpers\ContentHelper;


class ContentController extends Controller {

    protected $imageRepository;
    
    protected $contentRepository;
    
    protected $userRepository;
    
    protected $changeLogRepository;
    
    protected $tabRepository;
    
    protected $accordionRepository;
    
    protected $favouriteRepository;
    
    protected $categoryRepository;
    
    protected $ugnHeaderLogRepository;
    
    protected $contentHelper;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        parent::__construct();
        $this->imageRepository          =   new ImageRepository();
        $this->contentRepository        =   new ContentRepository();
        $this->userRepository           =   new UserRepository();
        $this->changeLogRepository      =   new ChangeLogRepository();
        $this->tabRepository            =   new TabRepository();
        $this->accordionRepository      =   new AccordionRepository();
        $this->favouriteRepository      =   new FavouritesRepository();
        $this->categoryRepository       =   new CategoryRepository();
        $this->ugnHeaderLogRepository   =   new UgnHeaderLogRepository();
        $this->contentHelper            =   new ContentHelper();
        $this->reffurlRepository        =   new ReffurlRepository();
        
    }
    
    public function checkIfImageExists($contentImages)
    {
        $savedImagesArray   =   $this->imageRepository->checkIfExist($contentImages);
        
        if (!$savedImagesArray) {
            $this->error    =   $this->imageRepository->getError();
            return false;
        }

        if (count($savedImagesArray)) {

            if (empty($savedImagesArray['0']) || !is_array($savedImagesArray['0'])) 
            {
                $newArray           =   $savedImagesArray;
                $savedImagesArray   =   [];
                $savedImagesArray[] =   $newArray;
            }

            $error              =   [];

            $savedImages        =   [];

            foreach ($savedImagesArray as $row) {
                $savedImages[]  =   $row['image_name'];
            }

            foreach ($contentImages as $image) {
                $image          =   trim($image);

                if (!in_array($image, $savedImages)) {
                    $error[]    =   'Image : <strong>' . $image . '</strong>'
                            . ' not found. Please check or upload again.';
                }
            }

            if (count($error)) {
                $this->error    =   $error;
                return false;
            }
        }
        
        return true;
    }
    
    public function savePageContent(Request $request)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $error = array();

        $data                   =   $request->all();
        
        $data                   =   $this->sanitizeInput($data);
        
        $validatorArray         =   [
            'pageLinkText'      =>  'required|max:50',
            'categoryId'        =>  'required',
            'display_order'     =>  'required',
            'pageTitle'         =>  'required|max:255',
            'paragraph'         =>  'required',
            'status'            =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/createpage')->withInput()->withErrors($validator);
        }
        
        if($_FILES['pageImage']['name'][0] != '') {
        $imageCount =   count($_FILES['pageImage']['name']);
        
        if ($imageCount) {
            if (!$this->uploadImage($imageCount)) {
	                $error[]     	 =   is_array($this->error) ? $this->error : [$this->error];               
	            }
            }
        
        }
        
                
        $contentImages              =   [];
        
        if (!empty($data['contentImages'])) {
            
            if (stristr($data['contentImages'], ',')) {
                $contentImages      =   explode(',', $data['contentImages']);
            } else {
                $contentImages[]    =   trim($data['contentImages']);
            }
            
            $contentImages          =   $this->sanitizeInput($contentImages);
        }
        
        if (!empty($this->uploadedImages)) {
            foreach ($this->uploadedImages as $image) {
                if (!in_array($image, $contentImages)) {
                    $contentImages[] = $image;
                }
            }
            $this->uploadedImages  = array();
        }
        
        if (count($contentImages)) {
            if (!$this->checkIfImageExists($contentImages)) {
                $error[]  = $this->error;
            }
        }
        
        /********From here for uploading mobile images********/
        if($_FILES['pageImageMobile']['name'][0] != '') {
        
        $imageCount =   count($_FILES['pageImageMobile']['name']);
        
        if ($imageCount) {
            if (!$this->uploadImage($imageCount, 'pageImageMobile')) {
	                 $error[]          =   $this->error;
	                
	            }
            }
        
        }
        
        $contentImagesMobile              =   [];
        
        if (!empty($data['contentImagesMobile'])) {
            if (stristr($data['contentImagesMobile'], ',')) {
                $contentImagesMobile      =   explode(',', $data['contentImagesMobile']);
            } else {
                $contentImagesMobile[]    =   trim($data['contentImagesMobile']);
            }
            
            $contentImagesMobile          =   $this->sanitizeInput($contentImagesMobile);
        }
        
        if (!empty($this->uploadedImages)) {
            foreach ($this->uploadedImages as $image) {
                if (!in_array($image, $contentImagesMobile)) {
                    $contentImagesMobile[] = $image;
                }
            }
            $this->uploadedImages  = array();
        }
        
        if (count($contentImagesMobile)) {
            if (!$this->checkIfImageExists($contentImagesMobile)) {
                
                $error[]  = $this->error;
            }
        }
    
 		/*******Till here for uploading mobile images********/        

      	/********  Upload image for right side ********/
            $imgUrlRight  = null;
            
            $contentImagesRight = null;
            
            $imageCountRight =   null;
      	if($data['image_select'] == 'image') {
        	
        	
        
         	if(!empty($_FILES['pageImageRight']['name'])) {
             
         		$imageCountRight =   1;
         
         	}
         
         	if(!empty($data['img_url'])) {
             
              $imgUrlRight  =  $data['img_url'];
         	}
         
         	if(!empty($data['contentImagesRight'])) {
              $contentImagesRight  =  $data['contentImagesRight'];
         	}

      		if (!empty($imgUrlRight) && empty($_FILES['pageImageRight']['name']) 
        	&& empty($contentImagesRight)) {
            
        		$this->error 	= 	'Please Upload Content Images for Right Side';
        		$error[]		=   $this->error;
       		}
       
        	if (!empty($imageCountRight)) {
            	if (!$this->uploadImage($imageCountRight,'pageImageRight')) {
             		$error[]	=   $this->error;
             
            	}
        	}
        
        	if (!empty($imgUrlRight)) {
            	if (!$this->checkValidUrl($imgUrlRight)) {
					$error[]     =   $this->error;
				}
        	}


			
			if (!empty($contentImagesRight)) {
            
            	if (stristr($data['contentImagesRight'], ',')) {
                
                	$this->error 	= 	'Mutliple Images not Allowed for Content Images for Redirection';
                	$error[]		= 	$this->error;
            	} else {
                
                	$contentImagesRight	=   $data['contentImagesRight'];
            	}
            
            	$contentImagesRight		=   $this->sanitizeInput($contentImagesRight);
        	}
        
        	if (!empty($this->uploadedImages)) {
            	$contentImagesRight 	= 	$this->uploadedImages;
            	$contentImagesRight  	=	implode(',',$contentImagesRight);
            	$this->uploadedImages  	= 	[];
        	}
        
	    } else {
	
	        $imgUrlRight = $data['videourl'];
	       
	        if (!empty($imgUrlRight)) {
	            if (!$this->checkValidUrl($imgUrlRight)) {
	
	            	$error[]    =   $this->error;
	             
	            }
	        }
	    }
        
        /********From here for uploading mobile images********/
    
        if(!empty($_FILES['pageImageMobileRight']['name'][0])) {
        $imageCountRight =   count($_FILES['pageImageMobileRight']['name']);
        
	        if ($imageCountRight) {
	            if (!$this->uploadImage($imageCountRight, 'pageImageMobileRight')) {
	                //echo 'error this site2';die;
	                $error[]   =   is_array($this->error) ? $this->error : [$this->error];
	              
	            }
	        }
        }
        
        $contentImagesMobileRight              =   [];
        
        if (!empty($data['contentImagesMobileRight'])) {
            if (stristr($data['contentImagesMobileRight'], ',')) {
                $contentImagesMobileRight      =   explode(',', $data['contentImagesMobileRight']);
            } else {
                $contentImagesMobileRight[]    =   trim($data['contentImagesMobileRight']);
            }
            
            $contentImagesMobileRight          =   $this->sanitizeInput($contentImagesMobileRight);
        }
        
        if (!empty($this->uploadedImages)) {
            foreach ($this->uploadedImages as $image) {
                if (!in_array($image, $contentImagesMobileRight)) {
                    $contentImagesMobileRight[] = $image;
                }
            }
            $this->uploadedImages  = [];
        }
        
        if (count($contentImagesMobileRight)) {
            if (!$this->checkIfImageExists($contentImagesMobileRight)) {
            	$error[]  = $this->error;
            }
        }

        if(!empty($error)){
                
                return redirect('/createpage')->withInput()->withErrors($error);
        }
 
 		/*******Till here for uploading mobile images for right side********/

 		/********  Right side upload image code End ********/

 		//---------- For Add Reference Urls -------------------------------//

        $refIdsFinal =  '';
        
        if(!empty($data['references'])) {
            
             $reffIds =   $this->addReffUrl($data['references']);
     
             $refIdsFinal = implode(',',$reffIds);
     
        }
        
		//---------------Ref urls code End --------------------------------------//
        
        $saveData = [
            'page_link_text'        =>  $data['pageLinkText'],
            'fk_page_category_id'   =>  $data['categoryId'],
            'display_order'         =>  $data['display_order'],
            'title'                 =>  $data['pageTitle'],
            'contentImages'         =>  implode(',', $contentImages),
            'contentImages_Mob'     =>  implode(',', $contentImagesMobile),
            'contentImages_right'   =>  $contentImagesRight,
            'right_image_vid_url'   =>  $imgUrlRight,
            'contentImages_Mob_right' =>implode(',', $contentImagesMobileRight),
            'paragraph'             =>  $data['paragraph'],
            'ref_ids'               =>  $refIdsFinal,
            'fk_admin_user_id'      =>  Auth::user()->pk_admin_user_id,
            'status'                =>  $data['status'],
        ];
        
        if (!$this->contentRepository->savePageData($saveData)) {
            //return redirect($this->getErrorUrl($this->contentRepository->getError()));
            return redirect('/createpage')->withInput()->withErrors([$this->contentRepository->getError()]);
        }
        
        return redirect($this->getSuccessUrl('Page created successfully'));
    }
    
    public function showCreatePageForm()
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl('You don\'t have sufficient rights to do this activity'));
        }
        
        $categorySearchArray    =   [
            //'searchArray'       =>  ['status'    =>  'Enabled'],
            'api_call'          =>  1,
        ];
        
        $categoryListArray      =   $this->categoryRepository->getCategoryList($categorySearchArray);
        
        if (!$categoryListArray && !is_array($categoryListArray)) {
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }
        
        $categoryList           =   [];
        
        foreach ($categoryListArray as $row) {
            $categoryList[$row['pk_page_category_id']]     =   $row['category_name'];
        }
        
        $displayOrderList       =   $this->contentRepository->getDisplayOrderList();
        
        if (!$displayOrderList) {
            return redirect($this->getErrorUrl($this->contentRepository->getError()));
        }
        
        $createPageViewArray = [
            'selectOptionsManager'      =>  $this->selectOptionsManager,
            'categoryList'              =>  $categoryList,
            'displayOrderList'          =>  $displayOrderList,
        ];
        
        return view('createpage', $createPageViewArray);
    }
    
    public function showPageList(Request $request)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_VIEW_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data           =   $request->all();
        
        $pageList       =   $this->contentRepository->getPageList();
        
        $userListArray   =   $this->userRepository->fetchAllUsers(['userIdIn', 'api_call' => 1]);
        
        if (!count($userListArray)) {
            return redirect($this->getErrorUrl($this->userRepository->getError()));
        }
        
        $userList   = [];
        
        foreach ($userListArray as $row) {
            $userList[$row['pk_admin_user_id']] =   $row['fname'] . ' ' . $row['lname'];
        }
                
        $viewArray  = ['pageList' => $pageList, 'userList' => $userList];
        
        return view('pagelist', $viewArray);
    }
    
    public function editPage(Request $request)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data                   =   $request->all();
        
        $data                   =   $this->sanitizeInput($data);
        
        $validatorArray         =   [
            'pageLinkText'      =>  'required|max:50',
            'categoryId'        =>  'required',
            'display_order'     =>  'required',
            'pageTitle'         =>  'required|max:255',
            'paragraph'         =>  'required',
            'status'            =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/editpage/' . $data['pageId'])->withInput()->withErrors($validator);
        }
        
        $imageCount     =   count($_FILES['pageImage']['name']);
        
        if(!empty($_FILES['pageImage']['name'][0])) {
       		
            if (!$this->uploadImage($imageCount)) {
            	$error[]  =   $this->error;
            }
        }
        
        /*************/
        
              
        $contentImages  =   [];
        
        if (!empty($data['contentImages'])) {
            if (stristr($data['contentImages'], ',')) {
                $contentImages      =   explode(',', $data['contentImages']);
            } else {
                $contentImages[]    =   trim($data['contentImages']);
            }
            
            $contentImages  =   $this->sanitizeInput($contentImages);
        }
        
        if (!empty($this->uploadedImages)) {
            foreach ($this->uploadedImages as $image) {
                if (!in_array($image, $contentImages)) {
                    $contentImages[] = $image;
                }
            }
            $this->uploadedImages  = [];
        }
        
        if (count($contentImages)) {
            if (!$this->checkIfImageExists($contentImages)) {
                 $error[]  = $this->error;
            }
        }
        
        /*************/
        
        /*******************From here for mobile images**************/
        
        $imageCount =   count($_FILES['pageImageMobile']['name']);
        
        if(!empty($_FILES['pageImageMobile']['name'][0])) {
       
            if (!$this->uploadImage($imageCount, 'pageImageMobile')) {
                 $error[]          =   $this->error;
            }
        }
        
        $contentImagesMobile              =   [];
        
        if (!empty($data['contentImagesMobile'])) {
            if (stristr($data['contentImagesMobile'], ',')) {
                $contentImagesMobile      =   explode(',', $data['contentImagesMobile']);
            } else {
                $contentImagesMobile[]    =   trim($data['contentImagesMobile']);
            }
            
            $contentImagesMobile          =   $this->sanitizeInput($contentImagesMobile);
        }
        
        if (!empty($this->uploadedImages)) {
            foreach ($this->uploadedImages as $image) {
                if (!in_array($image, $contentImagesMobile)) {
                    $contentImagesMobile[] = $image;
                }
            }
            $this->uploadedImages  = [];
        }
        
        if (count($contentImagesMobile)) {
            if (!$this->checkIfImageExists($contentImagesMobile)) {
                
                $error[]  = $this->error;
                
             }
        }
       
        /******************Till here for mobile images***************/
        
 		/*  Upload image for left side*/
        
        $contentImagesRight  =  null;
       	
       	$imgUrlRight = null;
       	
       	$imageCountRight =  null;
           
       	if(!empty($_FILES['pageImageRight']['name'])) {
               
        	$imageCountRight = 1;
        }
           
       	if($data['image_select'] == 'image') {            
            
			if(!empty($data['img_url'])) {
				$imgUrlRight  =  $data['img_url'];
           	}
           
            if(!empty($data['contentImagesRight'])) {
				$contentImagesRight  =  $data['contentImagesRight'];
         	}
   
        	if ($imageCountRight) {
            	if (!$this->uploadImage($imageCountRight,'pageImageRight')) {

                	$error[]          =   $this->error;
              
            	}
        	}
        
              
        	if (!empty($contentImagesRight)) {
            
				if (stristr($data['contentImagesRight'], ',')) {
               
                	$this->error =	'Mutliple Images are not Allowed for Content Images for Redirecting';
                	$error[]     =	$this->error;
                
            	} else {
                
                	$contentImagesRight    =   $data['contentImagesRight'];
            	}
		}

        if (!empty($imgUrlRight) && empty($_FILES['pageImageRight']['name']) && empty($contentImagesRight)) {
            
			$this->error = 'Please Upload Images for Right Side or Content Images Right Side';
			$error[]     = $this->error;
        }
       
       
        if (!empty($imgUrlRight)) {
            if (!$this->checkValidUrl($imgUrlRight)) {

                $error[]          =   $this->error;
               
            }
        }
        
        if (!empty($this->uploadedImages)) {
           	
            $contentImagesRight    	=   $this->uploadedImages;
            $contentImagesRight    	=   implode(',', $contentImagesRight);
            $this->uploadedImages	= 	[];
              
		}
        

    } else {
        
		$imgUrlRight  = $data['videourl'];
                 
        if (!empty($imgUrlRight)) {
            if (!$this->checkValidUrl($imgUrlRight)) {

                $error[]          =   $this->error;
               
            }
        }
    }

        
	/********From here for uploading mobile images********/
        
	$imageCountRight =   count($_FILES['pageImageMobileRight']['name']); 
        
	if($_FILES['pageImageMobileRight']['name'][0] != '') {
      
		if (!$this->uploadImage($imageCountRight, 'pageImageMobileRight')) {
			$error[]          	=   $this->error;
               
		}
	}
        
	$contentImagesMobileRight	=   [];
        
	if (!empty($data['contentImagesMobileRight'])) {
		if (stristr($data['contentImagesMobileRight'], ',')) {
			$contentImagesMobileRight      =   explode(',', $data['contentImagesMobileRight']);
		} else {
			$contentImagesMobileRight[]    =   trim($data['contentImagesMobileRight']);
		}
            
		$contentImagesMobileRight          =   $this->sanitizeInput($contentImagesMobileRight);
	}
        
	if (!empty($this->uploadedImages)) {
		foreach ($this->uploadedImages as $image) {
			if (!in_array($image, $contentImagesMobileRight)) {
				$contentImagesMobileRight[] = $image;
			}
		}
	}
        
	if (count($contentImagesMobileRight)) {
		if (!$this->checkIfImageExists($contentImagesMobileRight)) {
                
			$error[]  = $this->error;
		}
	}
                
	if(!empty($error)) {
                return redirect('/editpage/' . $data['pageId'])->withInput()->withErrors($error);
            }
 
 	/*******Till here for uploading mobile images for right side********/
 	/*  End */

    //---------- For Ref Urls -------------------------------//

        $refIdFinal  =  '';
        
        if(!empty($data['references'])) {
            
            $data['references']     =   strip_tags($data['references']);
            
            $refIds    =   $this->addReffUrl($data['references']);
     
            $refIdFinal   = implode(',',$refIds); 
     
        }
        
		//---------------End --------------------------------------//


        
        $searchArray    =   ['searchArray' => ['pk_content_id' => $data['pageId']], 'api_call' => 1];
        
        $pageDetails    =   $this->contentRepository->getPageList($searchArray);
        
        if (!count($pageDetails)) {
            return redirect($this->getErrorUrl('Page details not found'));
        }
        
        $pageDetails    =   $pageDetails['0'];
        
        if ($pageDetails['fk_admin_user_id'] <> Auth::user()->pk_admin_user_id) {
            if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_EDIT_OTHER_USERS_CONTENT])) {
                return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
            }
        }
        
        $updateArray    =   [];
        
        $logArray       =   [];
        
        $dateTime       =   date('Y-m-d H:i:s');
        

        if ($pageDetails['ref_ids'] <> $refIdFinal)
        {
            $updateArray['ref_ids']   =   $refIdFinal;
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'ref_ids',
                'old_value'         =>  $pageDetails['ref_ids'],
                'new_value'         =>  $refIdFinal,
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }

        if ($pageDetails['right_image_vid_url'] <>  $imgUrlRight)
        {
            $updateArray['right_image_vid_url']   =    $imgUrlRight;
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'right_image_vid_url',
                'old_value'         =>  $pageDetails['right_image_vid_url'],
                'new_value'         =>  $imgUrlRight ,
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }

        if ($pageDetails['title'] <> $data['pageTitle'])
        {
            $updateArray['title']   =   $data['pageTitle'];
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'title',
                'old_value'         =>  $pageDetails['title'],
                'new_value'         =>  $data['pageTitle'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        if ($pageDetails['fk_page_category_id'] <> $data['categoryId'])
        {
            $updateArray['fk_page_category_id']   =   $data['categoryId'];
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'fk_page_category_id',
                'old_value'         =>  $pageDetails['fk_page_category_id'],
                'new_value'         =>  $data['categoryId'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        if ($pageDetails['page_link_text'] <> $data['pageLinkText'])
        {
            $updateArray['page_link_text']   =   $data['pageLinkText'];
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'page_link_text',
                'old_value'         =>  $pageDetails['page_link_text'],
                'new_value'         =>  $data['pageLinkText'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        if ($pageDetails['display_order'] <> $data['display_order'])
        {
            $updateArray['display_order']   =   $data['display_order'];
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'display_order',
                'old_value'         =>  $pageDetails['display_order'],
                'new_value'         =>  $data['display_order'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        $implodeContentImages       =   implode(',', $contentImages);
        
        if ($pageDetails['contentImages'] <> $implodeContentImages)
        {
            $updateArray['contentImages']   =   $implodeContentImages;
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'contentImages',
                'old_value'         =>  $pageDetails['contentImages'],
                'new_value'         =>  $implodeContentImages,
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        $implodeContentImages       =   implode(',', $contentImagesMobile);
        
        if ($pageDetails['contentImages_Mob'] <> $implodeContentImages)
        {
            $updateArray['contentImages_Mob']   =   $implodeContentImages;
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'contentImages_Mob',
                'old_value'         =>  $pageDetails['contentImages_Mob'],
                'new_value'         =>  $implodeContentImages,
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        
        if ($pageDetails['contentImages_right'] <> $contentImagesRight)
        {
            $updateArray['contentImages_right']   =   $contentImagesRight;
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'contentImages_right',
                'old_value'         =>  $pageDetails['contentImages_right'],
                'new_value'         =>  $contentImagesRight,
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }

        $implodeContentImages       =   implode(',', $contentImagesMobileRight);
        
        if ($pageDetails['contentImages_Mob_right'] <> $implodeContentImages)
        {
            $updateArray['contentImages_Mob_right']   =   $implodeContentImages;
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'contentImages_Mob_right',
                'old_value'         =>  $pageDetails['contentImages_Mob_right'],
                'new_value'         =>  $implodeContentImages,
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        if ($pageDetails['paragraph'] <> $data['paragraph'])
        {
            $updateArray['paragraph']   =   $data['paragraph'];
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'paragraph',
                'old_value'         =>  $pageDetails['paragraph'],
                'new_value'         =>  $data['paragraph'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        if ($pageDetails['status'] <> $data['status'])
        {
            $updateArray['status']   =   $data['status'];
            
            $logArray[]             =   [
                'table_name'        =>  $this->contentRepository->getContentTableName(),
                'table_column'      =>  'status',
                'old_value'         =>  $pageDetails['status'],
                'new_value'         =>  $data['status'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'          =>  $pageDetails['pk_content_id'],
            ];
        }
        
        if (count($updateArray)) {
            $updateArray['pk_content_id']   =    $data['pageId'];
            
            $updateArray['updated_at']   =    $dateTime;
            
            if (!$this->contentRepository->updatePageData($updateArray)) {
                return redirect($this->getErrorUrl($this->contentRepository->getError()));
            }
            
            if (!$this->changeLogRepository->insertLog($logArray)) {
                return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
            }
            
            return redirect($this->getSuccessUrl('Page content updated successfully'));
        }
        
        return redirect($this->getErrorUrl('No change found to updated in page content'));
    }
    
    public function editPageForm($pageId)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data           =   ['searchArray' => ['pk_content_id' => $pageId], 'api_call' => 1];
        
        $pageDetails    =   $this->contentRepository->getPageList($data);
        
        if (!count($pageDetails)) {
            return redirect($this->getErrorUrl('Page details not found'));
        }
        
        $pageDetails    =   $pageDetails['0'];
        
        if ($pageDetails['fk_admin_user_id'] <> Auth::user()->pk_admin_user_id) {
            if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_EDIT_OTHER_USERS_CONTENT])) {
                return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
            }
        }
        
        $categorySearchArray    =   [
            //'searchArray'       =>  ['status'    =>  'Enabled'],
            'api_call'          =>  1,
        ];
        
        $categoryListArray      =   $this->categoryRepository->getCategoryList($categorySearchArray);
        
        if (!$categoryListArray && !is_array($categoryListArray)) {
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }
        
        $categoryList           =   [];
        
        foreach ($categoryListArray as $row) {
            $categoryList[$row['pk_page_category_id']]     =   $row['category_name'];
        }
        
        $displayOrderList       =   $this->contentRepository->getDisplayOrderList();
        
        if (!$displayOrderList) {
            return redirect($this->getErrorUrl($this->contentRepository->getError()));
        }
        
        unset($displayOrderList[count($displayOrderList)]);
        /*
         * As page is being updated, hence no need to increment
         * display order list by 1...Rituraj 8 Sep 2018
         */
        $refurlsVal = null;
        
        if(!empty($pageDetails['ref_ids'])){

            $refurlDetails   =   $this->reffurlRepository->getUrlDetailsFromIds($pageDetails['ref_ids']);
          
          	if(!empty($refurlDetails))
            {
            	$preIds = [];
          
             	$totlaRefurls   =   count($refurlDetails);
            for ($i=0; $i < $totlaRefurls; $i++) {  
           
                	$preIds[] = $refurlDetails[$i]['ref_url'];   
                   
            	} 
                         
       			 $refurlsVal = implode(',', $preIds);
       		 }

           } 
        
        $viewArray      =   [
            'pageDetails'           =>  $pageDetails, 
            'selectOptionsManager'  =>  $this->selectOptionsManager,
            'refurls_val'           =>  $refurlsVal,
            'categoryList'          =>  $categoryList,
            'displayOrderList'      =>  $displayOrderList,
        ];
        
        return view('editpage', $viewArray);
    }
    
    public function createTab(Request $request)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data = $request->all();
        
        $data           =   $this->sanitizeInput($data);
        
        $validatorArray         =   [
            'tabTitle'          =>  'required|max:255',
            //'paragraph'         =>  'required',
            'status'            =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/createtab/' . $data['pageId'] . '/' . $data['pageTitle'])->withInput()->withErrors($validator);
        }
        
        $pageSearchData =   ['searchArray' => ['pk_content_id' => $data['pageId']], 'api_call' => 1];
        
        $pageDetails    =   $this->contentRepository->getPageList($pageSearchData);
        
        if (!count($pageDetails)) {
            return redirect($this->getErrorUrl('Page details not found'));
        }
        
        $saveData = [
            
            'fk_content_id'     =>  $data['pageId'],
            'title'             =>  $data['tabTitle'],
            'paragraph'         =>  !empty($data['paragraph']) ? $data['paragraph'] : null,
            'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
            'status'            =>  $data['status'],
            
        ];
        
        if (!$this->tabRepository->saveTabData($saveData)) {
            return redirect($this->getErrorUrl($this->tabRepository->getError()));
        }
        
        return redirect($this->getSuccessUrl('Tab created successfully'));
    }
    
    public function createTabForm($pageId, $pageTitle)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $viewArray  =   [
                            'pageId'                => $pageId, 
                            'pageTitle'             => $pageTitle,
                            'selectOptionsManager'  => $this->selectOptionsManager
                        ];
        
        return view('createtab', $viewArray);
    }
    
    public function listTabs($pageId, $pageTitle)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_VIEW_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data       =   ['searchArray' => ['fk_content_id' => $pageId]];
        
        $tabList    =   $this->tabRepository->getTabList($data);
        
        if (!$tabList) {
            return redirect($this->getErrorUrl($this->tabRepository->getError()));
        }
        
        $userListArray   =   $this->userRepository->fetchAllUsers(['userIdIn', 'api_call' => 1]);
        
        if (!count($userListArray)) {
            return redirect($this->getErrorUrl($this->userRepository->getError()));
        }
        
        $userList   = [];
        
        foreach ($userListArray as $row) {
            $userList[$row['pk_admin_user_id']] =   $row['fname'] . ' ' . $row['lname'];
        }
        
        $viewArray  =   [
            'tablist'   => $tabList,
            'pageTitle' => $pageTitle,
            'pageId'    => $pageId,
            'userList'  => $userList,
        ];
        
        return view('tablist', $viewArray);
    }
    
    public function editTab(Request $request)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data       =   $request->all();
        
        $data       =   $this->sanitizeInput($data);
        
        $validatorArray         =   [
            'tabTitle'          =>  'required|max:255',
            //'paragraph'         =>  'required',
            'status'            =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/edittab/' . $data['pageId'] . '/' . $data['pageTitle'] . '/' . $data['tabId'])->withInput()
                    ->withErrors($validator);
        }
        
        $searchData =   ['searchArray' => ['pk_tab_id' => $data['tabId'], 'fk_content_id' => $data['pageId']],
                        'api_call' => 1];
        
        $tabDetails =   $this->tabRepository->getTabList($searchData);
        
        if (!count($tabDetails) || !$tabDetails) {
            return redirect($this->getErrorUrl($this->tabRepository->getError()));
        }
        
        $tabDetails = $tabDetails['0'];
        
        if ($tabDetails['fk_admin_user_id'] <> Auth::user()->pk_admin_user_id) {
            if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_EDIT_OTHER_USERS_CONTENT])) {
                return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
            }
        }
        
        $updateData =   [];
        
        $logArray   =   [];
        
        $dateTime   =   date('Y-m-d H:i:s');
        
        if ($tabDetails['title'] <> $data['tabTitle']) {
            
            $updateData['title']    =  $data['tabTitle'];
            
            $logArray[] =   [
                'table_name'    =>  $this->tabRepository->getTableName(),
                'table_column'  =>  'title',
                'old_value'     =>  $tabDetails['title'],
                'new_value'     =>  $data['tabTitle'],
                'created_at'    =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'      =>  $tabDetails['pk_tab_id'],
            ];
        }
        
        if (@$tabDetails['paragraph'] <> @$data['paragraph']) {
            
            $updateData['paragraph']    =  !empty($data['paragraph']) ? $data['paragraph'] : null;
            
            $logArray[] =   [
                'table_name'    =>  $this->tabRepository->getTableName(),
                'table_column'  =>  'paragraph',
                'old_value'     =>  !empty($tabDetails['paragraph']) ? $tabDetails['paragraph'] : null,
                'new_value'     =>  !empty($data['paragraph']) ? $data['paragraph'] : null,
                'created_at'    =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'      =>  $tabDetails['pk_tab_id'],
            ];
        }
        
        if ($tabDetails['status'] <> $data['status']) {
            
            $updateData['status']    =  $data['status'];
            
            $logArray[] =   [
                'table_name'    =>  $this->tabRepository->getTableName(),
                'table_column'  =>  'status',
                'old_value'     =>  $tabDetails['status'],
                'new_value'     =>  $data['status'],
                'created_at'    =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'value_pk'      =>  $tabDetails['pk_tab_id'],
            ];
        }
        
        if (count($updateData)) {
            
            $updateData['pk_tab_id']        =   $tabDetails['pk_tab_id'];
            
            $updateData['fk_content_id']    =   $tabDetails['fk_content_id'];
            
            if (!$this->changeLogRepository->insertLog($logArray)) {
                return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
            }
            
            if (!$this->tabRepository->updateTab($updateData)) {
                return redirect($this->getErrorUrl($this->tabRepository->getError()));
            }
            
            return redirect($this->getSuccessUrl('Tab updated successfully'));
        }
        
        return redirect($this->getErrorUrl('No change in data found to update'));
    }
    
    public function editTabForm($pageId, $pageTitle, $tabId)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $searchData =   ['searchArray' => ['pk_tab_id' => $tabId, 'fk_content_id' => $pageId], 'api_call' => 1];
        
        $tabDetails =   $this->tabRepository->getTabList($searchData);
        
        if (!count($tabDetails) || !$tabDetails) {
            return redirect($this->getErrorUrl($this->tabRepository->getError()));
        }
        
        $tabDetails = $tabDetails['0'];
        
        if ($tabDetails['fk_admin_user_id'] <> Auth::user()->pk_admin_user_id) {
            if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_EDIT_OTHER_USERS_CONTENT])) {
                return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
            }
        }
        
        $viewArray  = [
            'tabDetails'            => $tabDetails,
            'selectOptionsManager'  => $this->selectOptionsManager,
            'pageTitle'             => $pageTitle,
            'pageId'                => $pageId,
            'tabId'                 => $tabId,
        ];
        
        return view('edittab', $viewArray);
    }
    
    public function createAccordion(Request $request)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data           =   $request->all();
        
        $data           =   $this->sanitizeInput($data);
        
        $validatorArray         =   [
            'accordionTitle'    =>  'required|max:255',
            'paragraph'         =>  'required',
            'status'            =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/createaccordion/' . $data['tabId'] . '/' . $data['tabTitle'] . '/' . $data['pageId'] . 
                    '/' . $data['pageTitle'])->withInput()
                    ->withErrors($validator);
        }
        
        $tabSearchData  =   [
            'searchArray'   =>  [
                                    'fk_content_id' =>  $data['pageId'],
                                    'pk_tab_id'     =>  $data['tabId'],
                                ],
            
            'api_call'      =>  1,
        ];
        
        $hideAccordion = 0;

        if(!empty($data['hideAccordion'])) {

            $hideAccordion =  $data['hideAccordion'];
        }
        
        $tabDetails =   $this->tabRepository->getTabList($tabSearchData);
        
        if (!$tabDetails) {
            return redirect($this->getErrorUrl($this->tabRepository->getError()));
        }
        
        $saveData   =   [
            'fk_tab_id'         =>  $data['tabId'],
            'title'             =>  !empty($data['accordionTitle']) ? $data['accordionTitle'] : null,
            'paragraph'         =>  $data['paragraph'],
            'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
            'status'            =>  $data['status'],
            'show_type'         =>  $hideAccordion,
        ];
        
               
        if (!$this->accordionRepository->saveAccordion($saveData)) {
            return redirect($this->getErrorUrl($this->accordionRepository->getError()));
        }
        
        $createAnotherAccordionUrl  =   '/createaccordion/' . $data['tabId'] . '/' . $data['tabTitle'] . '/' 
                                        . $data['pageId'] . '/' . $data['pageTitle'];
        
        $createAnotherAccordionLink =   '<a href="' . $createAnotherAccordionUrl . '">Click here to create another '
                                        . 'accordion for this tab</a>';
        
        return redirect($this->getSuccessUrl('Accordion created successfully. ' . $createAnotherAccordionLink));
    }
    
    public function createAccordionForm($tabId, $tabTitle, $pageId, $pageTitle)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $viewArray  =   [
            'pageId'                => $pageId,
            'tabId'                 => $tabId,
            'pageTitle'             => $pageTitle,
            'tabTitle'              => $tabTitle,
            'selectOptionsManager'  => $this->selectOptionsManager,
        ];
        
        return view('createaccordion', $viewArray);
    }
    
    public function accordionList($tabId, $tabTitle, $pageId, $pageTitle)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_VIEW_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $searchArray    =   ['searchArray' => ['fk_tab_id' => $tabId]];
        
        $accordionList  =   $this->accordionRepository->getAccordionList($searchArray);
        
        if (!$accordionList) {
            return redirect($this->getErrorUrl($this->accordionRepository->getError()));
        }
        
        $userListArray  =   $this->userRepository->fetchAllUsers(['userIdIn', 'api_call' => 1]);
        
        if (!count($userListArray)) {
            return redirect($this->getErrorUrl($this->userRepository->getError()));
        }
        
        $userList       =   [];
        
        foreach ($userListArray as $row) {
            $userList[$row['pk_admin_user_id']] =   $row['fname'] . ' ' . $row['lname'];
        }
        
        $searchData     =   [
                                'searchArray'   =>  [
                                                        'fk_tab_id'         =>  $tabId,
                                                        'fk_content_id'     =>  $pageId,
                                                    ],
            
                                'api_call'      =>  1,
                            ];
        
        $favoritesArray =   $this->favouriteRepository->getFavouritesList($searchData);
        
        $favoriteList   =   [];
        
        if (count($favoritesArray) && is_array($favoritesArray)) {
            foreach ($favoritesArray as $row) {
                $favoriteList[$row['fk_accordion_id']] =   [$row['fk_content_id'], $row['fk_tab_id'], $row['status']];
            }
        }
        
        $viewArray      =   [
            'accordionList'     =>  $accordionList,
            'tabTitle'          =>  $tabTitle,
            'pageTitle'         =>  $pageTitle,
            'tabId'             =>  $tabId,
            'pageId'            =>  $pageId,
            'userList'          =>  $userList,
            'favoriteList'      =>  $favoriteList,
        ];
                
        return view('accordionlist', $viewArray);
    }
    
    public function editAccordion(Request $request)
    {
        
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data               =   $request->all();
        
        $data               =   $this->sanitizeInput($data);
        
        $validatorArray         =   [
            'accordionTitle'    =>  'required|max:255',
            'paragraph'         =>  'required',
            'status'            =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/editaccordion/' . $data['accordionId'] . '/' . $data['tabId'] . '/' . $data['tabTitle'] 
                    . '/' . $data['pageId'] . '/' . $data['pageTitle'])
                    ->withInput()
                    ->withErrors($validator);
        }
        
        $searchArray        =   [
            'searchArray'   =>  [
                'fk_tab_id'         =>  $data['tabId'],
                'pk_accordion_id'   =>  $data['accordionId'],
            ],
            'api_call'      =>   1,
        ];
        
        $hideAccordion = 0;

        if(!empty($data['hideAccordion'])) {

            $hideAccordion =  $data['hideAccordion'];
        }
        
        $accordionDetails   =   $this->accordionRepository->getAccordionList($searchArray);
        
        if (!$accordionDetails) {
            return redirect($this->getErrorUrl($this->accordionRepository->getError()));
        }
        
        $accordionDetails   =   $accordionDetails['0'];
        
        $adminUserId        =   Auth::user()->pk_admin_user_id;
        
        if ($accordionDetails['fk_admin_user_id'] <> $adminUserId) {
            if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_EDIT_OTHER_USERS_CONTENT])) {
                return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
            }
        }
        
        $updateArray        =   [];
        
        $logArray           =   [];
        
        $dateTime           =   date('Y-m-d H:i:s');
        
        $tableName          =   $this->accordionRepository->getTableName();
        
        if (@$accordionDetails['title'] <> @$data['accordionTitle']) {
            
            $updateArray['title']   =   !empty($data['accordionTitle']) ? $data['accordionTitle'] : null;
            
            $logArray[]             =   [
                    'table_name'        =>  $tableName,
                    'table_column'      =>  'title',
                    'old_value'         =>  !empty($accordionDetails['title']) ? $accordionDetails['title'] : null,
                    'new_value'         =>  !empty($data['accordionTitle']) ? $data['accordionTitle'] : null,
                    'created_at'        =>  $dateTime,
                    'fk_admin_user_id'  =>  $adminUserId,
                    'value_pk'          =>  $accordionDetails['pk_accordion_id'],
            ];
        }
        
        if ($accordionDetails['paragraph'] <> $data['paragraph']) {
            
            $updateArray['paragraph']   =    $data['paragraph'];
            
            $logArray[]                 =   [
                    'table_name'        =>  $tableName,
                    'table_column'      =>  'paragraph',
                    'old_value'         =>  $accordionDetails['paragraph'],
                    'new_value'         =>  $data['paragraph'],
                    'created_at'        =>  $dateTime,
                    'fk_admin_user_id'  =>  $adminUserId,
                    'value_pk'          =>  $accordionDetails['pk_accordion_id'],
            ];
        }
        
        if ($accordionDetails['status'] <> $data['status']) {
            $updateArray['status']   =    $data['status'];
            
            $logArray[]             =   [
                    'table_name'        =>  $tableName,
                    'table_column'      =>  'status',
                    'old_value'         =>  $accordionDetails['status'],
                    'new_value'         =>  $data['status'],
                    'created_at'        =>  $dateTime,
                    'fk_admin_user_id'  =>  $adminUserId,
                    'value_pk'          =>  $accordionDetails['pk_accordion_id'],
            ];
        }
        
        if ($accordionDetails['show_type'] <> $hideAccordion) {
            $updateArray['show_type']   =     $hideAccordion;
            
            $logArray[]             =   [
                    'table_name'        =>  $tableName,
                    'table_column'      =>  'show_type',
                    'old_value'         =>  $accordionDetails['show_type'],
                    'new_value'         =>  $hideAccordion,
                    'created_at'        =>  $dateTime,
                    'fk_admin_user_id'  =>  $adminUserId,
                    'value_pk'          =>  $accordionDetails['pk_accordion_id'],
            ];
        }
        
        if (!count($updateArray)) {
            return redirect($this->getErrorUrl('No change found in accordion data to update'));
        }
        
        $updateArray['pk_accordion_id'] =   $data['accordionId'];
        
        $updateArray['fk_tab_id']       =   $data['tabId'];

       // echo '<pre/>';
       // print_r($updateArray); die;
        
        if (!$this->accordionRepository->updateAccordion($updateArray)) {
            return redirect($this->getErrorUrl($this->accordionRepository->getError()));
        }
        
        if (!$this->changeLogRepository->insertLog($logArray)) {
            return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
        }
        
        return redirect($this->getSuccessUrl('Accordion updated successfully'));
    }
    
    public function editAccordionForm($accordionId, $tabId, $tabTitle, $pageId, $pageTitle)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $searchArray        =   [
            'searchArray'   =>  [
                'fk_tab_id'         =>  $tabId,
                'pk_accordion_id'   =>  $accordionId,
            ],
            'api_call'      =>   1,
        ];
        
        $accordionDetails   =   $this->accordionRepository->getAccordionList($searchArray);
        
        if (!$accordionDetails) {
            return redirect($this->getErrorUrl($this->accordionRepository->getError()));
        }
        
        $accordionDetails   =   $accordionDetails['0'];
        
        if ($accordionDetails['fk_admin_user_id'] <> Auth::user()->pk_admin_user_id) {
            if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_EDIT_OTHER_USERS_CONTENT])) {
                return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
            }
        }
        
        $viewArray  =   [
            'tabId'                 =>  $tabId, 
            'tabTitle'              =>  $tabTitle, 
            'pageId'                =>  $pageId,
            'pageTitle'             =>  $pageTitle,
            'accordionId'           =>  $accordionId,
            'accordionDetails'      =>  $accordionDetails,
            'selectOptionsManager'  =>  $this->selectOptionsManager,
        ];
        
        return view('editaccordion', $viewArray);
    }
    
    public function addToFavourite($pageid, $tabid, $accordionid, $status)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data   =   [
                        'fk_tab_id'         =>  $tabid,
                        'fk_accordion_id'   =>  $accordionid,
                        'fk_content_id'     =>  $pageid,
                        'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                        'status'            =>  $status,
                    ];
        
        $message        =   'Accordion added to favourites';
        
        $searchData         =   [
                                        'searchArray'   =>  ['fk_accordion_id'     =>  $accordionid],
                                        'api_call'      =>  1,
                                    ];

        $favoritesArray     =   $this->favouriteRepository->getFavouritesList($searchData);
        
        $favouriteId        =   null;
        
        if (count($favoritesArray) && is_array($favoritesArray)) {

            $favoritesArray =   $favoritesArray['0'];
            
            $favouriteId    =   $favoritesArray['pk_favourites_master'];
            
        }
        
        $logArray       =   [];
        
        if (strtolower($status) == 'enabled') {
            
            if (!$this->favouriteRepository->setFavourite($data)) {
                return redirect($this->getErrorUrl($this->favouriteRepository->getError()));
            }
            
            if (!empty($favouriteId)) {
                $logArray[]     =   [
                    'table_name'        =>  $this->favouriteRepository->getTableName(),
                    'table_column'      =>  'status',
                    'old_value'         =>   'Disabled',
                    'new_value'         =>  'Enabled',
                    'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                    'created_at'        =>  date('Y-m-d H:i:s'),
                    'value_pk'          =>  $favouriteId,
                ];
            }
            
        } else {
            
            if (!$this->favouriteRepository->unsetFavourite($data)) {
                return redirect($this->getErrorUrl($this->favouriteRepository->getError()));
            }
            
            $logArray   =   [];
            
            $logArray[] =   [
                'table_name'        =>  $this->favouriteRepository->getTableName(),
                'table_column'      =>  'status',
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                'old_value'         =>  'Enabled',
                'new_value'         =>  'Disabled',
                'created_at'        =>  date('Y-m-d H:i:s'),
                'value_pk'          =>  $favouriteId,
            ];  
            
            $message    =   'Accordion removed from favourites';
        }
        
        if (count($logArray)) {
            if (!$this->changeLogRepository->insertLog($logArray)) {
                return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
            }
        }
        
        
        return redirect($this->getSuccessUrl($message));
    }
    
    public function showContent($pageLinkText)
    {
        $contentArray   =   $this->contentHelper->createContentArray($pageLinkText);
        
        if ($contentArray) {
            return view('display', ['content' => $contentArray]);
        }
        
        return redirect($this->getErrorUrl($this->contentHelper->getError()));
    }
    
    public function createContentArray($pageId)
    {
        $pageSearchArray    =   [
            'searchArray'   =>  [
                'pk_content_id' =>  $pageId,
            ],
            'api_call'      =>  1,
        ];
        
        $pageDetails        =   $this->contentRepository->getPageList($pageSearchArray);
        
        if (!$pageDetails || !is_array($pageDetails)) {
            return redirect($this->getErrorUrl($this->contentRepository->getError()));
        }
        
        $contentArrayString =   '';
        
        if (count($pageDetails)) {
            $pageDetails    =   $pageDetails['0'];
            
            $contentArrayString .=  '$content        =   [];';
            
            $favouriteCount =   1;
            
            $contentArrayString .=  '$content["header"] ["header_title"] = ' . "'" 
                    . str_ireplace('\"', '"', $pageDetails['title']) . "';";
            
            $contentArrayString .= '$content[\'header\'] [\'header_para\']= ' . "'" . 
                    str_ireplace('\"', '"', $pageDetails['paragraph']) . "';";
            
            //$contentArrayString .= '$content[\'breadcrump\'] = ' . "'". $pageDetails['breadcrump'] . "';";
            
            if (!empty($pageDetails['contentImages'])) {
                
                 $contentImages =  stristr($pageDetails['contentImages'], ',') ? explode(',', $pageDetails['contentImages']) 
                                   : [$pageDetails['contentImages']];
                 
                 if (count($contentImages)) {
                     $headerImageString =   '[';
                     foreach ($contentImages as $image) {
                         $headerImageString .=  "'" . $image . "', ";
                     }
                     $headerImageString .=  '];';
                     
                     $contentArrayString    .=  '$content[\'header\'] [\'header_images\']= ' . $headerImageString;
                 }
            }
            
            
            $searchArray        =   [
                'searchArray'   =>  ['fk_content_id' => $pageId],
                'api_call'      =>  1,
            ];
            
            $tabDetails     =   $this->tabRepository->getTabList($searchArray);
            
            if (!$tabDetails || !is_array($tabDetails)) {
                return redirect($this->getErrorUrl($this->tabRepository->getError()));
            }
            
            if (count($tabDetails)) {
                $i = 1;
                foreach ($tabDetails as $row) {
                    $contentArrayString .=  '$content[\'Tabs\'][\'tab_' . $i . "'" . '][\'title\']  =' . "'". $row['title'] 
                                            . "';";
                    
                    $searchArray        =   [
                        'searchArray'   =>  ['fk_tab_id' => $row['pk_tab_id']],
                        'api_call'      =>  1,
                    ];
                    
                    $accordionDetails   =   $this->accordionRepository->getAccordionList($searchArray);
                    
                    
                    if (count($accordionDetails) && is_array($accordionDetails)) {
                        
                        $j = 1;
                        
                        foreach ($accordionDetails as $accRow) {
                            $contentArrayString .=  '$content[\'Tabs\'][\'tab_' . $i . "'" . '][\'acc_' . $j . "'" 
                                    . '][\'acc_title_text\']    = ' . "'" 
                                    . str_ireplace('\"', '"', $accRow['title']) . "';";
                            
                            $contentArrayString .=  '$content[\'Tabs\'][\'tab_' . $i . "'" . '][\'acc_' . $j . "'" 
                                    . '][\'acc_para_text\']     =' . "'" 
                                    . str_ireplace('\"', '"', $accRow['paragraph']) . "';";
                            
                            $searchArray        =   [
                                
                                'searchArray'   =>  [
                                    'fk_tab_id'         =>  $accRow['fk_tab_id'], 
                                    'fk_accordion_id'   =>  $accRow['pk_accordion_id'],
                                    'fk_content_id'     =>  $pageId,
                                ],
                                
                                'api_call'      =>  1,
                            ];
                            
                            $favouriteDetails   =   $this->favouriteRepository->getFavouritesList($searchArray);
                            
                            if (count($favouriteDetails) && is_array($favouriteDetails)) {
                                
                                $favTextArray   =   explode(' ', str_ireplace('\"', '"', substr(strip_tags($accRow['title']),
                                                            0, 41)));
                                
                                $contentArrayString .=  '$content[\'Favourites\'][\'fav_' . $favouriteCount . "'" 
                                        . '][\'fav' . $favouriteCount . '_qn_1\']  = ' . "'" 
                                        . str_ireplace('\"', '"', substr(strip_tags($accRow['title']), 0, 41)) 
                                        . "...';";
                                
                                $contentArrayString .=  '$content[\'Favourites\'][\'fav_' . $favouriteCount . "'" 
                               . '][\'fav' . $favouriteCount . '_text_1\'] = ' . "'" 
                               . str_ireplace('\"', '"', substr(strip_tags($accRow['paragraph']), 0, 65)) . "...';";

                                $contentArrayString .=  '$content[\'Favourites\'][\'fav_' . $favouriteCount . "'" . 
                                        '][\'fav' . $favouriteCount . '_tab_acc_link\'] = \'tab' . $i . ',acc_' . $j 
                                        . "';";
                                
                                $favouriteCount++;
                            }
                            
                            $j++;
                        }
                    }
                    
                    $i++;
                }
            }
        }
        
        /*if (count($content)) {
            echo '<br>Content Array : <pre>' . print_r($content, true) . '</pre>';
        }*/
        
        if (!empty($contentArrayString)) {
            $formString =   '<form name="form1" id="form1" method="post" action="/viewpostcode.php"
                             style="display:none;">
                                <table cellspacing="0" cellpadding="4" style="border-collapse:collapse;
                                border-color:blue;vertical-align:middle;" border="1" rules="rows" align="center" 
                                width="100%" height="50%">
                                        <tr style="background-color:blue">
                                                <td colspan="2" align="center" >
                                                        <font color="white">View UGN data in HTML Format</font>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td width="31%" align="right" valign="top"  style="padding-top:40px;">
                                                        <strong>Enter Code :</strong>
                                                </td>
                                                <td width="69%" align="left" valign="top"  style="padding-top:40px;">
                                                        <textarea name="pcode" rows="10" cols="70">'. $contentArrayString 
                                                        .'</textarea>
                                                </td>
                                        </tr>
                                        <tr>
                                                <td colspan="2" align="center">
                                                        <input type="submit" name="sub_mit" value="Post" style="width:500px;">
                                                </td>
                                        </tr>
                                </table>
                        </form>
                        <script language="javascript" type="text/javascript">
                            document.form1.submit();
                        </script>';
            
            //echo $contentArrayString;
            echo $formString;exit;
            
        } 
        
        return redirect($this->getErrorUrl('Unable to generate page content'));
    }
    
    public function createUgnDynamicHeader()
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_NEW_CATEGORY])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $this->createUgnDynamicCategory();
        
        $categorySearchArray    =   [
            'searchArray'       =>  [
                'status'        =>  'Enabled',
            ],
            'orderBy'           =>  ['column' => 'display_order', 'order' => 'ASC'],
            'api_call'          =>  1,
        ];
        
        $categoryList   =   $this->categoryRepository->getCategoryList($categorySearchArray);
        
        if (!$categoryList) {
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }
        
        $headerString   =   '';
        
        $headerArray    =   [];
        
        $categoryArray  =   [];
        
        if (count($categoryList)) {
            
            foreach ($categoryList as $row) {
                $categoryArray[$row['pk_page_category_id']]         =   $row['category_name'];
                $headerArray[$row['category_name']]  =   [];
                /*
                 * This is to retain the display order of categories
                 * otherwise the categories display order will have no effect
                 * and the page display order will decide which category is
                 * displayed first...Rituraj 10 Sep 2018
                 */
            }
            
            $pageSearchArray    =   [
                'searchArray'   =>  ['categoryIds' => array_keys($categoryArray), 'status' => 'Enabled'],
                'orderBy'       =>  ['column' => 'display_order', 'order' => 'ASC'],
                'api_call'      =>  1,
            ];
            
            $pageList           =   $this->contentRepository->getPageList($pageSearchArray);
            
            if (!$pageList) {
                return redirect($this->getErrorUrl($this->contentRepository->getError()));
            }
            
            if (count($pageList)) {
                foreach ($pageList as $row) {
                    $headerArray[$categoryArray[$row['fk_page_category_id']]][]  =   $row['page_link_text'];
                }
            }
            
            if (count($headerArray)) {
                
                $headerString   =   '<li><a href="javascript:void(0);"><b>UTILITIES & IMPORTANT INFO</b></a>'
                                    . '<div class="card">';
                
                $newColumn      =   false;
                
                $rowCount       =   0;
                
                foreach ($headerArray as $categoryName=>$categoryArrayRow) {
                    
                    $megaColumnClass    =   'mega-column';
                    
                    if ($newColumn) {
                        $megaColumnClass    =   'mega-column mega-bg';
                        $newColumn          =   false;
                        $rowCount           =   0;
                    }
                    
                    $headerString           .=  '<div class="'. $megaColumnClass . '">'
                                                . '<h3 class="orange"><a href="#">' . $categoryName . '</a>'
                                                . '</h3><ul class="border-bottom">';
                    
                    foreach ($categoryArrayRow as $pageLinkText) {
                        $headerString   .=  '<li><a href="/display/' . $pageLinkText . '">' . $pageLinkText . '</a></li>';
                        
                        $rowCount++;
                        
                        if ($rowCount%2 == 0) {
                            $newColumn = true;
                        }
                    }
                    
                    $headerString   .=  '</ul></div>';
                }
                
                $headerString   .=  '</div></li>';
            }
        }
        
        if (empty($headerString)) {
            $headerString   =   '<li>
                                    <a href="#"><b>UTILITIES & IMPORTANT INFO</b></a>
                                    <div class="card">
                                        <div class="mega-column">
                                            <h3 class="orange"><a href="#">No Pages Found </a></h3>
                                         </div>
                                    </div>
                              </li>';
        }
        
        if (!file_put_contents(env('UGNHEADERPATH'), $headerString)) {
            return $this->getErrorUrl('Unable to write ugn header file to location : ' . env('UGNHEADERPATH'));
        }

        if (!$this->writeCategoryArrayString($categoryArray)) {
            return redirect($this->getErrorUrl($this->error));
        }
        
        if (!$this->ugnHeaderLogRepository->insertLog(['fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id])) {
            return redirect($this->getErrorUrl($this->ugnHeaderLogRepository->getError()));
        } 
        
        $successMessage = 'UGN header file written sucessfully to location : ' . env('UGNHEADERPATH');
        
        $successMessage .= '<br>Category Array file written successfully to location : ' . env('UGNCATEGORYARRAYPATH');
        
        return redirect($this->getSuccessUrl($successMessage));
    }
    

    public function createUgnDynamicCategory()
    {

        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_NEW_CATEGORY])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $categorySearchArray    =   [
            'searchArray'       =>  [
                'status'        =>  'Enabled',
            ],
            'orderBy'           =>  ['column' => 'display_order', 'order' => 'ASC'],
            'api_call'          =>  1,
        ];
        
        $categoryList   =   $this->categoryRepository->getCategoryList($categorySearchArray);
        
        if (!$categoryList) {
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }
        
        $headerString   =   '';
        
        $headerArray    =   [];

        $headerContentArray = [];
        
        $categoryArray  =   [];
        
        if (count($categoryList)) {
            
            foreach ($categoryList as $row) {
                $categoryArray[$row['pk_page_category_id']]         =   $row['category_name'];
                $headerArray[$row['category_name']] [] =  $row['category_image'];

                $headerContentArray[$row['category_name']]  =   [];
                /*
                 * This is to retain the display order of categories
                 * otherwise the categories display order will have no effect
                 * and the page display order will decide which category is
                 * displayed first...Rituraj 10 Sep 2018
                 */
            }
            
            $pageSearchArray    =   [
                'searchArray'   =>  ['categoryIds' => array_keys($categoryArray), 'status' => 'Enabled'],
                'orderBy'       =>  ['column' => 'display_order', 'order' => 'ASC'],
                'api_call'      =>  1,
            ];
            
            $pageList           =   $this->contentRepository->getPageList($pageSearchArray);
            
            if (!$pageList) {
                return redirect($this->getErrorUrl($this->contentRepository->getError()));
            }
            
            if (count($pageList)) {
                foreach ($pageList as $row) {
                    $headerArray[$categoryArray[$row['fk_page_category_id']]][]  =   $row['page_link_text'];

                    $headerContentArray[$categoryArray[$row['fk_page_category_id']]][]  =   $row['page_link_text'];
                }
            }
            //print_r($headerContentArray);die;
            if (count($headerArray)) {
                
                $headerString   =   '<div class="container">       
        <h4 class="mb-4 mt-5">Know Govt Utilities & Procedures</h4>
        <div class="tabs card">
            <nav>
                <div class="gov-tabs nav nav-tabs nav-fill" id="nav-tab" role="tablist">';
                
                $newColumn      =   false;
                
                $rowCount       =   1;
                
                foreach ($headerArray as $categoryName=>$categoryArrayRow) {
                    
                    if($rowCount < 7) {      

                    $tab = 'cat'.$rowCount;          
                   
                    
                    $headerString           .=  '<a class="gov-tabs gov-link nav-item nav-link '. ($rowCount==3 ? 'active' : '') .'" id="nav-'.$tab.'-tab" data-toggle="tab" href="#nav-'.$tab.'" role="tab" aria-controls="nav-'.$tab.'" aria-selected="true">
                        <div class="tabicon"><img src="/images/ugn/category_img/'.$categoryArrayRow[0].'" class="img-fluid" alt="Responsive image"> </div>
                        ' . $categoryName . '</a>';
                                                
                    
                                     
            $rowCount++; 
            }      // $headerString   .=  '</ul></div>';
                }

                $headerString   .=  '<a class="gov-tabs gov-link nav-item nav-link" href="/All-Category">
                        <div class="tabicon"> <img src="images/view_all.png" class="img-fluid" alt="Responsive image"> </div>
                        View All</a>';
                
                $headerString   .=  '</div></nav>';

                $headerString   .= '<div class="tab-content pt-4 pb-3" id="nav-tabContent">';
$rowCount1 = 1;

                foreach ($headerContentArray as $categoryName=>$categoryArrayRow1) {
                    $colCount1 = 1;
                    if($rowCount1 < 7) {   

                     $tabopen = 'cat'.$rowCount1;               
                   
                  $headerString     .=  '<div class="tab-pane fade '. ($rowCount1==3 ? 'show active' : '') .'" id="nav-'.$tabopen.'" role="tabpanel" aria-labelledby="nav-'.$tabopen.'-tab">
                    <div class="container-fluid gov-procedures">    
                            <ul class="list-unstyled">';
                                                                 
                    
                    foreach ($categoryArrayRow1 as $pageLinkText) {
                        if($colCount1 == 1) {
                         $headerString   .=  '<li class="row mb-3">';
                     }
                        if($colCount1%5 == 0) {

                       $headerString   .=  '<li class="row mb-3">';

                       }
                        $headerString   .=  '<div class="col-3">
                                        <div class="card box-effect">
                                          <div class="card-body p-2">
                                            <div class="card-title m-0"><a class="card-link d-flex justify-content-between align-items-center" href="/display/' . $pageLinkText . '">' . $pageLinkText . '<i class="fa fa-angle-right fa-2x align-middle"></i></a> </div>
                                        </div>
                                        </div>
                                         </div>
                                   ';
                                   if($colCount1 ==1) {
                         $headerString   .=  '</li">';
                     }
                                   if($colCount1 == $colCount1+4) {
                        $headerString   .='</li>';
                    }
                       
                $colCount1++;        
                        
                    }

                    $headerString   .='</ul></div> </div>';

             $rowCount1++;    }

            }
 $headerString   .='</div></div>';


            }
        }
        
       // echo $headerString; die;
        
        if (!file_put_contents(env('UGNCATEGORYPATH'), $headerString)) {
            return $this->getErrorUrl('Unable to write ugn header file to location : ' . env('UGNCATEGORYPATH'));
        }

        /*if (!$this->writeCategoryArrayString($categoryArray)) {
            return redirect($this->getErrorUrl($this->error));
        }*/
        
        /*if (!$this->ugnHeaderLogRepository->insertLog(['fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id])) {
            return redirect($this->getErrorUrl($this->ugnHeaderLogRepository->getError()));
        } */
        
        $successMessage = 'UGN header file written sucessfully to location : ' . env('UGNCATEGORYPATH');
        
       // $successMessage .= '<br>Category Array file written successfully to location : ' . env('UGNCATEGORYARRAYPATH');
        
        return redirect($this->getSuccessUrl($successMessage));
    }


    
    public function writeCategoryArrayString($categoryArray)
    {
        //echo '<br>CategoryArray : <pre>' . print_r($categoryArray, true) . '</pre>';exit;
        
        $categoryArrayString        =   null;
        
        if (count($categoryArray)) {
            
            $categoryArrayString    =   '<?php $categoryArray = [];';

            foreach ($categoryArray as $categoryId => $categoryValue) {
                $categoryArrayString    .=   '$categoryArray["' . $categoryId . '"] = "' . $categoryValue . '";';
            }

            $categoryArrayString    .=  '?>';


            if (!empty($categoryArrayString)) {
                if (!file_put_contents(env('UGNCATEGORYARRAYPATH'), $categoryArrayString)) {
                    $this->error    =   'Unable to write ugn category array file to location : ' . $headerPath;
                    return false;
                }
            } else {
                $this->error    =   'Unable to create category array string';
                return false;
            }
            return true;
        }
        
        $this->error = 'No categories found for search drop down';
        
        return false;
    }
    
    public function insertContentArray(Request $request)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data       =   $request->all();
        
        $imageCount =   count($_FILES['pageImage']['name']);
        
        if ($imageCount) {
            if (!$this->uploadImage($imageCount)) {
                $error  =   is_array($this->error) ? $this->error : [$this->error];
                return redirect('/insertcontentarray')->withInput()->withErrors($error);
            }
        }
        
        //$data                   =   $this->sanitizeInput($data);
        
        $validatorArray         =   [
            'pageLinkText'      =>  'required|max:50',
            'categoryId'        =>  'required',
            'display_order'     =>  'required',
            'contentArray'      =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/insertcontentarray')->withInput()->withErrors($validator);
        }
        
        $contentImages  =   [];
        
        if (!empty($data['contentImages'])) {
            if (stristr($data['contentImages'], ',')) {
                $contentImages      =   explode(',', $data['contentImages']);
            } else {
                $contentImages[]    =   trim($data['contentImages']);
            }
            
            $contentImages  =   $this->sanitizeInput($contentImages);
        }
        
        if (!empty($this->uploadedImages)) {
            foreach ($this->uploadedImages as $image) {
                if (!in_array($image, $contentImages)) {
                    $contentImages[] = $image;
                }
            }
        }
        
        /*if (count($contentImages)) {
            $savedImagesArray    =   $this->imageRepository->checkIfExist($contentImages);
        
            //echo '<br>Saved images : <pre>' . print_r($savedImagesArray, true) . '</pre>';//exit;

            if (!$savedImagesArray) {
                return redirect('/insertcontentarray')->withInput()->withErrors([$this->imageRepository->getError()]);
            }
            
            if (count($savedImagesArray)) {

                if (empty($savedImagesArray['0']) || !is_array($savedImagesArray['0'])) {
                    $newArray           =   $savedImagesArray;
                    $savedImagesArray   =   [];
                    $savedImagesArray[] =   $newArray;
                }
                
                //echo '<br>saved images array (after) : <pre>' . print_r($savedImagesArray, true) . '</pre>';exit;
                
                $error              =   [];

                $savedImages        =   [];

                
                foreach ($savedImagesArray as $row) {
                    $savedImages[]  =   $row['image_name'];
                }

                foreach ($contentImages as $image) {
                    $image          =   trim($image);

                    if (!in_array($image, $savedImages)) {
                        $error[]    =   'Image : <strong>' . $image . '</strong> not found. Please check or upload again.';
                    }
                }

                if (count($error)) {
                    return redirect('/insertcontentarray')->withInput()->withErrors($error);
                }
            }
        }*/
        
        if (!$this->checkIfImageExists($contentImages)) {
            $error  =   is_array($this->error) ? $this->error : [$this->error];
            return redirect('/insertcontentarray')->withInput()->withErrors($error);
        }
        
        $contentData = [
            'pageLinkText'          =>  $data['pageLinkText'],
            'categoryId'            =>  $data['categoryId'],
            'display_order'         =>  $data['display_order'],
            'content'               =>  $data['contentArray'],
        ];
        
        if (!$this->contentHelper->insertDataFromContentArray($contentData)) {
            return redirect('/insertcontentarray')->withInput()->withErrors([$this->contentHelper->getError()]);
        }
        
        return redirect($this->getSuccessUrl('Content added successfully'));
    }
    
    public function insertContentArrayForm()
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_CONTENT])) {
            return redirect($this->getErrorUrl('You don\'t have sufficient rights to do this activity'));
        }
        
        $categorySearchArray    =   [
            //'searchArray'       =>  ['status'    =>  'Enabled'],
            'api_call'          =>  1,
        ];
        
        $categoryListArray      =   $this->categoryRepository->getCategoryList($categorySearchArray);
        
        if (!$categoryListArray && !is_array($categoryListArray)) {
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }
        
        $categoryList           =   [];
        
        foreach ($categoryListArray as $row) {
            $categoryList[$row['pk_page_category_id']]     =   $row['category_name'];
        }
        
        $displayOrderList       =   $this->contentRepository->getDisplayOrderList();
        
        if (!$displayOrderList) {
            return redirect($this->getErrorUrl($this->contentRepository->getError()));
        }
        
        $createPageViewArray = [
            'selectOptionsManager'      =>  $this->selectOptionsManager,
            'categoryList'              =>  $categoryList,
            'displayOrderList'          =>  $displayOrderList,
        ];
        
        return view('createpagecontentarray', $createPageViewArray);
    }

    public function addReffUrl($refurls) 
    {
        $this->error                =     [];

        try {
            
         $preIds =array(); 
         
            $this->reffUrl   =     [];
            $refurls = explode(',',$refurls);
            $totalUrls  =  count($refurls);
            for ($i=0; $i< $totalUrls; $i++) {  
                    if(!empty($refurls[$i])){
                    $refurlDetails   =   $this->reffurlRepository->checkIfExist($refurls[$i]);

                    if ($refurlDetails > 0) {
                    $preIds[] = $refurlDetails[0]['pk_ref_id'];
                    }else{ 
                    $saveRefData  =   [
                        'ref_url'        =>  $refurls[$i],                        
                    ];
                    $insert = $this->reffurlRepository->saveRefUrls($saveRefData);
                    if ($insert) {
                        $preIds[] = $insert;
                    }else{
                         $this->error[]    =   $this->reffurlRepository->getError();
                    }

                }
             // print_r($preIds);
            }
        }
          
            if (count($this->error)) {
                return false;
            }
            return  array_unique($preIds); 
            //return true;
        } catch (\Exception $ex) {
            $this->error[]    =   $ex->getMessage();
            return false;
        }
        
        
    }

    
}

