<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    

    function ObtenerDatos(){

        $user = User::find(1);

        // var_dump($user);
        return view('welcome',['user' => $user]);
    }
}
