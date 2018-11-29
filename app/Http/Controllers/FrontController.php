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

use App\Models\Log\FUserLog\FrontUserLogRepository;

use App\Models\Search\SearchLogRepository;
//
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    
    protected $frontUserLogRepository;
    
    protected $searchLogRepository;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->frontUserLogRepository   =   new FrontUserLogRepository();
        $this->searchLogRepository      =   new SearchLogRepository();
    }
    
    
    public function showUgnWelcome()
    {
        if (!$this->checkIfLoggedIn()) {
            return redirect('/flogin');
        }
                
        return view('uwelcome');
    }
    
    public function logout(Request $request)
    {
        if (!$this->checkIfLoggedIn()) {
            return redirect('/flogin');
        }
        
        if (!$this->frontUserLogRepository->logUserLogoutTime()) {
            return redirect($this->getErrorUrl('Unable to store log out time.'));
        }
        
        $request->session()->forget('userDetails');
        
        
        $loggedOutMessage   =   'You have been successfully logged out. <a href="' . env('APP_URL') . '/flogin">'
                                . '<strong>Click here</strong></a> to login again.';
        
        return redirect($this->getFrontMessageUrl($loggedOutMessage));
        
        //return redirect('/flogin')->withErrors(['You have been successfully logged out.']);
    }
    
    public function search(Request $request)
    {
        
    }
    
}


