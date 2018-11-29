<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Model;

class DbUgnPageCategoryMaster extends Model {

    protected $table        = 'ugn_page_category_master';
    
    protected $primaryKey   = 'pk_page_category_id';
    
    protected $fillable     = [
        'category_name', 'created_at', 'updated_at', 'fk_admin_user_id', 
        'status', 'display_order',
    ];

    public function __construct() {
        
    }
}

