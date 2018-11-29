<?php

namespace App\Models\Tab;

use Illuminate\Database\Eloquent\Model;

class DbUgnTabMaster extends Model {

    protected $table = 'ugn_tab_master';
    protected $primaryKey = 'pk_tab_id';
    protected $fillable = [
        'fk_content_id', 'title', 'paragraph', 'created_at', 'updated_at', 'fk_admin_user_id', 'status'
    ];

    public function __construct() {
        
    }

}
