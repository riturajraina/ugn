<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Curl;
use App\Helpers\GenerateRandom;
use App\Helpers\DateValidator;
use App\Helpers\SelectOptionsManager;
use App\Helpers\GeneralHelper;
use App\Helpers\EmailMobileValidator;
use App\Helpers\RadioOptionsManager;
use App\Helpers\Mobile_Detect;
use App\Models\Clog\ChangeLogRepository;
use App\Helpers\CheckboxManager;
//use App\Helpers\RightsConstantsManager;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $error = null;
    
    protected $generateRandom;
    
    protected $dateValidator;
    
    protected $selectOptionsManager;
    
    protected $radioOptionsManager;

    protected $generalHelper;
    
    protected $emailMobileValidator;
    
    protected $checkboxManager;
    
    protected $changeLogRepository;
    
    protected $uploadedImages;
    
    protected $deviceDetector;
    
    //protected $rightsConstantsManager;
    
    public function __construct() {
        $this->generateRandom = new GenerateRandom();
        $this->dateValidator = new DateValidator();
        $this->selectOptionsManager = new SelectOptionsManager();
        $this->generalHelper = new GeneralHelper();
        $this->emailMobileValidator = new EmailMobileValidator();
        $this->radioOptionsManager = new RadioOptionsManager();
        $this->checkboxManager      = new CheckboxManager();
        $this->deviceDetector   =   new Mobile_Detect();
        $this->changeLogRepository = new ChangeLogRepository();
        $this->uploadedImages       =   [];
        //$this->rightsConstantsManager = new RightsConstantsManager();
    }

    public function sanitizeInput($data)
    {
            array_walk($data, array($this, 'sanitize'));
            return array_filter($data);
    }

    public function sanitize(&$value, $key)
    {
        if (!is_array($value)) {
            $value = trim(addslashes(stripslashes($value)));
        }    
    }

    public function checkIfLoggedIn()
    {   
        if (!empty(session('userDetails'))) {
            return true;
        }
        
        return false;
    }
    
    

    public function getFileExtension($filePath) {
        $extArray = explode('.', $filePath);

        $count = count($extArray);

        if (!is_array($extArray) || !$count) {
            $this->error = 'No extension found';
            return false;
        }

        return $extArray[($count-1)];
        
        $this->error = 'No extension found';
        
        return false;
    }
    
    public function getFileNameWithoutExtension($filePath) {
        $extArray = explode('.', $filePath);

        $count = count($extArray);

        if (!is_array($extArray) || !$count) {
            return $filePath;
        }

        unset($extArray[($count-1)]);
        
        return implode('.', $extArray);
    }
    
    public function getFileNameFromPath($filePath) {
        $pathArray = explode('/', $filePath);
        
        if (is_array(($pathArray))) {
            return $pathArray[(count($pathArray) - 1)];
        }
        
        return $filePath;
    }
    
    public function extractNameFromEmail($email)
    {
        $emailArray = explode('@', $email);
        
        if (is_array($emailArray)) {
            return str_ireplace('.', '', $emailArray['0']);
        }
        
        return $email;
    }
    
    public function sendSmsFromApi($data)
    {
        /*$apiUrl = 'https://www.smsjust.com/sms/user/urlsms.php?username=dbdigital&pass=dbdigital@123&senderid=BHASKR'
                . '&dest_mobileno=' . urlencode($data['mobileNumber']) . '&msgtype=' . urlencode($data['type'])
                . '&message=' . urlencode($data['smsText']) . '&response=Y';*/
        
        $apiUrl = 'https://www.smsjust.com/sms/user/urlsms.php';
        
        
        /*$postString = 'username=dbdigital&pass=dbdigital@123&senderid=BHASKR'
                . '&dest_mobileno=' . urlencode($data['mobileNumber']) . '&msgtype=' . urlencode($data['type'])
                . '&message=' . urlencode($data['smsText']) . '&response=Y';*/
        
        $postString = 'username=dbdigital&pass=dbdigital@123&senderid=BHASKR'
                . '&dest_mobileno=' . urlencode($data['mobileNumber']) . '&msgtype=' . urlencode($data['type'])
                . '&message=' . $data['smsText'] . '&response=Y';
        
        $result = $this->getCurlData($apiUrl, $postString);
        
        if (!$result) {
            return false;
        }
        
        $this->apiInfo = $result;
        
        return true;
    }
    
    function cleanExcelData(&$str) 
    {
	
	// escape tab characters
        $str = preg_replace("/\t/", "\\t", $str);

        // escape new lines
        $str = preg_replace("/\r?\n/", "\\n", $str);

        if ($str == 't')
            $str = 'TRUE';

            if ($str == 'f')
            $str = 'FALSE';

            if (preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str))
            {
                $str = "'$str";
            }

        if (strstr($str, '"'))
            $str = '"' . str_replace('"', '""', $str) . '"';

            $str = mb_convert_encoding($str, 'UTF-16LE', 'UTF-8');
    }
    
    
    
    
    
    public function makeNumeric($string)
    {
        return (preg_replace('/[^0-9]/', '', $string));
    }
    
    public function checkRights($data)
    {
        if (is_array($data['rightId'])) {
            
            if (!empty($data['condition'])) {
                if (trim(strtolower($data['condition'])) == 'and') {
                    if (!array_diff($data['rightId'], session('rightsArray'))) {
                        return true;
                    }
                    return false;
                }
            }
            
            if (count(array_diff($data['rightId'], session('rightsArray'))) < count($data['rightId'])) {
                return true;
            }
            
            return false;
        }
        
        if (!in_array($data['rightId'], session('rightsArray'))) {
            return false;
        }
        
        return true;
    }
    
    public function getErrorUrl($errorMessage)
    {
        return env('APP_URL') . '/goterror/' . base64_encode($errorMessage);
    }
    
    public function getSuccessUrl($message) 
    {
        return env('APP_URL') . '/success/' . base64_encode($message);
    }
    
    public function uploadImage($imageCount, $imageFieldName = 'pageImage', $folderPath=NULL) 
    {

        $this->error                =     [];
        //echo '<br>Image count: ' . $imageCount;exit;
        //echo '<br>Fil array : <pre>' . print_r($_FILES, true) . '</pre>';exit;
        
        try {
        
            
            $fieldname  =  '';
            
            if ($imageFieldName   ==  'pageImage') {
                $fieldname   =   'Upload New Images';
            } elseif($imageFieldName   ==   'pageImageMobile'){
                $fieldname   =  'Upload Images (Mobile)';
            }
            elseif ($imageFieldName   ==  'pageImageRight') {
                $fieldname   =  'Upload Images for Redirecting ';
            }
            elseif ($imageFieldName   ==  'pageImageMobileRight') {
                $fieldname   =  'Upload Images Right Side (Mobile)';
            }
            elseif($imageFieldName   ==  'pageImageRight'){
                $fieldname   =  'Upload Images for Redirecting ';
            }else {
                $fieldname   =  $imageFieldName;
            }
        
            $this->uploadedImages   =     [];

          // echo '<br>Image array before updation : <pre>' . $_FILES . '</PRE>';
          // exit;
                     
          if(!is_array($_FILES[$imageFieldName]['tmp_name'])) {
          if ($imageCount == 1 ) {
                $imageArray = [];
              
                $imageArray['tmp_name']['0']    =  $_FILES[$imageFieldName]['tmp_name'];
               
                unset($_FILES[$imageFieldName]['tmp_name']);
               
                
                $imageArray['type']['0']    =   $_FILES[$imageFieldName]['type'];
                
                unset($_FILES[$imageFieldName]['type']);
                
                
                $imageArray['size']['0']    =   $_FILES[$imageFieldName]['size'];
                
                unset($_FILES[$imageFieldName]['size']);
                
                $imageArray['name']['0']  =  $_FILES[$imageFieldName]['name'];
                
                unset($_FILES[$imageFieldName]['name']);
               
                
                $_FILES[$imageFieldName]    =   $imageArray;
               
                //echo '<br>Image array before updation : <pre>' . $_FILES . '</PRE>';EXIT;
            }
            
          }

            for ($i=0;$i<$imageCount;$i++) {

                if (!empty($_FILES[$imageFieldName]['tmp_name'][$i])) {

                    $type       =   trim($_FILES[$imageFieldName]['type'][$i]);

                    $size       =   $_FILES[$imageFieldName]['size'][$i];

                    $imageName  =   trim($_FILES[$imageFieldName]['name'][$i]);

                    if (!(
                            stristr($type, 'image/jpeg') || stristr($type, 'image/png') || stristr($type, 'image/jpeg')
                           || stristr($type, 'image/gif') || stristr($type, 'application/pdf')
                    )) {
                        $this->error[] = 'File '. $imageName . ' is not an image';
                        continue;

                    } elseif ($size > 2000000) {
                        $this->error[]    =   'Image size for image . ' . $imageName .' is greater than 2 MB in feild <strong> '.$fieldname.'</strong>.';
                        continue;
                    }

                    $imageDetails   =   $this->imageRepository->checkIfExist($imageName);

                    $imageUrl       =   env('UGNIMAGEURLPATH') . $imageName;

                    if(!empty($imageDetails)) {
                    if (count($imageDetails)) {
                      $this->error[] = 'The image <strong>' . $imageName . '</strong> already exist, in feild <strong> '.$fieldname.'</strong>.'
                                . 'Please <a href="' . $imageUrl . '" target="_blank">'
                                . '<strong>click here</strong></a> to view this image & if its the same image you want to upload,'
                                . ' then please dont upload the image and simply put the '
                                . 'image name separated by a comma <strong>","</strong> inside the "Content Images" text box'
                                . ' else change the image name and try again';
                        continue;
                    }

                    }

                    if($type == 'application/pdf') {

                         $imageDestinationPath   =   env('UGNIMAGEPATH') . env('FILEPATHSEPARATOR') .'ugn_pdf/'. $imageName;
                    }elseif(!empty($folderPath)) {

                        $imageDestinationPath   =   env('UGNIMAGEPATH') . env('FILEPATHSEPARATOR') . $folderPath . env('FILEPATHSEPARATOR') . $imageName;

                        // echo '<br>$imageDestinationPath : ' . $imageDestinationPath; exit;
                    }else{

                    $imageDestinationPath   =   env('UGNIMAGEPATH') . env('FILEPATHSEPARATOR') . $imageName;
                    }
                   
                    //echo '<br>$imageDestinationPath : ' . $imageDestinationPath; exit;

                    if (!move_uploaded_file($_FILES[$imageFieldName]['tmp_name'][$i], $imageDestinationPath)) {
                        $this->error[] = 'Unable to move uploaded image : ' . $imageName;
                        continue;
                    }

                    $saveImageData  =   [
                        'image_name'        =>  $imageName,
                        'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                    ];

                    if (!$this->imageRepository->saveImage($saveImageData)) {
                        $this->error[]    =   $this->imageRepository->getError();
                    }

                    $this->uploadedImages[]  =   $imageName;
                } elseif(!empty($_FILES[$imageFieldName]['name'][$i])) {
                    $this->error[]  =   'Image : <strong>' . trim($_FILES[$imageFieldName]['name'][$i]) . '</strong> is not'
                                        . ' uploaded. Please check its size. It may be greater than 2 MB';
                }
            }

            if (count($this->error)) {
                return false;
            }

            return true;
        } catch (\Exception $ex) {
            $this->error[]    =   $ex->getMessage();
            return false;
        }
    }
    
        
    public function getCurlData($url, $postData=null) 
    {
        $curl = new Curl();
        
        $result = $curl->getCurlData($url, $postData);

        if ($result) {
            return $result;
        }

        $this->error = $curl->getError();

        return false;
    }
    
    public function getFrontErrorUrl($errorMessage)
    {
        return env('APP_URL') . '/ferror/' . base64_encode($errorMessage);
    }
    
    public function getFrontSuccessUrl($successMessage)
    {
        return env('APP_URL') . '/fsuccess/' . base64_encode($successMessage);
    }
    
    public function getFrontMessageUrl($message)
    {
        return env('APP_URL') . '/msg/' . base64_encode($message);
    }
    
    public function checkIfMobileDevice()
    {
        if ($this->deviceDetector->isMobile() || $this->deviceDetector->isTablet() 
                || stristr($_SERVER['HTTP_HOST'], env('MOBILEURL'))) {
            return true;
        }
        
        return false;
    }
    
    public function getProtocol()
    {
        if (stristr($_SERVER['SERVER_PROTOCOL'], 'https')) {
            return 'https';
        }
        return 'http';
    }

    public function checkValidUrl($url)
    {
        
         $vaildUrl   =   $this->generalHelper->checkIfValidUrl($url);
         if($vaildUrl) {
             return true;
         } else {
             $this->error = 'Please use http or https with url right side';
             return false;
         }
       
    }

   
}
