<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $name)
    {
        // Contoh pengambilan data user dari database berdasarkan $id
        $id_user = $id;
        $name_user = $name;

        return view('user.show', compact('id_user', 'name_user'));
    }
}
