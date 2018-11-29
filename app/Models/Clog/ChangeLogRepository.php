<?php namespace App\Models\Clog;

use App\Models\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChangeLogRepository extends BaseRepository {

    protected $_dbUgnTableChangeLog;

    public function __construct() {
        $this->_dbUgnTableChangeLog = new DbUgnTableChangeLog();
    }

    public function insertLog($data) {
        try {
            if (count($data)) {
                $i              =   0;
                
                $insertArray    =   [];
                
                $dateTime       =   date('Y-m-d H:i:s');
                
                foreach ($data as $row) {
                    if ($i % 100 == 0) {
                        if (!DB::table('ugn_table_change_log')->insert($insertArray)) {
                            $this->error    = 'Unable to insert multiple change log due to a database error.';
                            return false;
                        }
                        
                        $insertArray        = [];
                    }
                    
                    $insertRow = [
                        'table_name'        => $row['table_name'],
                        'table_column'      => $row['table_column'],
                        'old_value'         => $row['old_value'], 
                        'new_value'         => $row['new_value'], 
                        'value_pk'          => $row['value_pk'],
                        'created_at'        => $dateTime, 
                        'fk_admin_user_id'  => $row['fk_admin_user_id'],
                    ];
                    
                    $insertArray[] = $insertRow;
                    
                    $i++;
                }
                
                if (count($insertArray)) {
                    if (!DB::table('ugn_table_change_log')->insert($insertArray)) {
                        $this->error = 'Unable to insert multiple change log due to a database error.';
                        return false;
                    }
                }
            }
            return true;
        } catch (\Exception $ex) {
            $this->setError('insert change log', $ex);
            return false;
        }
    }
    
    public function getLogTableName()
    {
        $this->_dbUgnTableChangeLog->getTable();
    }
}
