<?php

namespace App\Listeners;

//use App\Events\Login;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Log\LoginLogRepository;

class LogSuccessfulLogout {

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
    public function handle() {

        $this->_loginLogRepository->logUserLogoutTime();
    }

}
