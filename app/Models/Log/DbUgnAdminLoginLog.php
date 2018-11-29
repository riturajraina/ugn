<?php

namespace App\Models\Log;

use Illuminate\Database\Eloquent\Model;

class DbUgnAdminLoginLog extends Model {

    protected $table = 'ugn_admin_login_log';
    protected $primaryKey = 'pk_admin_log_id';
    public $timestamps = false;
    protected $fillable = ['fk_admin_user_id', 'session_id', 'login_time', 'logout_time', 'ip_address'];

    public function __construct() {
        
    }

}
