<?php

namespace App\Models\Service\Hotels;

use Illuminate\Database\Eloquent\Model;

class DbHtlCityList extends Model {

    protected $table = 'htl_city_list';
    protected $connection;
    protected $primaryKey = 'pk_city_id';
    protected $fillable = [
        'city_name', 'country_code', 'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection = env('HOTELCONN');
    }

}
