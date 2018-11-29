<?php

namespace App\Http\Controllers;

use App\Exceptions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Helpers\SelectOptionsManager;
use App\Helpers\EmailMobileValidator;
use App\Helpers\DateValidator;
//use Helpme\Controllers\HelpmePackageController;

//use App\Helpers\CaptchaManager;
use Illuminate\Support\Facades\Auth;
//use App\Models\Options\OptionsRepository;
use Illuminate\Support\Facades\Input;
use App\Models\Sms\SmsRepository;

class SmsController extends Controller {

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    //protected $helpmePackageController;
    protected $error;
    protected $smsRepository;
    protected $smsLength;
    protected $apiInfo;
    protected $smsBreak;
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('guest');
        //$this->middleware('auth');
        parent::__construct();
        //$this->helpmePackageController = new HelpmePackageController();
        $this->error = [];
        $this->smsRepository = new SmsRepository();
        //$this->smsLength = 140;
        $this->smsLength = 5000;
        $this->apiInfo = 'dummy';
        $this->smsBreak = 130;
    }
    
    public function executeSendSms($mobileNumber, $smsText, $smsType='TXT')
    {
        //$smsText = urldecode($smsText);

        $this->error = [];
        
        if (!$this->emailMobileValidator->validateMobile($mobileNumber)) {
            $this->error[] = 'Invalid mobile number';
        }
        
        if (strlen($smsText) > $this->smsLength) {
            $this->error[] = 'Sms text length is greater than ' . $this->smsLength;
        }
        
        if (count($this->error)) {
            return false;
        }
        
        
        $status = $this->sendSmsFromApi(['mobileNumber' => $mobileNumber, 'smsText' => $smsText, 'type' => $smsType]);
        
        /*$status = true;
        
        $this->apiInfo = 'testing';*/
        
        if (!$status) {
            $this->error[] = 'Unable to send sms through api';
        }
        
        //echo '<br>smstext form sms controller : ' . $smsText;
        
        if (!$this->smsRepository->saveSms([
                'mobile_number' => $mobileNumber,
                'sms_text' => $smsText, 
                'apiInfo' => $this->apiInfo, 
                'status' => ($status ? 'Success' : 'Failed'), 
         ])) {
            $this->error[] = $this->smsRepository->getError();
        }
        
        if (count($this->error)) {
            return false;
        }
        
        return true;
    }
    
    public function SendSmsPost(Request $request)
    {
        $smsType = !empty($request->smsType) ? $request->smsType : 'TXT';
        
        if (!$this->executeSendSms($request->mobileNumber, $request->smsText, $smsType)) {
            echo json_encode(['error' => $this->error]);
            //return false;
        } else {
            echo json_encode(['success' => $this->apiInfo]);
        }
    }
    
    public function SendSms($mobileNumber, $smsText, $smsType='TXT')
    {
        if (!$this->executeSendSms($mobileNumber, $smsText, $smsType='TXT')) {
            echo json_encode(['error' => $this->error]);
            //return false;
        } else {
            echo json_encode(['success' => $this->apiInfo]);
        }
        //return true;
    }
}

