<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * OrderProduct Model
 * 
 * @version 1.0.0 - 27 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 27 Apr 2020
 */
class OrderProduct extends Model
{
    
    public $table = "ORDER_PRODUCT";

    public $timestamps = false;

    protected $fillable = ['id', 'order_id', 'product_id', 'quantity', 'subtotal', 'price'];

}
