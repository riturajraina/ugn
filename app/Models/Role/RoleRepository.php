<?php

namespace App\Models\Role;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleRepository extends BaseRepository {

    protected $_dbUgnAdminRoleMaster;

    public function __construct() {
        $this->_dbUgnAdminRoleMaster = new DbUgnAdminRoleMaster();
    }

    public function getRoleList($data=null)
    {
        try {
            $result =   $this->_dbUgnAdminRoleMaster;
            
            if (!empty($data['searchArray']) && count($data)) {
                $result = $result->where($data['searchArray']);
            }
            
            if (isset($data['api_call'])) {
                //$result = $result->get(['pk_admin_role_id', 'admin_role']);
                $result = $result->get();
                $result = $result->toArray();
            } else {
                $result = $result->paginate(env('RECORDS_PER_PAGE'));
                $result->all();
            }
            //echo '<br>result : <pre>' . print_r($result, true) . '</pre>';exit;
            if (count($result)) {
                return $result;
            }
            
            $this->error = 'No admin roles found';
            
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('fetch role list', $ex);
            return false;
        }
    }
    
    public function getAdminTableName()
    {
        return $this->_dbUgnAdminRoleMaster->getTable();
    }
    
    public function updateRole($data)
    {
        try {
            if (!empty($data['whereArray']) && !empty($data['updateArray'])) {
                $result = $this->_dbUgnAdminRoleMaster::where($data['whereArray'])->update($data['updateArray']);
                
                if (!$result) {
                    $this->setError('Unable to update admin role due to a database error', $ex);
                    return false;
                }
            } else {
                $this->setError('A required parameter is missing to update admin role', $ex);
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('update admin role', $ex);
            return false;
        }
    }
    
    public function createRole($data)
    {
        try {
            $result = $this->getRoleList(['searchArray' => ['admin_role' => $data['admin_role'], 'status' => 'Enabled'], 
                      'api_call' => 1]);
            
            if (count($result) && is_array($result)) {
                $this->error = 'This role name already exists.';
                return false;
            }
            
            $dateTime       =   date('Y-m-d H:i:s');
            
            $this->_dbUgnAdminRoleMaster->admin_role        = $data['admin_role'];
            $this->_dbUgnAdminRoleMaster->created_at        = $dateTime;
            $this->_dbUgnAdminRoleMaster->updated_at        = $dateTime;
            $this->_dbUgnAdminRoleMaster->fk_admin_user_id  = $data['fk_admin_user_id'];
            $this->_dbUgnAdminRoleMaster->status            = $data['status'];
            
            if (!$this->_dbUgnAdminRoleMaster->save()) {
                $this->error = 'Unable to create admin role due to a database error';
                return false;
            }
            
            return $this->_dbUgnAdminRoleMaster->pk_admin_role_id;
            
        } catch (\Exception $ex) {
            $this->setError('Create Admin Role', $ex);
            return false;
        }
    }
}
