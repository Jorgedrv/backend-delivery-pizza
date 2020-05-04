<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

/**
 * Product Controller Class
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class ProductController extends Controller
{

    /**
     * Allows to obtain all products
     */
    public function getAll() {
        return Product::all();
    }

    /**
     * Allows to obtain a product by id
     * @param id product
     */
    public function getById($id) {
        return Product::find($id);
    }

    /**
     * Allows to create an product
     * @param request body
     */
    public function create(Request $request) {
        return Product::create($request->all());
    }

    /**
     * Allows to update an product
     * @param request body
     * @param id user
     */
    public function update(Request $request, $id) {
        $update = Product::findOrFail($id);
        $update->update($request->all());
        return $update;
    }

    /**
     * Allows to delete an product
     * @param request body
     */
    public function delete(Request $request, $id) {
        $delete = Product::findOrFail($id);
        $delete->delete();
        return 204;
    }

}
