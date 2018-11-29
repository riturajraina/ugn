<?php

namespace App\Models\Log\Ugnheader;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UgnHeaderLogRepository extends BaseRepository {

    protected $_dbUgnHeaderGenerationLog;

    public function __construct() {
        $this->_dbUgnHeaderGenerationLog = new DbUgnHeaderGenerationLog();
    }

    public function insertLog($data)
    {
        try {
            $this->_dbUgnHeaderGenerationLog->fk_admin_user_id  =   $data['fk_admin_user_id'];
            $this->_dbUgnHeaderGenerationLog->created_at        =   date('Y-m-d H:i:s');
            
            if (!$this->_dbUgnHeaderGenerationLog->save()) {
                $this->error = 'Unable to save ugn header generation log due to a database error';
                return false;
            }
            
            return $this->_dbUgnHeaderGenerationLog->pk_ugn_header_log_id;
        } catch (\Exception $ex) {
            $this->setError('insert ugn header generation log', $ex);
            return false;
        }
    }
}
