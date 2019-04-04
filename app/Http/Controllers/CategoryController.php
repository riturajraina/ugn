<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\User\UserRepository;
use App\Models\Clog\ChangeLogRepository;

use App\Helpers\RightsConstantsManager;

use App\Models\Category\CategoryRepository;

use App\Models\Image\ImageRepository;

class CategoryController extends Controller {

    protected $changeLogRepository;
    
    protected $categoryRepository;
    
    protected $userRepository;
    
    protected $imageRepository;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        parent::__construct();
        $this->changeLogRepository  =   new ChangeLogRepository();
        $this->categoryRepository   =   new CategoryRepository();
        $this->userRepository       =   new UserRepository();
        $this->imageRepository          =   new ImageRepository();
    }
    
    public function createCategory(Request $request)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_NEW_CATEGORY])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data   =   $request->all();
        
        $data   =   $this->sanitizeInput($data);
        
        $validatorArray  =   [
            'category'      =>  'required|max:100',
            'status'        =>  'required',
            'displayOrder'  =>  'required',
            'categoryImage' =>  'required',
        ];
        
        $validator      = Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/createcategory')->withInput()->withErrors($validator);
        }
        
         if($_FILES['categoryImage']['name'][0] != '') {           
          
 
            if (!$this->uploadImage(1, 'categoryImage','category_img')) {
                 $error          =   is_array($this->error) ? $this->error : [$this->error];
                
            }        
        
        }

        $categoryImg = '';
        if (!empty($this->uploadedImages)) {

            $categoryImg = $this->uploadedImages;
            $categoryImg  =  implode(',',$categoryImg);
          
        }

         if(!empty($error)){
            
             return redirect('/createCategory')->withInput()->withErrors($error);
        }

              
        $createData =   [
            'category_name'     =>  $data['category'],
            'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
            'display_order'     =>  $data['displayOrder'],
            'category_image'    =>  $categoryImg,
            'status'            =>  $data['status'],
        ];
        
        if (!$this->categoryRepository->createCategory($createData)) {
            return redirect('/createcategory')->withInput()->withErrors([$this->categoryRepository->getError()]);
        }
        
        return redirect($this->getSuccessUrl('Category created successfully. <a href="/createcategory">Click Here</a> '
                                             . 'to create another category'));
    }
    
    
    public function showCreateCategoryForm(Request $request)
    {
        $rightsArray        =   [
                                    RightsConstantsManager::CAN_CREATE_AND_EDIT_NEW_CATEGORY, 
                                    RightsConstantsManager::CAN_VIEW_AND_SEARCH_CATEGORIES,
                                ];
        
        if (!$this->checkRights(['rightId' => $rightsArray])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data   =   $request->all();
        
        $searchArray        =   [];
        
        if (!empty($data['categorySearch'])) {
            
            
            if (!empty($data['searchCategory'])) {
                $searchArray['category_name']       =   $data['searchCategory'];
            }
            
            if (!empty($data['createdBy'])) {
                $searchArray['fk_admin_user_id']    =   $data['createdBy'];
            }
            
            if (!empty($data['searchStatus'])) {
                $searchArray['status']              =   $data['searchStatus'];
            }
        } 
        
        $categoryList       =   $this->categoryRepository->getCategoryList(['searchArray' => $searchArray]);
        
        if (!$categoryList && !is_array($categoryList)) {
            //echo '<br>Category list : <pre>' . print_r($categoryList, true) . '</pre>';exit;
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }
        
        $displayOrderList   =   $this->categoryRepository->getDisplayOrderList();
        
        if (!$displayOrderList) {
            //echo '<br>displayOrder list : <pre>' . print_r($displayOrderList, true) . '</pre>';exit;
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }
        
        $userListArray  =   $this->userRepository->fetchAllUsers(['userIdIn', 'api_call' => 1]);
        
        if (!$userListArray) {
            //echo '<br>userListArray : <pre>' . print_r($userListArray, true) . '</pre>';exit;
            return redirect($this->getErrorUrl($this->userRepository->getError()));
        }
        
        $userList   = [];
        
        foreach ($userListArray as $row) {
            $userList[$row['pk_admin_user_id']] =   $row['fname'] . ' ' . $row['lname'];
        }
        
        $createdBy      =   !empty($data['createdBy']) ? $data['createdBy'] : '';
        
        $searchStatus   =   !empty($data['searchStatus']) ? $data['searchStatus'] : ''; 
        
        $searchCategory =   !empty($data['searchCategory']) ? $data['searchCategory'] : '';
        
        $viewArray      =   [
                                'selectOptionsManager'  =>  $this->selectOptionsManager, 
                                'categoryList'          =>  $categoryList,
                                'userList'              =>  $userList,
                                'displayOrderList'      =>  $displayOrderList,
                                'createdBy'             =>  $createdBy,
                                'searchStatus'          =>  $searchStatus,
                                'searchCategory'        =>  $searchCategory,
                            ];
        
        return view('createcategory', $viewArray);
    }
    
    public function editCategory(Request $request) 
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_NEW_CATEGORY])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
    	$error	=	[];
        
        $data   =   $request->all();
        
        $validatorArray =   [
            'category'      =>  'required|max:100',
            'status'        =>  'required',
            'displayOrder'  =>  'required',
        ];
        
        $validator              =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/editcategory/' . $data['categoryId'])->withInput()->withErrors($validator);
        }
        

         if(isset($_FILES['categoryImage']['name'][0]) && $_FILES['categoryImage']['name'][0] != '') {           
          
 
            if (!$this->uploadImage(1, 'categoryImage','category_img')) {
                 $error[]          =   is_array($this->error) ? $this->error : [$this->error];
                
            }        
        
        }

        $categoryImg = '';
        if (!empty($this->uploadedImages)) {
            
            $categoryImg = $this->uploadedImages;
            $categoryImg  =  implode(',',$categoryImg);
        } else {
            
            $categoryImg = $data['category_pre_img'];
        }

         if(!empty($error)){
            
             return redirect('/editcategory/' . $data['categoryId'])->withInput()->withErrors($error);
        }

        
        $categorySearchArray    =   [
            'searchArray'       =>   ['pk_page_category_id' => $data['categoryId']],
            'api_call'          =>   1,
        ];
        
        $categoryDetails   =   $this->categoryRepository->getCategoryList($categorySearchArray);
        
        if (!$categoryDetails && !is_array($categoryDetails)) {
            return redirect('/editcategory/' . $data['categoryId'])->withInput()->withErrors(['Category details not found']);
            //return redirect($this->getErrorUrl('Category details not found'));
        }
        
        $categoryDetails    =   $categoryDetails['0'];
        
        $updateArray        =   [];
        
        $logArray           =   [];
        
        $dateTime           =   date('Y-m-d H:i:s');
        
        if ($categoryDetails['category_image'] <> $categoryImg) {
            $updateArray['category_image']   =   $categoryImg;
            
            $logArray[]     =   [
                'table_name'        =>  $this->categoryRepository->getTableName(),
                'table_column'      =>  'category_name',
                'old_value'         =>  $categoryDetails['category_image'],
                'new_value'         =>  $categoryImg,
                'value_pk'          =>  $data['categoryId'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
            ];
        }
        
        if ($categoryDetails['category_name'] <> $data['category']) {
            $updateArray['category_name']   =   $data['category'];
            
            $logArray[]     =   [
                'table_name'        =>  $this->categoryRepository->getTableName(),
                'table_column'      =>  'category_name',
                'old_value'         =>  $categoryDetails['category_name'],
                'new_value'         =>  $data['category'],
                'value_pk'          =>  $data['categoryId'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
            ];
        }
        
        if ($categoryDetails['display_order'] <> $data['displayOrder']) {
            $updateArray['display_order']   =   $data['displayOrder'];
            
            $logArray[]     =   [
                'table_name'        =>  $this->categoryRepository->getTableName(),
                'table_column'      =>  'display_order',
                'old_value'         =>  $categoryDetails['display_order'],
                'new_value'         =>  $data['displayOrder'],
                'value_pk'          =>  $data['categoryId'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
            ];
        }
        
        if ($categoryDetails['status'] <> $data['status']) {
            $updateArray['status']   =   $data['status'];
            
            $logArray[]     =   [
                'table_name'        =>  $this->categoryRepository->getTableName(),
                'table_column'      =>  'status',
                'old_value'         =>  $categoryDetails['status'],
                'new_value'         =>  $data['status'],
                'value_pk'          =>  $data['categoryId'],
                'created_at'        =>  $dateTime,
                'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
            ];
        }
        
        if (count($updateArray)) {
            $updateArray['pk_page_category_id']  =   $data['categoryId'];
            if (!$this->categoryRepository->updateCategory($updateArray)) {
                //return redirect($this->getErrorUrl($this->categoryRepository->getError()));
                return redirect('/editcategory/' . $data['categoryId'])->withInput()
                        ->withErrors([$this->categoryRepository->getError()]);
            }
            
            if (!$this->changeLogRepository->insertLog($logArray)) {
                //return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
                return redirect('/editcategory/' . $data['categoryId'])->withInput()
                        ->withErrors([$this->changeLogRepository->getError()]);
            }
            
            return redirect($this->getSuccessUrl('Category updated successfully'));
        }
        
        //return redirect($this->getErrorUrl('No change found to update'));
        return redirect('/editcategory/' . $data['categoryId'])->withInput()->withErrors(['No change found to update']);
    }
    
    public function editCategoryForm($categoryId)
    {
        if (!$this->checkRights(['rightId' => RightsConstantsManager::CAN_CREATE_AND_EDIT_NEW_CATEGORY])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $categorySearchArray    =   [
            'searchArray'       =>   ['pk_page_category_id' => $categoryId],
            'api_call'          =>   1,
        ];
        
        $categoryDetails   =   $this->categoryRepository->getCategoryList($categorySearchArray);
        
        if (!$categoryDetails && !is_array($categoryDetails)) {
            //echo '<br>Category list : <pre>' . print_r($categoryDetails, true) . '</pre>';exit;
            return redirect($this->getErrorUrl('Category details not found'));
        }
        
        $categoryDetails    =   $categoryDetails['0'];
        
        $categoryName       =   !empty(Input::old('category')) ? Input::old('category') : $categoryDetails['category_name'];
        
        $displayOrder       =   !empty(Input::old('displayOrder')) ? Input::old('displayOrder') 
                                : $categoryDetails['display_order'];
        
        $categoryImage       =   !empty(Input::old('categoryImage')) ? Input::old('categoryImage') 
                                : $categoryDetails['category_image'];
        
        $status             =   !empty(Input::old('status')) ? Input::old('status') : $categoryDetails['status']; 
        
        $displayOrderList   =   $this->categoryRepository->getDisplayOrderList();
        
        unset($displayOrderList[count($displayOrderList)]);
        
        if (!$displayOrderList) {
            return redirect($this->getErrorUrl($this->categoryRepository->getError()));
        }
        
        $viewArray  =   [
            'categoryId'            =>  $categoryId,
            'categoryName'          =>  $categoryName,
            'displayOrder'          =>  $displayOrder,
            'categoryImage'         =>  $categoryImage, 
            'status'                =>  $status,
            'selectOptionsManager'  =>  $this->selectOptionsManager,
            'displayOrderList'      =>  $displayOrderList,
        ];
        
        return view('editcategory', $viewArray);
    }
}



