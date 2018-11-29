<?php

namespace App\Models\Search;

use Illuminate\Database\Eloquent\Model;

class DbUgnSearchLog extends Model {

    protected $table		= 'ugn_search_log';
    protected $primaryKey	= 'pk_search_log_id';
    protected $fillable		= [
		'search_type', 'search_text', 'created_at', 'updated_at', 'fk_user_id', 'session_id', 'ip_address',
		'device_type', 'fk_user_agent_id',
	];

    public function __construct() {
        
    }

}
