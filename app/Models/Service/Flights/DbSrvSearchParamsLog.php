<?php

namespace App\Models\Service\Flights;

use Illuminate\Database\Eloquent\Model;

class DbSrvSearchParamsLog extends Model {

    protected $table = 'srv_search_params_log';
    protected $connection;
	//public $timestamps = false;
    protected $primaryKey = 'pk_search_param_id';
    protected $fillable = [
		'search_params_json', 'created_at', 'updated_at'
    ];

    public function __construct() {
        $this->connection = env('SERVICECONN');
    }

}

