<?php

namespace App\Models\Service\Hotels;

use Illuminate\Database\Eloquent\Model;

class DbHtlHotelsUrlMaster extends Model {

    protected $table = 'htl_hotels_url_master';
    protected $connection;
    protected $primaryKey = 'pk_hotels_url_id';
    protected $fillable = [
        'url', 'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection = env('HOTELCONN');
    }

}
