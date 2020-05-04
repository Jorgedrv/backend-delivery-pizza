<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Address;

/**
 * Address Controller Class
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class AddressController extends Controller
{

    /**
     * Allows to obtain all addresses
     */
    public function getAll() {
        return Address::all();
    }

    /**
     * Allows to obtain a address by id
     * @param id address
     */
    public function getById($id) {
        return Address::find($id);
    }

    /**
     * Allows to create a address
     * @param request body
     */
    public function create(Request $request) {
        return Address::create($request->all());
    }

    /**
     * Allows to update a address
     * @param request body
     * @param id user
     */
    public function update(Request $request, $id) {
        $update = Address::findOrFail($id);
        $update->update($request->all());
        return $update;
    }

    /**
     * Allows to delete a address
     * @param request body
     */
    public function delete(Request $request, $id) {
        $delete = Address::findOrFail($id);
        $delete->delete();
        return 204;
    }

}
