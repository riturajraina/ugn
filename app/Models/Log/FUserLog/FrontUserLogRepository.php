<?php

namespace App\Models\Log\FUserLog;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontUserLogRepository extends BaseRepository {

    protected $_dbUgnUserLoginLog;

    public function __construct() {
        $this->_dbUgnUserLoginLog = new DbUgnUserLoginLog();
    }

    public function logUserLoginTime($userDetails) {
        try {
            $this->_dbUgnUserLoginLog->fk_user_id               = $userDetails['pk_user_id'];
            $this->_dbUgnUserLoginLog->login_time               = date('Y-m-d H:i:s');
            $this->_dbUgnUserLoginLog->ip_address               = !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
            $this->_dbUgnUserLoginLog->logout_time              = null;
            $this->_dbUgnUserLoginLog->user_agent_string        =   $_SERVER['HTTP_USER_AGENT'];
            //$this->_dbUgnUserLoginLog->get_browser_array_json =   json_encode(get_browser($_SERVER['HTTP_USER_AGENT'], true));
            /**
             * Since browscap is not working in google server, hence disabling the 
             * same for now...Rituraj 28 Sep 2018
             */
            $this->_dbUgnUserLoginLog->get_browser_array_json   =   $_SERVER['HTTP_USER_AGENT'];
            
            $app = app();
            
            $this->_dbUgnUserLoginLog->session_id = $app['encrypter']
                    ->decrypt($_COOKIE[$app['config']['session.cookie']]);

            $this->_dbUgnUserLoginLog->save();
            session(['userLogId' => $this->_dbUgnUserLoginLog->pk_user_log_id]);
            return $this->_dbUgnUserLoginLog->pk_user_log_id;
            
        } catch (\Exception $ex) {
            if (env('APP_DEBUG')) {
                $this->error = 'Unable to log user login time due to this database error : ' 
                        . $ex->getMessage() 
                        . '. Please contact system administrator';
            } else {
                $this->error = 'Unable to log user login time due to a database error. '
                        . 'Please contact system administrator';
            }
            return false;
        }
    }

    public function logUserLogoutTime() {
        try {
            $this->_dbUgnUserLoginLog::find(session('userLogId'))->update(['logout_time' => date('Y-m-d H:i:s')]);
            return true;
        } catch (\Exception $ex) {
            if (env('APP_DEBUG')) {
                $this->error = 'Unable to log user logout time due to this database error : ' 
                        . $ex->getMessage() 
                        . '. Please contact system administrator';
            } else {
                $this->error = 'Unable to log user logout time due to a database error. '
                        . 'Please contact system administrator';
            }
            return false;
        }
    }
}
