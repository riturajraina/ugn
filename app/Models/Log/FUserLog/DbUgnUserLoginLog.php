<?php

namespace App\Models\Log\FUserLog;

use Illuminate\Database\Eloquent\Model;

class DbUgnUserLoginLog extends Model {

    protected $table = 'ugn_user_login_log';
    protected $primaryKey = 'pk_user_log_id';
    public $timestamps = false;
    protected $fillable = ['fk_user_id', 'browser', 'device', 'session_id', 'login_time', 'logout_time',
		'ip_address'];

    public function __construct() {
        
    }

}
