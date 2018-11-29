<?php

namespace App\Models\Jrole;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JroleRepository extends BaseRepository {

    protected $_dbUgnTblJAdminRoleRights;

    public function __construct() {
        $this->_dbUgnTblJAdminRoleRights = new DbUgnTblJAdminRoleRights();
    }

    public function getRoleRightsList($roleId=null)
    {
        try {
            $whereArray = ['status' => 'Enabled'];
            
            if (!empty($roleId)) {
                $whereArray['fk_admin_role_id'] = $roleId; 
            }
            
            $result =   $this->_dbUgnTblJAdminRoleRights::where($whereArray)
                        ->get(['pk_admin_role_rights', 'fk_admin_rights_id', 'fk_admin_role_id'])
                        ->toArray();
            
            if (count($result) && is_array($result)) {
                return $result;
            }
            
            $this->error = 'No admin rights found';
            
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('fetch admin rights list', $ex);
            return false;
        }
    }
}
