<?php

namespace App\Models\Log;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginLogRepository extends BaseRepository {

    protected $_dbUgnAdminLoginLog;

    public function __construct() {
        $this->_dbUgnAdminLoginLog = new DbUgnAdminLoginLog();
    }

    public function logUserLoginTime() {
        try {
            $this->_dbUgnAdminLoginLog->fk_admin_user_id = Auth::user()->pk_admin_user_id;
            $this->_dbUgnAdminLoginLog->login_time = date('Y-m-d H:i:s');
            $this->_dbUgnAdminLoginLog->ip_address = !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
            $this->_dbUgnAdminLoginLog->logout_time = null;
            $app = app();
            $this->_dbUgnAdminLoginLog->session_id = $app['encrypter']
                    ->decrypt($_COOKIE[$app['config']['session.cookie']]);

            $this->_dbUgnAdminLoginLog->save();
            session(['userLogId' => $this->_dbUgnAdminLoginLog->pk_admin_log_id]);
            return $this->_dbUgnAdminLoginLog->pk_admin_log_id;
            
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
            $this->_dbUgnAdminLoginLog::find(session('userLogId'))->update(['logout_time' => date('Y-m-d H:i:s')]);
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
