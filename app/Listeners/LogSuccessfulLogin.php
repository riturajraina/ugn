<?php

namespace App\Listeners;

//use App\Events\Login;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Log\LoginLogRepository;

class LogSuccessfulLogin {

    protected $_loginLogRepository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct() {
        // 
        $this->_loginLogRepository = new LoginLogRepository();
    }

    /**
     * Handle the event.
     *
     * @param  ActionDone  $event
     * @return void
     */
    public function handle(Login $event) {
        /* $event	=	(array) $event;
          //$user	=	(array) $event['user'];
          /*echo '<br>User Id : ' . Auth::user()->pk_user_id;
          echo '<br>User			: <pre>' . print_r ($user, true)				. '</pre>';
          echo '<br>*attributes	: <pre>' . print_r ($user['*attributes'], true)	. '</pre>';
          echo '<br>*original		: <pre>' . print_r ($user['*original'], true)	. '</pre>';
          exit;
          //$userId	=	$user[];
          //file_put_contents('d:\\laralogin.txt', serialize($user)); */

        $logId = $this->_loginLogRepository->logUserLoginTime();

        //echo '<br>session : <pre>' . print_r($_SESSION, true) . '</pre>';exit;
    }

}
