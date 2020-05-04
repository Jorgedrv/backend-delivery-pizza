<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Order Model
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class Order extends Model
{

    public $table = "ORDERS";

    public $timestamps = false;

    protected $fillable = ['id', 'user_id', 'description', 'date'];

}
