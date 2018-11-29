<?php 
namespace App\Models\Fuser;
use App\Models\BaseRepository;
use Illuminate\Support\Facades\Hash;

class FrontEndUserRepository extends BaseRepository {

    protected $_dbUgnUserMaster;

    public function __construct() {
        $this->_dbUgnUserMaster = new DbUgnUserMaster();
    }
    
    public function getTableName()
    {
        return $this->_dbUgnUserMaster->getTable();
    }
    
    public function checkDuplicateValues($data) {
        try {
            
            $result =   $this->_dbUgnUserMaster::where(['status' => 'Enabled']);
            
            if (!empty($data['pk_user_id'])) {
                $result = $result->where('pk_user_id', '<>', $data['pk_user_id']);
            }
            
            global  $globalData;
            
            $globalData =   $data;
            
            $result     =   $result->where (
                    
                                function ($query) {
                
                                    $data = $GLOBALS['globalData'];
                                    
                                    unset($GLOBALS['globalData']);
                                    
                                    if (!empty($data['email']) && !empty($data['mobile_number'])) {
                                        
                                        $query->where(['email' => $data['email']])
                                          ->orWhere(['mobile_number' => $data['mobile_number']]);
                                        
                                    } elseif (!empty($data['email'])) {
                                        
                                        $query->where(['email' => $data['email']]);
                                        
                                    } elseif (!empty($data['mobile_number'])) {
                                        
                                        $query->where(['mobile_number' => $data['mobile_number']]);
                                        
                                    } 
                                }
                            );
            
            $result = $result->get()->toArray();
            
            if (count($result)) {
                
                $this->error    =   '';

                foreach ($result as $row) {
                    if (!empty($data['email'])) {
                        if ($row['email'] == $data['email']) {
                            $this->error .= 'Email alreay exists';
                        }
                    }
                    
                    if (!empty($data['mobile_number'])) {
                        if ($row['mobile_number'] == $data['mobile_number']) {
                            $this->error .= 'Mobile number alreay exists';
                        }
                    }
                }
                
                return false;
            }
            
            return true;
            
        } catch (\Exception $ex) {
            $this->setError('check duplicate user data', $ex);
            return false;
        }
    }

    public function saveUser($data)
    {
        try {
            if (!$this->checkDuplicateValues($data)) {
                return false;
            }
            
            $dateTime                               =   date('Y-m-d H:i:s');
            $this->_dbUgnUserMaster->fname          =   $data['fname'];
            $this->_dbUgnUserMaster->lname          =   $data['lname'];
            $this->_dbUgnUserMaster->password       =   $data['password'];
            $this->_dbUgnUserMaster->mobile_number  =   $data['mobile_number'];
            $this->_dbUgnUserMaster->email          =   $data['email'];
            $this->_dbUgnUserMaster->created_at     =   $dateTime;
            $this->_dbUgnUserMaster->updated_at     =   $dateTime;
            
            $this->_dbUgnUserMaster->save();
            
            return $this->_dbUgnUserMaster->pk_user_id;
            
        } catch (\Exception $ex) {
            $this->setError('save user due to a db error. Please contact administrator', $ex);
            return false;
        }
    }
    
    public function updateUser($data)
    {
        try {
            if (!$this->checkDuplicateValues($data)) {
                return false;
            }
            
            $userId =   $data['pk_user_id'];
            
            unset($data['pk_user_id']);
            
            if (!$this->_dbUgnUserMaster::where(['pk_user_id' => $userId])->update($data)) {
                $this->error = 'Unable to update user due to a database error. Please contact administrator';
                return false;
            }
            
            return true;
        } catch (\Exception $ex) {
            $this->setError('update user', $ex);
            return false;
        }
    }
    
    public function checkUser($data)
    {
        try {
            
            if ((empty($data['mobile_number']) && empty($data['email'])) || empty($data['password'])) {
                $this->error = 'An important credential is missing';
                return false;
            }
            
            $whereArray =   [];
            
            if (!empty($data['mobile_number'])) {
                $whereArray['mobile_number']    =   $data['mobile_number'];
            } elseif (!empty($data['email'])) {
                $whereArray['email']            =   $data['email'];
            }
            
            $whereArray['status']   =   'Enabled';
            
            $userDetails =   $this->_dbUgnUserMaster::where($whereArray)->get()->toArray();
            
            if (is_array($userDetails) && count($userDetails)) {
                $userDetails    =   $userDetails['0'];
                if (Hash::check($data['password'], $userDetails['password'])) {
                    return $userDetails;
                } else {
                    $this->error    =   'Credentials don\'t match';
                    return false;
                } 
            }
            
            $this->error    =   'No user found';
            
            return false;
            
        } catch (\Exception $ex) {
            $this->setError('Unable to check user credentials', $ex);
            return false;
        }
    }
}

