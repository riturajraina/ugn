<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

class DbUgnContentMaster extends Model {

    protected $table = 'ugn_content_master';
    protected $primaryKey = 'pk_content_id';
    protected $fillable = [
        'page_link_text', 'display_order', 'fk_page_category_id', 'title', 'contentImages', 'paragraph', 'created_at', 
        'updated_at', 'fk_admin_user_id', 'status',
    ];

    public function __construct() {
        
    }

}
