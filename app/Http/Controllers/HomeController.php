<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->middleware('auth');
    }

    public function home() {
        return view('dashboard');
    }
}


