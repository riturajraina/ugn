<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\User\UserRepository;
use App\Helpers\GenerateRandom;
use App\Helpers\EmailMobileValidator;
use App\Models\Role\RoleRepository;
use App\Helpers\SelectOptionsManager;
//
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $userRepository;
    
    protected $generateRandom;
    
    protected $emailMobileValidator;
    
    protected $roleRepository;
    
   // protected $changeLogRepository;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        parent::__construct();
        $this->userRepository       = new UserRepository();
        $this->generateRandom       = new GenerateRandom();
        $this->emailMobileValidator = new EmailMobileValidator();
        $this->roleRepository       = new RoleRepository();
    }
    
    
    
    public function editUser($userId)
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_EDIT_USERS])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $userDetails = $this->userRepository->fetchAllUsers(['searchArray' => ['pk_admin_user_id' => $userId]]);
        
        if (!$userDetails) {
            return redirect($this->getErrorUrl('User details not found'));
        }
        
        $userAttributes = [];
        
        if (is_object($userDetails)) {
            /*$userDetails = $userDetails->getItems();
            $userDetails = (array)$userDetails;
            echo '<br>User Details : <pre>' . print_r($userDetails, true) . '</pre>';exit;
            $userDetails = $userDetails->getAttributes();*/
            foreach ($userDetails as $row) {
                $userAttributes = $row->getAttributes();
            } 
        }
        
        $roleList = [];
        
        $roleArray = $this->roleRepository->getRoleList();
        
        if (!$roleArray) {
            return redirect('/viewusers')
                            ->withInput()
                            ->withErrors([$this->roleRepository->getError()]);
        }
        
        foreach ($roleArray as $row) {
            $roleList[$row['pk_admin_role_id']]     =  $row['admin_role'];
        }
        
        return view('editadmin',    [
                                        'userDetails' => $userAttributes, 
                                        'selectOptionsManager' => $this->selectOptionsManager,
                                        'roleList' => $roleList,
                                    ]);
    }


    public function showUsers(Request $request)
    {

        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_VIEW_USER_LIST])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
                
        $data = $request->all();
        
        /*if (count($data)) {
            echo '<br>Data : <pre>' . print_r($data, true) . '</pre>';
        }*/
        
        //$fname = !empty($data['fname']) ? $data['fname'] : (!empty(Input::old('fname')) ? Input::old('fname') : '');
        
        $fname = !empty($data['fname']) ? $data['fname'] : Input::old('fname');
        
        $lname = !empty($data['lname']) ? $data['lname'] : Input::old('lname');
        
        $mobileNumber = !empty($data['mobile_number']) ? $data['mobile_number'] : Input::old('mobile_number');
        
        $email = !empty($data['email']) ? $data['email'] : Input::old('email');
        
        $createdAt = !empty($data['createdAt']) ? $data['createdAt'] : Input::old('createdAt');
        
        $updatedAt = !empty($data['updatedAt']) ? $data['updatedAt'] : Input::old('updatedAt');
        
        $role = !empty($data['role']) ? $data['role'] : Input::old('role');
        
        $status = !empty($data['status']) ? $data['status'] : Input::old('status');
        
        $roleList = [];
        
        $roleArray = $this->roleRepository->getRoleList(['api_call' => 1]);
        
        if (!$roleArray) {
            return redirect('/viewusers')
                            ->withInput()
                            ->withErrors([$this->roleRepository->getError()]);
        }
        
        foreach ($roleArray as $row) {
            $roleList[$row['pk_admin_role_id']] = $row['admin_role'];
        }
        
        $searchArray = [];
        
        if (count($data)) {
            if (!empty($data['fname'])) {
                $searchArray['fname']                   = $data['fname'];
            }
            
            if (!empty($data['lname'])) {
                $searchArray['lname']                   = $data['lname'];
            }
            
            if (!empty($data['mobile_number'])) {
                $searchArray['mobile_number']           = $data['mobile_number'];
            }
            
            if (!empty($data['email'])) {
                $searchArray['email']                   = $data['email'];
            }
            
            if (!empty($data['createdAt'])) {
                
                $searchArray['created_at']              = $data['createdAt'];
                
                $dateArray                              = explode('-', $data['createdAt']);
                
                if (!checkdate($dateArray['1'], $dateArray['2'], $dateArray['0'])) {
                    return redirect('/viewusers')
                                ->withInput()
                                ->withErrors(['Invalid created at date']);
                }
            }
            
            if (!empty($data['updatedAt'])) {
                
                $searchArray['updated_at']              = $data['updatedAt'];
                
                $dateArray                              = explode('-', $data['updated_at']);
                
                if (!checkdate($dateArray['1'], $dateArray['2'], $dateArray['0'])) {
                    return redirect('/viewusers')
                                ->withInput()
                                ->withErrors(['Invalid updated at date']);
                }
            }
            
            if (!empty($data['createdAt']) && !empty($data['updatedAt'])) {
                
                $dateArray      = explode('-', $data['createdAt']);
            
                $startTime      = mktime(0, 0, 0, $dateArray['1'], $dateArray['2'], $dateArray['0']);

                $dateArray      = explode('-', $data['updatedAt']);

                $endTime        = mktime(0, 0, 0, $dateArray['1'], $dateArray['2'], $dateArray['0']);

                if ($endTime < $startTime) {
                    return redirect('/viewusers')
                                ->withInput()
                                ->withErrors(['"Updated At" date shall be greater than or equal to "Created At" date']);
                }
            }
            
            if (!empty($data['role'])) {
                $searchArray['fk_admin_role_id']    = $data['role'];
            }
            
            if (!empty($data['status'])) {
                $searchArray['status']                  = $data['status'];
            }
        }
        
        $userList = $this->userRepository->fetchAllUsers(['searchArray' => $searchArray]);
        
        if (!$userList && !is_array($userList)) {
            return redirect($this->getErrorUrl($this->userRepository->getError()));
        }
        
        //echo '<br>rights array : <pre>' . print_r(session('rightsArray'), true) . '</pre>';

        $viewArray =    [
                            'fname'                 => $fname,
                            'lname'                 => $lname,
                            'mobileNumber'          => $mobileNumber,
                            'email'                 => $email,
                            'createdAt'             => $createdAt,
                            'updatedAt'             => $updatedAt,
                            'lname'                 => $lname,
                            'role'                  => $role,
                            'status'                => $status,
                            'roleList'              => $roleList,
                            'selectOptionsManager'  => $this->selectOptionsManager,
                            'userList'              => $userList,
                        ];
        
        return view('viewusers', $viewArray);
    }
    
    public function editAdmin(Request $request)
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_EDIT_ADMIN_ROLE])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data = $request->all();
        
        $userDetails = $this->userRepository->fetchAllUsers([
                                                                'searchArray'    => ['pk_admin_user_id' => $data['userId']],
                                                                'api_call'      => 1,
                                                            ]);
        
        if (!$userDetails) {
            return redirect($this->getErrorUrl('User not found'));
        }
        
        $userDetails = $userDetails['0'];
        
        //$data['fk_admin_role_id']   = Auth::user()->fk_admin_role_id;
        
        if (!$this->userRepository->AddEditUser($data)) {
            return redirect($this->getErrorUrl($this->userRepository->getError()));
        }
        
        $logArray = [];

        foreach ($data as $key=>$value) {
            if (!empty($userDetails[$key]) && $userDetails[$key] <> $value) {
                $logArray[] = [
                    'table_name'        => $this->userRepository->getUserTableName(),
                    'table_column'      => $key,
                    'old_value'         => $userDetails[$key],
                    'new_value'         => $value,
                    'fk_admin_user_id'  => Auth::user()->pk_admin_user_id,
                    'value_pk'          =>  $userDetails['pk_admin_user_id'],
                ];
            }
        }
        
        if ($data['role'] <> $userDetails['fk_admin_role_id']) {
            $logArray[] = [
                    'table_name'        => $this->userRepository->getUserTableName(),
                    'table_column'      => 'fk_admin_role_id',
                    'old_value'         => $userDetails['fk_admin_role_id'],
                    'new_value'         => $data['role'],
                    'fk_admin_user_id'  => Auth::user()->pk_admin_user_id,
                    'value_pk'          =>  $userDetails['pk_admin_user_id'],
                ];
        }
        
        if (count($logArray)) {
            if (!$this->changeLogRepository->insertLog($logArray)) {
                return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
            }
        }
        
        return redirect('/success/' . base64_encode('User updated successfully'));
    }
}


