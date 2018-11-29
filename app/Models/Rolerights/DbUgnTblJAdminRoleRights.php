<?php

namespace App\Models\Rolerights;

use Illuminate\Database\Eloquent\Model;

class DbUgnTblJAdminRoleRights extends Model {

    protected $table		=	'ugn_tbl_j_admin_role_rights';

    protected $primaryKey	=	'pk_admin_role_rights';

    protected $fillable		=	[
									'fk_admin_role_id', 'fk_admin_rights_id', 'created_at', 
									'updated_at', 'fk_admin_user_id', 'status',
								];

    public function __construct() {
        
    }

}
