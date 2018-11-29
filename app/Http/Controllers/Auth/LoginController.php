<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Rolerights\RoleRightsRepository;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';
    protected $roleRightsRepository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest', ['except' => 'logout']);
        $this->roleRightsRepository = new RoleRightsRepository();
    }

    public function username() {
        return 'mobile_number';
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(\Illuminate\Http\Request $request) {
        //return $request->only($this->username(), 'password');
        return ['mobile_number' => $request->{$this->username()}, 'password' => $request->password,
            'status' => 'Enabled'];
    }

    protected function authenticated(Request $request, $user) {
        /* if ( $user->isAdmin() ) {// do your margic here
          return redirect()->route('dashboard');
          } */
        
        $userAttributes = $user->getAttributes();
        
        $roleId             =   $userAttributes['fk_admin_role_id'];
        
        $data               =   [
                                    'searchArray'   =>  ['fk_admin_role_id' => $roleId],
                                    'api_call'      =>  1,
                                ];
        
        $roleRightsList     = $this->roleRightsRepository->getAdminRoleRightsList($data);
        //echo '<br>$roleRightsList <pre>' . print_r($roleRightsList, true) . '</pre>';exit;
        $roleRightsArray    = [];
        
        if (count($roleRightsList)) {
            foreach ($roleRightsList as $row) {
                $roleRightsArray[$row['pk_admin_role_rights']] = $row['fk_admin_rights_id'];
            }
            session(['rightsArray' => $roleRightsArray]);
        }

        return redirect('/dashboard');
    }

}
