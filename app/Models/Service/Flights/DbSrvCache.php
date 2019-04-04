<?php

namespace App\Models\Service\Flights;

use Illuminate\Database\Eloquent\Model;

class DbSrvCache extends Model {

    protected $table = 'srv_cache';
    protected $connection;
	public $timestamps = false;
    protected $primaryKey = 'pk_srv_cache';
    protected $fillable = [
        /*'source', 'destination', 'vendor', 'departure_date', 
		'arrival_date', 'created_at', 'return_trip',*/
		'cache_key', 'data', 'created_at',
    ];

    public function __construct() {
        $this->connection = env('SERVICECONN');
    }

}
