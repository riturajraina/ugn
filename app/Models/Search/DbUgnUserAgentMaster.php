<?php

namespace App\Models\Search;

use Illuminate\Database\Eloquent\Model;

class DbUgnUserAgentMaster extends Model {

    protected $table		= 'ugn_user_agent_master';
    protected $primaryKey	= 'pk_user_agent_id';
    protected $fillable		= [
		'user_agent_string', 'get_browser_json', 'created_at', 'updated_at'
	];

    public function __construct() {
        
    }

}
