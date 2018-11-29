<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    protected $table = 'ugn_admin_user';
    protected $primaryKey = 'pk_admin_user_id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /* protected $fillable = [
      'name', 'email', 'password',
      ]; */

    protected $fillable = [
        'fname', 'lname', 'password', 'mobile_number', 'email', 'created_at', 'updated_at', 
        'fk_admin_role_id', 'status', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
