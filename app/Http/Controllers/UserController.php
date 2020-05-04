<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

/**
 * User Controller Class
 * 
 * @version 1.0.0 - 26 Apr 2020
 * @author  Jorge Romero - Jorgeddrv@gmail.com
 * @since   1.0.0 - 26 Apr 2020
 */
class UserController extends Controller
{

    /**
     * Allows to obtain all users
     */
    public function getAll() {
        return User::all();
    }

    /**
     * Allows to obtain a user by id
     * @param id user
     */
    public function getById($id) {
        return User::find($id);
    }

    /**
     * Allows to create a user
     * @param request body
     */
    public function create(Request $request) {
        return User::create($request->all());
    }

    /**
     * Allows to update a user
     * @param request body
     * @param id user
     */
    public function update(Request $request, $id) {
        $update = User::findOrFail($id);
        $update->update($request->all());
        return $update;
    }

    /**
     * Allows to delete a user
     * @param request body
     */
    public function delete(Request $request, $id) {
        $delete = User::findOrFail($id);
        $delete->delete();
        return 204;
    }

}
