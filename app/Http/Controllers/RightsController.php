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

class RightsController extends Controller {

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
    
    public function createRight(Request $request)
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_CREATE_NEW_ADMIN_ROLE_RIGHT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data = $request->all();
        
        $searchData   = [   'searchArray' => [
                                            'admin_rights'  => trim($data['right_name']),
                                            //'status'        => 'Enabled',
                                          ], 
                            'api_call' => 1
                        ];
        
        $rightDetails = $this->roleRightsRepository->getRoleRightsList($searchData);
        
        if (count($rightDetails) && is_array($rightDetails)) {
            return redirect($this->getErrorUrl('This right already exist.'));
        }

        unset($rightDetails);
        
        $data['fk_admin_user_id'] = Auth::user()->pk_admin_user_id;
        
        if (!$this->roleRightsRepository->createRight($data)) {
            return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
        }
        
        return redirect($this->getSuccessUrl('Admin right created successfully'));
    }
    
    public function showRightsList()
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_VIEW_ADMIN_ROLE_RIGHTS_LIST])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $rightsList = $this->roleRightsRepository->getRoleRightsList();
        
        //echo '<br>rightsList : <pre>' . print_r($rightsList, true) . '</pre>';exit;
        
        return view('viewrights', ['rightsList' => $rightsList]);
    }
    
    public function showCreateRightForm()
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_CREATE_NEW_ADMIN_ROLE_RIGHT])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        return view('createright', ['selectOptionsManager' => $this->selectOptionsManager]);
    }
    
    public function editRight(Request $request)
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_EDIT_ADMIN_ROLE_RIGHTS])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data = $request->all();
        
        $searchData   = ['searchArray' => ['pk_admin_rights_id' => $data['rightId']], 'api_call' => 1];
        
        $rightDetails = $this->roleRightsRepository->getRoleRightsList($searchData);
        
        if (!$rightDetails) {
            return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
        }
        
        $rightDetails   =   $rightDetails['0'];
        
        $logArray       =   [];
        
        $updateArray    =   [];
        
        $dateTime       =   date('Y-m-d H:i:s');
        
        if ($data['right_name'] <> $rightDetails['admin_rights']) {
            
            $updateArray['admin_rights'] = $data['right_name'];
            
            $searchData   = [
                                'searchArray'   =>  [
                                                        'admin_rights'  => trim($data['right_name']),
                                                        'status'        => 'Enabled',
                                                    ],
                
                                'notArray'      =>  [
                                                        ['pk_admin_rights_id', $rightDetails['pk_admin_rights_id']]
                                                    ],
                
                                'api_call'      => 1,
                            ];
            
            $rightDetailsUpdate = $this->roleRightsRepository->getRoleRightsList($searchData);
            
            if (count($rightDetailsUpdate) && is_array($rightDetailsUpdate)) {
                return redirect($this->getErrorUrl('This right name already exist'));
            }
            
            $logArray[]   =   [
                'table_name'        => $this->roleRightsRepository->getRightsTableName(),
                'table_column'      => 'admin_rights',
                'old_value'         => $rightDetails['admin_rights'],
                'new_value'         => $data['right_name'],
                'created_at'        => $dateTime,
                'fk_admin_user_id'  => Auth::user()->pk_admin_user_id,
                'value_pk'          => $rightDetails['pk_admin_rights_id'],
            ];
        }
        
        if ($data['status'] <> $rightDetails['status']) {
            
            $updateArray['status'] = $data['status'];
            
            $logArray[]   =   [
                'table_name'        => $this->roleRightsRepository->getRightsTableName(),
                'table_column'      => 'status',
                'old_value'         => $rightDetails['status'],
                'new_value'         => $data['status'],
                'created_at'        => $dateTime,
                'fk_admin_user_id'  => Auth::user()->pk_admin_user_id,
                'value_pk'          => $rightDetails['pk_admin_rights_id'],
            ];
        }
        
        if (count($updateArray)) {
            $updateArray['fk_admin_user_id']    = Auth::user()->pk_admin_user_id;
            
            $updateArray['updated_at']          = $dateTime;
            
            $updateData = [
                'whereArray'    =>  ['pk_admin_rights_id' => $rightDetails['pk_admin_rights_id']],
                'updateArray'   =>  $updateArray,
            ];
            
            if (!$this->roleRightsRepository->updateRoleRights($updateData)) {
                return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
            }
            
            if (!$this->changeLogRepository->insertLog($logArray)) {
                return redirect($this->getErrorUrl($this->changeLogRepository->getError()));
            }
            
            return redirect($this->getSuccessUrl('Admin role right updated successfully'));
        }
        
        return redirect($this->getErrorUrl('No change found to update'));
    }
    
    public function showEditRightForm($rightId)
    {
        if (!$this->checkRights(['rightId' => \App\Helpers\RightsConstantsManager::CAN_EDIT_ADMIN_ROLE_RIGHTS])) {
            return redirect($this->getErrorUrl(env('INSUFFICIENTRIGHTSMESSAGE')));
        }
        
        $data           = ['searchArray' => ['pk_admin_rights_id' => $rightId], 'api_call' => 1];
        
        $rightDetails = $this->roleRightsRepository->getRoleRightsList($data);
        
        if (!$rightDetails) {
            return redirect($this->getErrorUrl($this->roleRightsRepository->getError()));
        }
        
        $rightDetails   = $rightDetails['0'];
        
        $data           = ['searchArray' => ['pk_admin_user_id' => $rightDetails['fk_admin_user_id']], 'api_call' => 1];
        
        $userDetails = $this->userRepository->fetchAllUsers($data);
        
        if (!$userDetails) {
            return redirect($this->getErrorUrl($this->userRepository->getError()));
        }
        
        $userDetails    = $userDetails['0'];
        
        $createdBy      = $userDetails['fname'] . ' ' . $userDetails['lname'];
        
        return view('editright',    [
                                        'rightDetails' => $rightDetails, 
                                        'createdBy' => $createdBy, 
                                        'rightId' => $rightId,
                                        'selectOptionsManager' => $this->selectOptionsManager,
                                    ]);
    }
}
