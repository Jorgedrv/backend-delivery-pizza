<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderProduct;
use Illuminate\Support\Facades\DB;

/**
 * Order Product Controller Class
 * 
 * @version 1.0.0 - 27 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 27 Apr 2020
 */
class OrderProductController extends Controller
{

    /**
     * Allows to obtain a order product by id
     * @param id order product
     */
    public function getById($id) {
        $orders = DB::table('ORDER_PRODUCT')
            ->leftJoin('ORDERS', 'ORDERS.id', '=', 'ORDER_PRODUCT.order_id')
            ->leftJoin('PRODUCT', 'PRODUCT.id', '=', 'ORDER_PRODUCT.product_id')
            ->where('order_id', $id)
            ->select('ORDER_PRODUCT.id',
                     'ORDER_PRODUCT.order_id',
                     'ORDER_PRODUCT.product_id',
                     'PRODUCT.name', 
                     'PRODUCT.description', 
                     'ORDER_PRODUCT.quantity', 
                     'ORDER_PRODUCT.subtotal',
                     'PRODUCT.price')
            ->get();
        return $orders;
    }

    /**
     * Allows to create an order product
     * @param request body
     */
    public function create(Request $request) {
        return OrderProduct::create($request->all());
    }

    /**
     * Allows to update an order product
     * @param request body
     * @param id user
     */
    public function update(Request $request, $id) {
        $update = OrderProduct::findOrFail($id);
        $update->update($request->all());
        return $update;
    }

    /**
     * Allows to delete an order product
     * @param request body
     */
    public function delete(Request $request, $id) {
        $delete = OrderProduct::findOrFail($id);
        $delete->delete();
        return 204;
    } 

}
