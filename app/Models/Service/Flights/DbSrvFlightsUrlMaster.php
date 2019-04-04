<?php

namespace App\Models\Service\Flights;

use Illuminate\Database\Eloquent\Model;

class DbSrvFlightsUrlMaster extends Model {

    protected $table = 'srv_flights_url_master';
    protected $connection;
    protected $primaryKey = 'pk_flights_url_id';
    protected $fillable = [
        'url', 'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection = env('SERVICECONN');
    }

}
