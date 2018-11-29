<?php

namespace App\Http\Controllers;

use App\Exceptions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontMessageController extends Controller {

    public function __construct() {
        parent::__construct();
        //$this->middleware('guest');
        //$this->middleware('auth');
    }

    
    public function showMessage($message)
    {
        $view = 'frontmessage';
        
        if ($this->checkIfMobileDevice()) {
            $view = 'frontmessagemobile';
        }
        
        return view($view, ['message' => $message]);
    }
}

