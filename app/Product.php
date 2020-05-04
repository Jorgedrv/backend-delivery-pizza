<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Product Model
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class Product extends Model
{
    
    public $table = "PRODUCT";

    public $timestamps = false;

    protected $fillable = ['id', 'name', 'description', 'price', 'image', 'stock', 'creation_date'];

    protected $casts = [
        'price' => 'float',
        'stock' => 'int'
    ];

}
