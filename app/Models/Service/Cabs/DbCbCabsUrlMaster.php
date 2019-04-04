<?php

namespace App\Models\Service\Cabs;

use Illuminate\Database\Eloquent\Model;

class DbCbCabsUrlMaster extends Model {

    protected $table = 'cb_cabs_url_master';
    protected $connection;
    protected $primaryKey = 'pk_cabs_url_id';
    protected $fillable = [
        'url', 'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection = env('CABSCONN');
    }
}
