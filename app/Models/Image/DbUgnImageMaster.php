<?php

namespace App\Models\Image;

use Illuminate\Database\Eloquent\Model;

class DbUgnImageMaster extends Model {

    protected $table        = 'ugn_image_master';
    
    protected $primaryKey   = 'pk_image_id';
    
    protected $fillable     = [
        'image_name', 'created_at', 'updated_at', 'fk_admin_user_id',
    ];

    public function __construct() {
        
    }
}

