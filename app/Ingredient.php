<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Ingredient Model
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class Ingredient extends Model
{

    public $table = "INGREDIENT";

    public $timestamps = false;

    protected $fillable = ['id', 'name'];
    
}
