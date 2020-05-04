<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * User Model
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class User extends Model
{
    public $table = "USER";

    public $timestamps = false;

    protected $fillable = ['email', 'password', 'first_name', 'last_name'];

}
