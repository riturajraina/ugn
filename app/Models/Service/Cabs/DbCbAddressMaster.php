<?php

namespace App\Models\Service\Cabs;

use Illuminate\Database\Eloquent\Model;

class DbCbAddressMaster extends Model {

    protected $table = 'cb_address_master';
    protected $connection;
    protected $primaryKey = 'pk_address_id';
    protected $fillable = [
        'address', 'latitude', 'longitude',
		'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection = env('CABSCONN');
    }
}
