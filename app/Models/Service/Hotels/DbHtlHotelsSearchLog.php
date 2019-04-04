<?php
namespace App\Models\Service\Hotels;

use Illuminate\Database\Eloquent\Model;

class DbHtlHotelsSearchLog extends Model {

    protected $table        = 'htl_hotels_search_log';
    
    protected $connection;
    
    protected $primaryKey   = 'pk_hotels_search_log_id';
    
    protected $fillable     = [
        'fk_hotels_url_id', 'fk_user_id', 'session_id', 'device_type', 
		'ip_address', 'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection = env('HOTELCONN');
    }

}
