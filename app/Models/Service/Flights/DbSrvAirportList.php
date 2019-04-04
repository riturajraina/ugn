<?php

namespace App\Models\Service\Flights;

use Illuminate\Database\Eloquent\Model;

class DbSrvAirportList extends Model {

    protected $table = 'srv_airport_list';
    protected $connection;
    protected $primaryKey = 'pk_airport_id';
    protected $fillable = [
        'airport_name', 'IATA_Code', 'ICAO_Code', 'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection = env('SERVICECONN');
    }

}
