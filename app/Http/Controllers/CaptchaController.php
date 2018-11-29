<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\CaptchaManager;



class CaptchaController extends Controller {
    

	protected $captchaManager;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('guest');
		$this->captchaManager		=	new CaptchaManager();
    }

	public function index()
	{
		return view('captcha', [
			'captchaManager' => $this->captchaManager
		]);
	}
}

?>