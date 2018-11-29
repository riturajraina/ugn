<?php

namespace App\Models\Rolerights;

use Illuminate\Database\Eloquent\Model;

class DbUgnAdminRightsMaster extends Model {

    protected $table = 'ugn_admin_rights_master';
    protected $primaryKey = 'pk_admin_rights_id';
    protected $fillable = [
        'admin_rights', 'created_at',
        'updated_at', 'fk_admin_user_id', 'status',
    ];

    public function __construct() {
        
    }

}
