<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductIngredient;

/**
 * Product Ingredient Controller Class
 * 
 * @version 1.0.0 - 27 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 27 Apr 2020
 */
class ProductIngredientController extends Controller
{
    
    /**
     * Allows to obtain a product ingredient by id
     * @param id order product
     */
    public function getById($id) {
        return ProductIngredient::find($id);
    }

    /**
     * Allows to create a product ingredient
     * @param request body
     */
    public function create(Request $request) {
        return ProductIngredient::create($request->all());
    }

    /**
     * Allows to delete a product ingredient
     * @param request body
     */
    public function delete(Request $request, $id) {
        $delete = ProductIngredient::findOrFail($id);
        $delete->delete();
        return 204;
    } 

}
