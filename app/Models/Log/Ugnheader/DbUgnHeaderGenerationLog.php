<?php

namespace App\Models\Log\Ugnheader;

use Illuminate\Database\Eloquent\Model;

class DbUgnHeaderGenerationLog extends Model {

    protected $table = 'ugn_header_generation_log';
    protected $primaryKey = 'pk_ugn_header_log_id';
    public $timestamps = false;
    protected $fillable = ['fk_admin_user_id', 'created_at'];

    public function __construct() {
        
    }

}
