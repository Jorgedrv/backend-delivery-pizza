<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

/**
 * Order Controller Class
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class OrderController extends Controller
{
    
    /**
     * Allows to obtain all orders
     */
    public function getAll() {
        return Order::all();
    }

    /**
     * Allows to obtain a order by id
     * @param id order
     */
    public function getById($id) {
        return Order::find($id);
    }

    /**
     * Allows to create an order
     * @param request body
     */
    public function create(Request $request) {
        return Order::create($request->all());
    }

    /**
     * Allows to update an order
     * @param request body
     * @param id user
     */
    public function update(Request $request, $id) {
        $update = Order::findOrFail($id);
        $update->update($request->all());
        return $update;
    }

    /**
     * Allows to delete an order
     * @param request body
     */
    public function delete(Request $request, $id) {
        $delete = Order::findOrFail($id);
        $delete->delete();
        return 204;
    } 

}
