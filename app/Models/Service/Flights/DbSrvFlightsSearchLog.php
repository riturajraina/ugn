<?php

namespace App\Models\Service\Flights;

use Illuminate\Database\Eloquent\Model;

class DbSrvFlightsSearchLog extends Model {

    protected $table        = 'srv_flights_search_log';
    
    protected $connection;
    
    protected $primaryKey   = 'pk_flights_search_log_id';
    
    protected $fillable     = [
        'fk_search_param_id', 'fk_user_id', 'session_id', 'device_type', 
        'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection = env('SERVICECONN');
    }

}
