<?php namespace App\Models\User;
use App\Models\BaseRepository;
use Illuminate\Support\Facades\Auth;

class UserRepository extends BaseRepository {

    protected $_dbAdminUser;

    public function __construct() {
        $this->_dbAdminUser = new DbUgnAdminUser();
    }
    
    public function updatePassword($data)
    {
        try {
            $result = $this->_dbAdminUser::where(['pk_admin_user_id' => $data['pk_admin_user_id']])
                    ->update(['password' => $data['password']]);
            return true;
        } catch (\Exception $ex) {
            $this->setError('update password', $ex);
            return false;
        }
    }
    
    public function fetchAllUsers($data)
    {
        try {
            
            $result     =   null;
            
            $startDate  =   null;
            
            $endDate    =   null;
            
            if (!empty($data['searchArray']['createdAt'])) {
                $startDate = $data['searchArray']['createdAt'] . ' 00:00:00';
                /**
                 * stopped date processing as removing date fields from form...will do later
                 * ...Rituraj 2-Aug-2018
                 */
            }
            
            if (!empty($data['searchArray']) && is_array($data['searchArray']) && count($data['searchArray'])) {
                
                //$result = $this->_dbAdminUser::where([]);
                
                $result = $this->_dbAdminUser;
                
                foreach ($data['searchArray'] as $key => $value) {
                    if ($key == 'pk_admin_user_id' || $key == 'userId') {
                        $result = $result->where('pk_admin_user_id', '=', $value);
                    }
                    
                    if ($key == 'fname') {
                        $result = $result->where('fname', 'like', '%' . $value . '%');
                    }
                    
                    if ($key == 'lname') {
                        $result = $result->where('lname', 'like', '%' . $value . '%');
                    }
                    
                    if ($key == 'email') {
                        $result = $result->where('email', 'like', '%' . $value . '%');
                    }
                    
                    if ($key == 'mobile_number') {
                        $result = $result->where('mobile_number', '=',  $value);
                    }
                    
                    if ($key == 'fk_admin_role_id') {
                        $result = $result->where('fk_admin_role_id', '=',  $value);
                    }
                    
                    if ($key == 'status') {
                        $result = $result->where('status', '=',  $value);
                    }
                }
            } else {
                $result = $this->_dbAdminUser::orderBy('fname', 'ASC');
            }
            
            if (!empty($data['userIdIn'])) {
                $result = $result->whereIn('pk_admin_user_id', $data['userIdIn']);
            }

            if (!empty($data['api_call'])) {
                $result = $result->get()->toArray();
            } else {
                $result = $result->paginate(env('RECORDS_PER_PAGE'));
                //echo '<br>After paginate : <pre>' . print_r($result, true) . '</pre>';
                $result->all();
                //echo '<br>After all : <pre>' . print_r($result, true) . '</pre>';
            }
            
            if (is_array($result)) {
                if (count($result)) {
                    return $result;
                }
            } elseif(is_object($result)) {
                if ($result->count()) {
                    return $result;
                }
            }
            
            $this->error = 'No users found';
            
            return [];
        } catch (\Exception $ex) {
            $this->setError('fetch user', $ex);
            return false;
        }
    }
    
    public function fetchUserByMobileNumber($mobileNumber)
    {
        try {
            $result = $this->_dbAdminUser::where(['mobile_number' => $mobileNumber])->get(['pk_admin_user_id'])->toArray();

            if (is_array($result) && count($result)) {
                return $result['0']['pk_admin_user_id'];
            }
            
            $this->error = 'User not found';
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch user by mobile number', $ex);
            return false;
        }
    }
    
    public function fetchUserDetailsById($userId)
    {
        try {
            $result = $this->_dbAdminUser::where(['pk_admin_user_id' => $userId])->get()->toArray();
            
            if (is_array($result) && count($result)) {
                return $result['0'];
            }
            
            $this->error = 'User not found';
            
            return false;
        } catch (\Exception $ex) {
            $this->setError('fetch user details', $ex);
            return false;
        }
    }
    
    public function AddEditUser($data)
    {
        try {
            $dateTime        =  date('Y-m-d H:i:s');
            
            if (!empty($data['userId'])) {
                
                /*$oldUserDataArray = $this->fetchAllUsers([
                                                            'searchArray' => [
                                                                                'pk_admin_user_id'  => $data['userId'],
                                                                             ],
                                                            'api_call'    => 1,
                                                         ]);
                
                if (!count($oldUserDataArray)) {
                    return false;
                }
                
                $oldUserDataArray = $oldUserDataArray['0'];*/
                
                $updateArray = [
                    'fname'                 => $data['fname'],
                    'lname'                 => $data['lname'],
                    //'mobile_number' => $data['mobile_number'],
                    //'email'         => $data['email'],
                    'updated_at'            => $dateTime,
                    'fk_admin_role_id'      => $data['role'],
                    'status'                => $data['status'],
                ];
                
                if (!$this->_dbAdminUser::where(['pk_admin_user_id' => $data['userId']])
                        ->update($updateArray)) {
                    $this->error = 'Unable to update user due to a database error. Please contact administrator';
                    return false;
                }
                
                return true;
            }
        } catch (\Exception $ex) {
            $this->setError('update user', $ex);
            return false;
        }
    }
    
    public function getUserTableName()
    {
        return $this->_dbAdminUser->getTable();
    }
}

