<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User\UserRepository;
use App\Models\Otp\ForgotPasswordOtpRepository;
use App\Helpers\GenerateRandom;
use App\Helpers\EmailMobileValidator;
use App\Helpers\CaptchaManager;

class ForgotPasswordController extends Controller
{
    protected $userRepository;
    
    protected $generateRandom;
    
    protected $emailMobileValidator;
    
    protected $forgotPasswordOtpRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->generateRandom = new GenerateRandom();
        $this->emailMobileValidator = new EmailMobileValidator();
        $this->forgotPasswordOtpRepository = new ForgotPasswordOtpRepository();
    }
    
    public function checkPreviousOtpStatus($userId) 
    {
        $previousOtpRecord = $this->forgotPasswordOtpRepository->getPreviousOtpRecord(['fk_admin_user_id' => $userId]);
        
        $secsToCheck = env('PREVIOUS_OTP_STATUS_SECS');
        
        $prevDateValue = $this->dateValidator->getDateValue($previousOtpRecord['created_at']);
        
        $curDateValue = $this->dateValidator->getDateValue(date('Y-m-d H:i:s'));
        
        if (($curDateValue - $prevDateValue) <= $secsToCheck) {
            $this->error = 'An OTP has already been sent within 5 minutes. Please wait for some time';
            return false;
        }
        
        return true;
    }
    
    public function sendForgotPasswordOtp(Request $request)
    {
        $captchaManager = new CaptchaManager;

        $captchaVerified = $captchaManager->VerifyCaptcha($request->captcha);

        if (!$captchaVerified) {
            return redirect('/forgotpassword')
                            ->withInput()
                            ->withErrors(['Characters entered don\'t match with the image displayed']);
        }

        $data = $request->all();
        
        if (empty($data['mobile_number'])) {
            $this->error = 'Please enter your mobile number';
            return redirect('/forgotpassword')->withInput()->withErrors([$this->error]);
        }
        
        if (!$this->emailMobileValidator->validateMobile($data['mobile_number'])) {
            $this->error = 'Please enter a valid mobile number';
            return redirect('/forgotpassword')->withInput()->withErrors([$this->error]);
        }

        $userId = $this->userRepository->fetchUserByMobileNumber($data['mobile_number']);
        
        if (!$userId) {
            return redirect('/forgotpassword')->withInput()->withErrors([$this->userRepository->getError()]);
        }
        
        if (!$this->checkPreviousOtpStatus($userId)) {
            return redirect('/verifyotp/' . base64_encode($userId) . '/' . $data['mobile_number'])
                    ->withInput()
                    ->withErrors([$this->error]);
        }
        
        $otp = $this->generateRandom->generateAlphaNumeric(4);
        
        if (!$this->forgotPasswordOtpRepository->saveOtp(['otp_text' => $otp, 'fk_admin_user_id' => $userId])) {
            return redirect('/forgotpassword')->withInput()
                    ->withErrors([$this->forgotPasswordOtpRepository->getError()]);
        }
        
        $message = str_ireplace('#VOTP', $otp, env('FORGOT_PASSWORD_OTP_MESSAGE'));
        
        $result = $this->getCurlData(env('APP_URL') . '/api/sendsms/' . $data['mobile_number'] . '/' 
                . urlencode($message));

        if (!$result) {
            return redirect('/forgotpassword')->withInput()
                    ->withErrors(['Unable to access OTP api. Please contact administrator']);
        }

        $result = json_decode($result);

        if (array_key_exists('error', $result)) {
            return redirect('/forgotpassword')->withInput()
                    ->withErrors(['Unable to send OTP. Please contact administrator']);
        }
        
        return redirect('/verifyotp/' . base64_encode($userId) . '/' . $data['mobile_number']);
    }
    
    public function showForgotPasswordForm($mobileNumber = null)
    {
        $mobileNumber = !empty(Input::old('mobile_number')) ? Input::old('mobile_number') : $mobileNumber;
        
        return view('forgotpassword', ['mobileNumber' => $mobileNumber]);
    }
    
    public function verifyOtp(Request $request)
    {
        $data = $request->all();
        
        $userId = base64_decode($data['icaoiu']);
        
        $previousOtpRecord = $this->forgotPasswordOtpRepository->getPreviousOtpRecord(['fk_admin_user_id' => $userId]);
        
        $prevDateValue = $this->dateValidator->getDateValue($previousOtpRecord['created_at']);
        
        $curDateValue = $this->dateValidator->getDateValue(date('Y-m-d H:i:s'));
        
        $secsToCheck = env('OTP_EXPIRY_SECS');
        
        if (($curDateValue - $prevDateValue) > $secsToCheck) {
            return redirect('/verifyotp/' . $data['icaoiu'] . '/' . $data['mobile_number'])
                            ->withInput()
                            ->withErrors(['OTP has expired, Please try resending OTP.']);
        }
        
        $otp = $data['otp'];
        
        $storedOtp = $previousOtpRecord['otp_text'];
        
        if ($otp <> $storedOtp) {
            return redirect('/verifyotp/' . $data['icaoiu'] . '/' . $data['mobile_number'])
                            ->withInput()
                            ->withErrors(['Invalid OTP entered.']);
        }
        
        $prevRecordId = $previousOtpRecord['pk_otp_id'];
        
        if (!$this->forgotPasswordOtpRepository->verifyOtpRecord($prevRecordId)) {
            return redirect('/verifyotp/' . $data['icaoiu'] . '/' . $data['mobile_number'])
                            ->withInput()
                            ->withErrors([$this->forgotPasswordOtpRepository->getError()]);
        }
        
        return redirect('/resetpassword/' . $data['icaoiu']);
    }
    
    public function showVerifyotpForm($userId, $mobileNumber)
    {
        return view('verifyotp', ['userId' => $userId, 'mobileNumber' => $mobileNumber]);
    }
    
    public function resetPassword(Request $request)
    {
        $data = $request->all();
        
        $userId = base64_decode($data['icaoiu']);

        $previousOtpRecord = $this->forgotPasswordOtpRepository->getPreviousOtpRecord([
            'fk_admin_user_id' => $userId, 'is_verified' => 'Yes']);
        
        $secsToCheck = env('RESET_PASSWORD_WAIT_SECS');
        
        $prevDateValue = $this->dateValidator->getDateValue($previousOtpRecord['created_at']);
        
        $curDateValue = $this->dateValidator->getDateValue(date('Y-m-d H:i:s'));
        
        if (($curDateValue - $prevDateValue) > $secsToCheck) {
            return redirect('/forgotpassword')
                            ->withErrors(['Your session has expired. Please try again']);
        }
        
        $errors = array();
        
        if ($data['new_password'] <> $data['confirm_new_password']) {
            $errors[] = 'Password mismatch. Please re-enter';
            
        }
        
        if (strlen($data['new_password']) < 6) {
            $errors[] = 'Minimum length of the password shall be 6 characters';
        }
        
        if (count($errors)) {
            return redirect('/resetpassword/' . $data['icaoiu'])
                            ->withInput()
                            ->withErrors($errors);
        }
        
        if (!$this->userRepository->updatePassword(['pk_admin_user_id' => $userId, 
            'password' => bcrypt($data['new_password'])])) {
            return redirect('/resetpassword/' . $data['icaoiu'])
                            ->withInput()
                            ->withErrors([$this->userRepository->getError()]);
        }
                
        return redirect('/success/' . base64_encode('Password changed successfully'));
    }
    
    public function showResetPasswordForm($userId) 
    {
        return view('resetpassword', ['userId' => $userId]);
    }
}
