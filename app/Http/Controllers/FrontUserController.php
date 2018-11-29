<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User\UserRepository;
use App\Helpers\GenerateRandom;
use App\Helpers\EmailMobileValidator;
use App\Models\Role\RoleRepository;
use App\Helpers\SelectOptionsManager;
use App\Helpers\CaptchaManager;

use App\Models\Fuser\FrontEndUserRepository;

use App\Models\Log\FUserLog\FrontUserLogRepository;
//
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class FrontUserController extends Controller
{
    protected $frontUserRepository;
    
    protected $generateRandom;
    
    protected $emailMobileValidator;
    
    protected $captchaManager;
   // protected $changeLogRepository;
    
    protected $frontUserLogRepository;
    
    


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
        
        
        parent::__construct();
        $this->frontUserRepository      =   new FrontEndUserRepository();
        $this->generateRandom           =   new GenerateRandom();
        $this->emailMobileValidator     =   new EmailMobileValidator();
        $this->captchaManager           =   new CaptchaManager();
        $this->frontUserLogRepository   =   new FrontUserLogRepository();
       
        
        
    }
    
    
    
    public function register(Request $request)
    {
        if ($this->checkIfLoggedIn()) {
            return redirect('/uwelcome');
        }
        
        $data = $request->all();
        
        $validatorArray =   [
            'fname'         =>  'required|max:15',
            'lname'         =>  'required|max:15',
            'mobile_number' =>  'required|max:10',
            'email'         =>  'required|max:50',
            'captcha'       =>  'required|max:7',
        ];
        
        $validator  = Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('fregister')->withInput()->withErrors($validator);
        }
        
        $errors =   [];
        
        $emailMobileValidator = new EmailMobileValidator();

        if (!$emailMobileValidator->validateMobile($data['mobile_number'])) {
            
            $mobileValidationError  =   $emailMobileValidator->getError();
            
            if (!is_array($mobileValidationError)) {
                foreach ($mobileValidationError as $mobileError) {
                    $errors[]   =   $mobileError;
                }
            } else {
                $errors[]   =   $mobileValidationError;
            }
        }
        
        if (!$emailMobileValidator->validateEmail($data['email'])) {
            $errors[]   =   'Please enter a valid email address';
        }

        $captchaManager = new CaptchaManager;

        $captchaVerified = $captchaManager->VerifyCaptcha($data['captcha']);

        if (!$captchaVerified) {
            $errors[] = 'Characters entered don\'t match with the image displayed';
        }

        if (count($errors)) {
            return redirect('/fregister')
                            ->withInput()
                            ->withErrors($errors);
        }
        
        $otp = $this->generateRandom->generateAlphaNumeric(4);
        
        $saveData   =   [
            'fname'         =>  $data['fname'],
            'lname'         =>  $data['lname'],
            'password'      =>  bcrypt($otp),
            'mobile_number' =>  $data['mobile_number'],
            'email'         =>  $data['email'],
            
        ];
        
        if (!$this->frontUserRepository->saveUser($saveData)) {
            return redirect('/fregister')->withInput()->withErrors([$this->frontUserRepository->getError()]);
        }

        $message = str_ireplace('#VOTP', $otp, env('PASSWORD_MESSAGE'));
        
        $result = $this->getCurlData(env('APP_URL') . '/api/sendsms/' . $data['mobile_number'] . '/' 
                . urlencode($message));

        if (!$result) {
            return redirect('/fregister')->withInput()->withErrors(['Unable to access OTP api. Please contact administrator']);
        }

        $result = json_decode($result);

        if (array_key_exists('error', $result)) {
            return redirect('/fregister')->withInput()->withErrors(['Unable to send password. Please contact administrator']);
        }
        
        return redirect($this->getFrontSuccessUrl('Your password has been sent to your mobile number. '
                . 'Please use the same to login. Thanks.'));
        
    }
    
    public function showFrontUserRegisterForm()
    {
        if ($this->checkIfLoggedIn()) {
            return redirect('/uwelcome');
        }
        
        return view('fregister');
    }
    
    public function login(Request $request)
    {
        if ($this->checkIfLoggedIn()) {
            return redirect('/uwelcome');
        }
        
        $data   =   $request->all();
        
        //echo '<br>Data : <pre>' . print_r($data, true) . '</pre>';exit;
        
        $validatorArray =   [
            'mobile_number' =>  'required|max:50',
            'password'      =>  'required|max:50',
        ];
        
        $validator  =   Validator::make($data, $validatorArray);
        
        if ($validator->fails()) {
            return redirect('/flogin')->withInput()->withErrors($validator);
        }
        
        $emailMobileValidator   =   new EmailMobileValidator();
        
        $errors =   [];
        
        if (is_numeric($data['mobile_number'])) {
            
            if (!$emailMobileValidator->validateMobile($data['mobile_number'])) {
                
                $mobileError        =   $emailMobileValidator->getError();
                
                if (is_array($mobileError)) {
                    foreach ($mobileError as $mError) {
                        $errors[]   =   $mError;
                    }
                } else {
                    $errors[]       =   $mobileError;
                }
            }
            
        } else {
            if (!$emailMobileValidator->validateEmail($data['mobile_number'])) {
                $errors[]   =   $emailMobileValidator->getError();
            }
            
            $data['email']  =   $data['mobile_number'];
            
            unset($data['mobile_number']);
        }
        
        $userDetails    =   $this->frontUserRepository->checkUser($data);
        
        //echo '<br>userDetails : <pre>' . print_r($userDetails, true) . '</pre>';exit;
        
        if (!$userDetails) {
            return redirect('/flogin')->withInput()->withErrors([$this->frontUserRepository->getError()]);
        }
        
        
        
        if (!$this->frontUserLogRepository->logUserLoginTime($userDetails)) {
            return redirect('/flogin')->withInput()->withErrors([$this->frontUserLogRepository->getError()]);
        }
        
        $request->session()->push('userDetails', $userDetails);
        
        return redirect('/uwelcome');
    }
    
    
    
    public function showLoginForm()
    {
        if ($this->checkIfLoggedIn()) {
            return redirect('/uwelcome');
        }
        
        return view('flogin');
    }
    
   
    
}


