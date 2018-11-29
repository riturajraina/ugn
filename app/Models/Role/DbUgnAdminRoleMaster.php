<?php

namespace App\Models\Role;

use Illuminate\Database\Eloquent\Model;

class DbUgnAdminRoleMaster extends Model {

    protected $table = 'ugn_admin_role_master';
    protected $primaryKey = 'pk_admin_role_id';
    protected $fillable = ['admin_role', 'created_at', 'updated_at', 'fk_admin_user_id', 'status'];

    public function __construct() {
        
    }

}
