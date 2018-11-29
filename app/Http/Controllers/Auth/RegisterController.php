<?php
namespace App\Http\Controllers\Auth;

use App\Exceptions;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Helpers\SelectOptionsManager;
use App\Helpers\EmailMobileValidator;
use App\Helpers\DateValidator;
//use Helpme\Controllers\HelpmePackageController;
//use App\Models\Register\RegisterRepository;
//use App\Models\User\UserRepository;
use App\Models\Role\RoleRepository;
use App\Helpers\CaptchaManager;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';
    protected $error;
    protected $roleRepository;
    protected $selectOptionsManager;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
        
        parent::__construct();

        $this->error = '';
        
        $this->roleRepository       = new RoleRepository();
        
        $this->selectOptionsManager = new SelectOptionsManager();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data) {

        $validatorArray = array
        (
            'fname'         => 'required|max:50',
            'lname'         => 'required|max:50',
            'email'         => 'required|email|max:150|unique:ugn_admin_user',
            //'password'      => 'required|max:30',
            //'confpassword'  => 'required|max:30',
            'mobile_number' => 'required|max:10|unique:ugn_admin_user',
            'role'          => 'required',
            'captcha'       => 'required|max:5',
        );

        return Validator::make($data, $validatorArray);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data) 
    {
        try {
            
            $dateTime                   =   date('Y-m-d H:i:s');
            
            User::create([
                'fname'                 => $data['fname'],
                'lname'                 => $data['lname'],
                'email'                 => $data['email'],
                'password'              => bcrypt($data['password']),
                'mobile_number'         => $data['mobile_number'],
                'created_at'            => $dateTime,
                'updated_at'            => $dateTime,
                'fk_admin_role_id'      => $data['role'],
            ]);
            
            return true;
        } catch (Exception $ex) {
            $this->error = $ex->getMessage();
            return false;
        }
    }

    /*
     *
     *
     *
     *
     *
     */

    public function showRegistrationForm() {
        $roleList = [];
        
        $roleArray = $this->roleRepository->getRoleList();
        
        if (!$roleArray) {
            return redirect('/register')
                            ->withInput()
                            ->withErrors([$this->roleRepository->getError()]);
        }
        
        foreach ($roleArray as $row) {
            $roleList[$row['pk_admin_role_id']] = $row['admin_role'];
        }
        
        return view('auth.register', ['roleList' => $roleList, 'selectOptionsManager' => $this->selectOptionsManager]);
    }

    

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) {
        $data = $request->all();

        $errors = array();

        $emailMobileValidator = new EmailMobileValidator();

        if (!$emailMobileValidator->validateMobile($data['mobile_number'])) {
            $errors[] = 'Please enter a valid mobile number starting with 9,8 or 7';
        }

        $captchaManager = new CaptchaManager;

        $captchaVerified = $captchaManager->VerifyCaptcha($request->captcha);

        if (!$captchaVerified) {
            $errors[] = 'Characters entered don\'t match with the image displayed';
        }

        if (count($errors)) {
            return redirect('/register')
                            ->withInput()
                            ->withErrors($errors);
        }

        $validator = $this->validator($data);

        if ($validator->fails()) {
            return redirect('/register')
                            ->withInput()
                            ->withErrors($validator);
        }
        
        $otp = $this->generateRandom->generateAlphaNumeric(4);
        
        $data['password'] = $otp;
        
        if (!$this->create($data)) {
            return redirect('/register')->with('message', $this->error);
        }

        $message = str_ireplace('#VOTP', $otp, env('PASSWORD_MESSAGE'));
        
        $result = $this->getCurlData(env('APP_URL') . '/api/sendsms/' . $request->mobile_number . '/' 
                . urlencode($message));

        if (!$result) {
            return redirect('/goterror/' . base64_encode('Unable to access OTP api. Please contact administrator'));
        }

        $result = json_decode($result);

        if (array_key_exists('error', $result)) {
            return redirect('/goterror/' . base64_encode('Unable to send password. Please contact administrator'));
        }
        
        return redirect('/success/' . base64_encode('Your password has been sent to your mobile number. '
                . 'Please use the same to login. Thanks.'));
    }
}
