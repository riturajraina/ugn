<?php
 
namespace App\Models\Reffurl;

use Illuminate\Database\Eloquent\Model;

class DbUgnReffurlMaster extends Model {

    protected $table        = 'ugn_page_ref_urls';
    
    protected $primaryKey   = 'pk_ref_id';
    
    protected $fillable     = [
        'ref_url','created_at','updated_at',
    ];

    public function __construct() {
        
    }
}

