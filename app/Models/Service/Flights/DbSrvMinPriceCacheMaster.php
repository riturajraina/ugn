<?php

namespace App\Models\Service\Flights;

use Illuminate\Database\Eloquent\Model;

class DbSrvMinPriceCacheMaster extends Model {

    protected $table = 'srv_min_price_cache_master';
    protected $connection;
	//public $timestamps = false;
    protected $primaryKey = 'pk_min_price_cache_id';
    protected $fillable = [
		'minPriceDeparture', 'minPriceArrival', 'fk_search_param_id', 
		'created_at', 'updated_at'
    ];

    public function __construct() {
        $this->connection = env('SERVICECONN');
    }

}
