<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return response()
        ->veiw("user,login", [
            "title" => "login"
        ]);
    }

    public function doLogin(){
        
    }

    public function doLogout(){

    }
}
