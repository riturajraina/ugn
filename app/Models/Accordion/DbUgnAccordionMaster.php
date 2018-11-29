<?php

namespace App\Models\Accordion;

use Illuminate\Database\Eloquent\Model;

class DbUgnAccordionMaster extends Model {

    protected $table = 'ugn_accordion_master';
    protected $primaryKey = 'pk_accordion_id';
    protected $fillable = [
        'fk_tab_id', 'title', 'para_text', 'created_at', 'updated_at', 'fk_admin_user_id', 'status'
    ];

    public function __construct() {
        
    }

}
