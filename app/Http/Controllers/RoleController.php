<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Role\RoleRepository;
use App\Models\User\UserRepository;
use App\Models\Rolerights\RoleRightsRepository;

use App\Helpers\GenerateRandom;
use App\Helpers\EmailMobileValidator;
use App\Helpers\SelectOptionsManager;


class RoleController extends Controller {

    protected $roleRepository;
    
    protected $userRepository;
    
    protected $roleRightsRepository;
    
    
    
    
    

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
        parent::__construct();
        $this->roleRepository       = new RoleRepository();
        $this->userRepository       = new UserRepository();
        $this->roleRightsRepository = new RoleRightsRepository();
        
    }
    
    public function viewRoles()
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_VIEW_ADMIN_ROLE_LIST])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $roleList = $this->roleRepository->getRoleList();
        
        //echo '<br>roleList : <pre>' . print_r($roleList, true) . '</pre>';exit;
        
        if (!$roleList) {
            return redirect($this->getErrorUrl($this->roleRepository->getError()));
        }
        
        return view('viewroles', ['roleList' => $roleList]);
    }
    
    public function editRole(Request $request)
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_EDIT_ADMIN_ROLE])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data = $request->all();
        
        $updateArray = [];
         
        $roleSearchArray = ['pk_admin_role_id' => $data['roleId']];
         
        $roleDetails = $this->roleRepository->getRoleList(['searchArray' => $roleSearchArray, 'api_call' => 1]);
         
        if (!$roleDetails) {
            return redirect($this->getErrorUrl($this->roleRepository->getError()));
        }
         
        $roleDetails    =   $roleDetails['0'];
         
        $logArray       =   [];
         
        $dateTime       =   date('Y-m-d H:i:s');
         
        if ($data['admin_role'] <> $roleDetails['admin_role']) {
            $updateArray['admin_role'] = $data['admin_role'];
            $logArray[] =  [
                               'table_name'     =>  $this->roleRepository->getAdminTableName(),
                               'old_value'      =>  $roleDetails['admin_role'],
                               'new_value'      =>  $data['admin_role'],
                               'table_column'   =>  'admin_role',
                               'created_at'     =>  $dateTime,
                               'fk_admin_user_id' => Auth::user()->pk_admin_user_id,
                               'value_pk'       =>  $roleDetails['pk_admin_role_id'],
                           ];
        }
         
        if ($data['status'] <> $roleDetails['status']) {
            $updateArray['status']  = $data['status'];
            
            $logArray[]             =  [
                                            'table_name'        =>  $this->roleRepository->getAdminTableName(),
                                            'old_value'         =>  $roleDetails['status'],
                                            'new_value'         =>  $data['status'],
                                            'table_column'      =>  'status',
                                            'created_at'        =>  $dateTime,
                                            'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                                            'value_pk'          =>  $roleDetails['pk_admin_role_id'],
                                        ];
        }
         
        if (count($updateArray)) {

            $whereArray = ['pk_admin_role_id' => $data['roleId']];
            
            if (!$this->roleRepository->updateRole(['whereArray' => $whereArray, 'updateArray' => $updateArray])) {
                return redirect($this->getErrorUrl($this->roleRepository->getError()));
            }
             
            if (!$this->changeLogRepository->insertLog($logArray)) {
                return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
            }
        }
         
        $rightsPosted       = $data['rights'];
         
        $adminRightsList    = explode(',', $data['adminRightsList']);
        
        $logArray           = [];
        
        $whereInArray       = [];
        
        foreach ($adminRightsList as $right) {
            if (!in_array($right, $rightsPosted)) {
                
                $whereInArray[] =   $right;
                
                $logArray[]     =   [
                                        'table_name'        =>  $this->roleRightsRepository->getUgnTblJTableName(),
                                        'old_value'         =>  'Enabled',
                                        'new_value'         =>  'Disabled',
                                        'table_column'      =>  'status',
                                        'created_at'        =>  $dateTime,
                                        'fk_admin_user_id'  =>  Auth::user()->pk_admin_user_id,
                                        'value_pk'          =>  $roleDetails['pk_admin_role_id'],
                                        /* 
                                         * PLEASE DONT DELETE THE COMMENT BELOW
                                         * 
                                         * In the line above, since we are not having the value of
                                           primary key of ugn_tbl_j_admin_role_rights table, hence we are 
                                         * storing the value of primary key of ugn_admin_role_master so that at least
                                         * this can be identified that someone has changed the right of an admin role
                                         * & which record is updated can be found out by matching the timestamps of
                                         * ugn_tbl_j_admin_role_rights (updated_at) and ugn_table_change_log (created_at)
                                         * Rituraj 28 Aug 2018
                                         */
                                    ];
            }
        }
        
        if (count($whereInArray)) {
            
            $updateData = [
                'whereIn'   =>  ['fk_admin_rights_id', $whereInArray],
                'where'     =>  ['fk_admin_role_id' => $data['roleId']],
                'update'    =>  ['status' => 'Disabled'],
            ];
            
            $updateResult = $this->roleRightsRepository->updateRights($updateData);
            
            if (!$updateResult) {
                return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
            }
            
            if (!$this->changeLogRepository->insertLog($logArray)) {
                return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
            }
        }
        
        $newRights = [];
        
        foreach ($rightsPosted as $right) {
            if (!in_array($right, $adminRightsList)) {
                $newRights[] = $right;
            }
        }
        
        if (count($newRights)) {
            
            $insertArray = [
                'roleId'        => $data['roleId'],
                'admin_user_id' => Auth::user()->pk_admin_user_id,
                'rights'        => $newRights,
            ];
            
            if (!$this->roleRightsRepository->insertRights($insertArray)) {
                return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
            }
        }
        
        return redirect('/success/' . base64_encode('Admin role updated successfully'));
    }
    
    public function editRoleForm($roleId)
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_EDIT_ADMIN_ROLE])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $roleDetails = $this->roleRepository->getRoleList(
                                                            [
                                                                'searchArray'   => ['pk_admin_role_id' => $roleId],
                                                                'api_call'      => 1,
                                                            ]
                                                          );
        
        if (!$roleDetails) {
            return redirect($this->getErrorUrl($this->roleRepository->getError()));
        }
        
        $roleDetails = $roleDetails['0'];
        
        $userDetails = $this->userRepository->fetchAllUsers(
                                               [
                                                'searchArray'   => ['pk_admin_user_id' => $roleDetails['fk_admin_user_id']],
                                                'api_call'      => 1,
                                               ]
                                                           );
        
        if (!$userDetails) {
            return redirect($this->getErrorUrl('Unable to fetch details of this role creator'));
        }
        
        $userDetails = $userDetails['0'];
        
        $createdBy = $userDetails['fname'] . ' ' . $userDetails['lname'];
        
        $allRightsListArray = $this->roleRightsRepository->getRightsList(['api_call' => 1]);
        //echo '<br>$allRightsListArray : <pre>' . print_r($allRightsListArray, true) . '</pre>';exit;
        if (!$allRightsListArray) {
            return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
        }
        
        $allRights = [];
        
        foreach ($allRightsListArray as $row) {
            $allRights[$row['pk_admin_rights_id']] = $row['admin_rights'];
        }
        
        $data = [
                    'searchArray'   => ['fk_admin_role_id' => $roleId, 'status' => 'Enabled'],
                    'api_call'      => 1,
                ];
        
        $adminRightsList = $this->roleRightsRepository->getAdminRoleRightsList($data);
        //echo '<br>$adminRightsList : <pre>' . print_r($adminRightsList, true) . '</pre>';exit;
        if (!$adminRightsList) {
            return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
        }
        
        $adminRights = [];
        
        foreach ($adminRightsList as $row) {
            $adminRights[] = $row['fk_admin_rights_id'];
        }
        
        return view('editrole', [
                                    'roleDetails'           => $roleDetails, 
                                    'roleId'                => $roleId, 
                                    'createdBy'             => $createdBy,
                                    'selectOptionsManager'  => $this->selectOptionsManager,
                                    'allRightsList'         => $allRights,
                                    'adminRightsList'       => $adminRights,
                                    'checkBoxManager'       => $this->checkboxManager,
                                ]);
    }
    
    public function createRoleForm()
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_CREATE_NEW_ADMIN_ROLE])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $allRightsListArray = $this->roleRightsRepository->getRightsList(['api_call' => 1]);
        //echo '<br>$allRightsListArray : <pre>' . print_r($allRightsListArray, true) . '</pre>';exit;
        if (!$allRightsListArray) {
            return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
        }
        
        $allRights = [];
        
        foreach ($allRightsListArray as $row) {
            $allRights[$row['pk_admin_rights_id']] = $row['admin_rights'];
        }
        
        return view('createrole', [
                                    'selectOptionsManager'  => $this->selectOptionsManager,
                                    'allRightsList'         => $allRights,
                                    'checkBoxManager'       => $this->checkboxManager,
                                ]);
    }
    
    public function createRole(Request $request)
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_CREATE_NEW_ADMIN_ROLE])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data       =   $request->all();
        
        $createData =   [
                            'admin_role'        => $data['admin_role'], 
                            'fk_admin_user_id'  => Auth::user()->pk_admin_user_id,
                            'status'            => $data['status'],
                        ];
        
        $roleId     =   $this->roleRepository->createRole($createData);
        
        if (!$roleId) {
            return redirect($this->getErrorUrl($this->roleRepository->getError()));
        }
        
        
        
        $createData = [];
        
        $createData = [
            'fk_admin_role_id'  => $roleId,
            'rights'            => $data['rights'],
            'fk_admin_user_id'  => Auth::user()->pk_admin_user_id,
            
        ];
        
        if (!$this->roleRightsRepository->insertAdminRoleRights($createData))
        {
            return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
        }
        
        return redirect('/success/' . base64_encode('Admin role created successfully'));
    }
}
