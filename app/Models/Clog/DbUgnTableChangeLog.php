<?php

namespace App\Models\Clog;

use Illuminate\Database\Eloquent\Model;

class DbUgnTableChangeLog extends Model {

    protected $table        = 'ugn_table_change_log';
    
    protected $primaryKey   = 'pk_table_change_log';
    
    protected $fillable     = [
        'table_name', 'table_column', 'old_value', 'new_value', 
        'value_pk', 'created_at', 'fk_admin_user_id',
    ];

    public function __construct() {
        
    }
}

