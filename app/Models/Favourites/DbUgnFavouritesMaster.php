<?php

namespace App\Models\Favourites;

use Illuminate\Database\Eloquent\Model;

class DbUgnFavouritesMaster extends Model {

    protected $table = 'ugn_favourites_master';
    protected $primaryKey = 'pk_favourites_master';
    protected $fillable = [
        'fk_tab_id', 'fk_accordion_id', 'fk_content_id', 'created_at', 'updated_at', 'fk_admin_user_id', 'status'
    ];

    public function __construct() {
        
    }

}
