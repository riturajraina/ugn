<?php

namespace App\Models\Sms;

use Illuminate\Database\Eloquent\Model;

class DbUgnSmsMaster extends Model {

    protected $table = 'ugn_sms_master';
    protected $primaryKey = 'pk_sms_id';
    protected $fillable = [
        'sms_text', 'mobile_number', 'created_at', 'updated_at', 'status',
    ];

    public function __construct() {
        
    }

}
