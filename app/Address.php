<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Address Model
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class Address extends Model
{
    public $table = "ADDRESS";

    public $timestamps = false;

    protected $fillable = ['street', 'number', 'other', 'user_id'];

}
