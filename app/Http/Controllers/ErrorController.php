<?php

namespace App\Http\Controllers;

use App\Exceptions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ErrorController extends Controller {

    public function __construct() {
        //$this->middleware('guest');
        //$this->middleware('auth');
    }

    
    public function showError($error)
    {
        return view('error', ['error' => $error]);
    }
}