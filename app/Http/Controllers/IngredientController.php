<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingredient;

/**
 * Ingredient Controller Class
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class IngredientController extends Controller
{

    /**
     * Allows to obtain all ingredients
     */
    public function getAll() {
        return Ingredient::all();
    }

    /**
     * Allows to obtain a ingredient by id
     * @param id ingredient
     */
    public function getById($id) {
        return Ingredient::find($id);
    }

    /**
     * Allows to create an ingredient
     * @param request body
     */
    public function create(Request $request) {
        return Ingredient::create($request->all());
    }

    /**
     * Allows to update an ingredient
     * @param request body
     * @param id user
     */
    public function update(Request $request, $id) {
        $update = Ingredient::findOrFail($id);
        $update->update($request->all());
        return $update;
    }

    /**
     * Allows to delete an ingredient
     * @param request body
     */
    public function delete(Request $request, $id) {
        $delete = Ingredient::findOrFail($id);
        $delete->delete();
        return 204;
    }

}
