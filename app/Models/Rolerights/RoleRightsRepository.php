<?php namespace App\Models\Rolerights;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class RoleRightsRepository extends BaseRepository {

    protected $_dbUgnTblJAdminRoleRights;
    protected $_dbUgnAdminRightsMaster;

    public function __construct() {
        $this->_dbUgnTblJAdminRoleRights = new DbUgnTblJAdminRoleRights();
        $this->_dbUgnAdminRightsMaster   = new DbUgnAdminRightsMaster();
    }
    
    public function updateRights($data)
    {
        try {
            if (empty($data['update'])) {
                $this->error = 'No data found to update';
                return false;
            }
            
            if (!empty($data['whereIn'])) {
                list($column, $values) = $data['whereIn'];
                $result = $this->_dbUgnTblJAdminRoleRights::whereIn($column, $values);
            }
            
            if (!empty($data['where'])) {
                $result = $result->where($data['where']);
            }
            
            $result = $result->update($data['update']);
            
            if (!$result) {
                $this->error = 'Unable to update admin role rights due to a database error';
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('update rights', $ex);
            return false;
        }
    }
    
    public function getRightsTableName()
    {
        return $this->_dbUgnAdminRightsMaster->getTable();
    }
    
    public function getUgnTblJTableName()
    {
        return $this->_dbUgnTblJAdminRoleRights->getTable();
    }

    public function getAdminRoleRightsList($data)
    {
        try {
            //$roleId =   $data['roleId'];
            
            $result =   $this->_dbUgnTblJAdminRoleRights;
            
            if (!empty($data['searchArray'])) {
                $result =   $this->_dbUgnTblJAdminRoleRights::where($data['searchArray']);
            }
            
            /*$result =   $this->_dbUgnTblJAdminRoleRights::where(['status' => 'Enabled', 'fk_admin_role_id' => $roleId])
                        ->get(['pk_admin_role_rights', 'fk_admin_rights_id'])
                        ->toArray();*/
            
            if (!empty($data['api_call'])) {
                $result = $result->get()->toArray();
            } else {
                $result = $result->paginate(env('RECORDS_PER_PAGE'));
                $result->all();
            }
            
            if (count($result)) {
                return $result;
            }
            
            $this->error = 'No rights list found for this admin role';
            
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('fetch admin role rights list', $ex);
            return false;
        }
    }
    
    public function getRightsList($data)
    {
        try {
            $result = $this->_dbUgnAdminRightsMaster;
            
            if (!empty($data['searchArray'])) {
                $result = $result->where($data['searchArray']);
            }
            
            if (!empty($data['api_call'])) {
                $result = $result->get()->toArray();
            } else {
                $result = $result->paginate(env('RECORDS_PER_PAGE'));
                $result->all();
            }
            
            if (count($result)) {
                return $result;
            }
            
            $this->error = 'No rights found';
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch rights list', $ex);
            return false;
        }
    }
    
    public function insertRights($data) {
        try {
            
            $dateTime       = date('Y-m-d H:i:s');
            
            $insertArray    = [];
            
            foreach ($data['rights'] as $right) {
                $insertArray[] = [
                    'fk_admin_role_id'      => $data['roleId'],
                    'fk_admin_rights_id'    => $right,
                    'created_at'            => $dateTime,
                    'updated_at'            => $dateTime,
                    'fk_admin_user_id'      => $data['admin_user_id'],
                    'status'                => 'Enabled',
                ];
            }
            
            if (count($insertArray)) {
                if (!$this->_dbUgnTblJAdminRoleRights->insert($insertArray)) {
                    $this->error = 'Unable to insert new admin rights due to a database error';
                    return false;
                }
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('insert rights', $ex);
            return false;
        }
    }
    
    public function insertAdminRoleRights($data)
    {
        try {
            $dateTime   =   date('Y-m-d H:i:s');
            
            $insertArray = [];
            
            foreach ($data['rights'] as $right) {
                $insertArray[] = [
                    'fk_admin_role_id'      => $data['fk_admin_role_id'],
                    'fk_admin_rights_id'    => $right,
                    'fk_admin_user_id'      => $data['fk_admin_user_id'],
                    'created_at'            => $dateTime,
                    'updated_at'            => $dateTime,
                    'status'                => 'Enabled',
                ];
            }
            
            if (!$this->_dbUgnTblJAdminRoleRights->insert($insertArray))
            {
                $this->error = 'Unable to insert role rights due to a database error';
                return false;
            }
            
            return true;
            
        } catch (\Exception $ex) {
            $this->setError('insert admin role rights', $ex);
            return false;
        }
    }
    
    public function getRoleRightsList($data = [])
    {
        try {
            $result = $this->_dbUgnAdminRightsMaster;
            
            if (!empty($data['searchArray'])) {
                $result = $result->where($data['searchArray']);
            }
            
            if (!empty($data['notArray'])) {
                foreach ($data['notArray'] as $conditionValueArray) {
                    list($column, $value) = $conditionValueArray;
                    $result = $result->where($column, '<>', $value);
                }
            }
            
            /*if (!empty($data['notArray'])) {
                echo '<br>Sql : ' . $result->toSql();exit;
            }*/
            
            
            if (!empty($data['api_call'])) {
                $result = $result->get()->toArray();
            } else {
                $result = $result->paginate(env('RECORDS_PER_PAGE'));
                $result->all();
            }
            
            if (count($result)) {
                return $result;
            }
            
            $this->error = 'No Admin role rights found';
            
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('fetch role rights list', $ex);
            return false;
        }
    }
    
    public function updateRoleRights($data)
    {
        try {
            /*if (!empty($data['updateArray']['admin_rights'])) {
                
            }*/
            
            $result = $this->_dbUgnAdminRightsMaster::where($data['whereArray'])->update($data['updateArray']);
            
            if (!$result) {
                $this->error = 'Unable to update rights due to a database error';
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('update role rights', $ex);
            return false;
        }
    }
    
    public function createRight($data)
    {
        try {
            $dateTime   =   date('Y-m-d H:i:s');
            
            $this->_dbUgnAdminRightsMaster->admin_rights            = trim($data['right_name']);
            $this->_dbUgnAdminRightsMaster->status                  = $data['status'];
            $this->_dbUgnAdminRightsMaster->created_at              = $dateTime;
            $this->_dbUgnAdminRightsMaster->updated_at              = $dateTime;
            $this->_dbUgnAdminRightsMaster->updated_at              = $dateTime;
            $this->_dbUgnAdminRightsMaster->fk_admin_user_id        = $data['fk_admin_user_id'];
            
            if (!$this->_dbUgnAdminRightsMaster->save()) {
                $this->error = 'Unable to create new right due to a database error';
                return false;
            }
            
            return $this->_dbUgnAdminRightsMaster->pk_admin_rights_id;
            
        } catch (\Exception $ex) {
            $this->setError('create new right', $ex);
            return false;
        }
    }
}
