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
class ProductIngredient extends Model
{
    
    public $table = "PRODUCT_INGREDIENT";

    public $timestamps = false;

    protected $fillable = ['id', 'product_id', 'ingredient_id'];

}
