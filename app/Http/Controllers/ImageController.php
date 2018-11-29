<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

use App\Models\Image\ImageRepository;
use App\Models\User\UserRepository;
use App\Models\Clog\ChangeLogRepository;

use App\Helpers\RightsConstantsManager;


class ImageController extends Controller {

    protected $imageRepository;
    
    protected $userRepository;
    
    protected $changeLogRepository;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        parent::__construct();
        $this->imageRepository      =   new ImageRepository();
        $this->userRepository       =   new UserRepository();
        $this->changeLogRepository  =   new ChangeLogRepository();
    }
    
    public function uploadImages() {
        
        $imageCount =   count($_FILES['pageImage']['name']);
        
        if (empty($_FILES['pageImage']['name']['0'])) {
            return redirect('/viewimages')->withInput()->withErrors(['No images found to upload']);
        }
        
        //echo '<br>From upload images, file array : <pre>' . print_r($_FILES, true) . '</pre>';exit;
        
        if ($imageCount) {
            if (!$this->uploadImage($imageCount)) {
                $error  =   is_array($this->error) ? $this->error : [$this->error];
                //echo '<br>Error : <pre>' . print_r($error, true) . '</pre>';exit;
                return redirect('/viewimages')->withInput()->withErrors($error);
            } 
        }
        
        return redirect('/viewimages')->withInput()->withErrors(['Images uploaded successfully']);
    }
    
    public function showImages(Request $request)
    {
        $data           =   $request->all();
        
        $searchArray    =   [];
        
        if (!empty($data['createdBy'])) {
            $searchArray['searchArray']    =   ['fk_admin_user_id'  =>  $data['createdBy']];
        }
        
        if (!empty($data['imageName'])) {
            $searchArray['searchArray']['image_name']   =   $data['imageName'];
        }
        
        $imageList      =   $this->imageRepository->getImageList($searchArray);
        
        if (!$imageList && !is_array($imageList)) {
            if (strtolower($this->imageRepository->getError()) <> 'no images found') {
                return redirect($this->getErrorUrl($this->imageRepository->getError()));
            }
        }
        
        $userListArray  =   $this->userRepository->fetchAllUsers(['api_call' => 1]);
        
        if (!$userListArray) {
            return redirect($this->getErrorUrl($this->userRepository->getError()));
        }
        
        $userList       =   [];
        
        if (count($userListArray)) {
            foreach ($userListArray as $row) {
                $userList[$row['pk_admin_user_id']]     =   $row['fname'] . ' ' . $row['lname'];
            }
        }
        
        $createdBy      =   !empty($data['createdBy']) ? $data['createdBy'] : '';
        
        $imageName      =   !empty($data['imageName']) ? $data['imageName'] : '';
        
        $viewArray      =   [
                                'imageList'             =>  $imageList, 
                                'userList'              =>  $userList, 
                                'createdBy'             =>  $createdBy,
                                'imageName'             =>  $imageName,
                                'selectOptionsManager'  =>  $this->selectOptionsManager,
                                
                            ];
        
        return view('imagelist', $viewArray);
    }
}

