<?php
namespace App\Models\Service\Cabs;

use Illuminate\Database\Eloquent\Model;

class DbCbCabsSearchLog extends Model {

    protected $table        =   'cb_cabs_search_log';
    
    protected $connection;
    
    protected $primaryKey   =   'pk_cab_search_id';
    
    protected $fillable     =   [
        'fk_address_id_start', 'fk_address_id_end', 'fk_user_id',
	'fk_cabs_url_id', 'session_id', 'device_type', 
	'ip_address', 'created_at', 'updated_at',
    ];

    public function __construct() {
        $this->connection   =   env('CABSCONN');
    }
}
