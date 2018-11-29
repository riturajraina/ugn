<?php

namespace App\Models\Search;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchLogRepository extends BaseRepository {

    protected $_dbUgnSearchLog;
    protected $_dbUgnUserAgentMaster;

    public function __construct() {
        $this->_dbUgnSearchLog          = new DbUgnSearchLog();
        $this->_dbUgnUserAgentMaster    = new DbUgnUserAgentMaster();
    }
    
    public function getUserAgentId()
    {
        try {
            $userAgentString    =   $_SERVER['HTTP_USER_AGENT'];
        
            //json_encode(get_browser($_SERVER['HTTP_USER_AGENT'], true));
            $getBrowserJson     =   $_SERVER['HTTP_USER_AGENT'];

            $result =   $this->_dbUgnUserAgentMaster
                        ->where(
                                [
                                    'user_agent_string' => $userAgentString,
                                    'get_browser_json'  =>  $getBrowserJson,
                                ]
                               )->get()->toArray();

            if (count($result)) {
                $result =   $result['0'];
                return $result['pk_user_agent_id'];
            }

            $dateTime   =   date('Y-m-d H:i:s');

            $this->_dbUgnUserAgentMaster->user_agent_string =   $userAgentString;
            $this->_dbUgnUserAgentMaster->get_browser_json  =   $getBrowserJson;
            $this->_dbUgnUserAgentMaster->created_at        =   $dateTime;
            $this->_dbUgnUserAgentMaster->updated_at        =   $dateTime;

            if (!$this->_dbUgnUserAgentMaster->save()) {
                $this->error    =   'Unable to save user agent data. Please contact administrator';
                return false;
            }
            
            return $this->_dbUgnUserAgentMaster->pk_user_agent_id;
            
        } catch (\Exception $ex) {
            $this->setError('fetch user agent id', $ex);
            return false;
        }
        
    }

    public function insertLog($data)
    {
        try {
            
            $userAgentId                                =   $this->getUserAgentId();
            
            if (!$userAgentId) {
                return false;
            }
            
            $dateTime                                   =   date('Y-m-d H:i:s');
            
            $this->_dbUgnSearchLog->search_type         =   $data['search_type'];
            $this->_dbUgnSearchLog->search_text         =   $data['search_text'];
            $this->_dbUgnSearchLog->fk_page_category_id =   !empty($data['fk_page_category_id']) ? $data['fk_page_category_id']
                                                            : null;
            $this->_dbUgnSearchLog->created_at          =   $dateTime;
            $this->_dbUgnSearchLog->updated_at          =   $dateTime;
            $this->_dbUgnSearchLog->fk_user_id          =   !empty($data['fk_user_id']) ? $data['fk_user_id'] : null;
            $this->_dbUgnSearchLog->session_id          =   $data['session_id'];
            $this->_dbUgnSearchLog->ip_address          =   !empty($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;
            $this->_dbUgnSearchLog->device_type         =   !empty($data['device_type']) ? $data['device_type'] : null;
            
            $this->_dbUgnSearchLog->fk_user_agent_id    =   $userAgentId;

            if (!$this->_dbUgnSearchLog->save()) {
                $this->error    =   'Unable to save search log due to a database error. Please contact administrator';
                return false;
            }
            
            return $this->_dbUgnSearchLog->pk_search_log_id;
            
        } catch (\Exception $ex) {
            $this->setError('insert search log', $ex);
            return false;
        }
    }
}

