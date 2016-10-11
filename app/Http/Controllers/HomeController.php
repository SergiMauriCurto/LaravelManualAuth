<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;+

use PDO;

class HomeController extends Controller

{
    public function setUserCookie()
    {
        $user = user::find(1);
        sercookie('user', json_encode($token));
    }

    public function getuser()
    {

            $id = $_COOKIE('user');
            return = User::where(["token" => $token])->first();

        
    }
    public function userIsAuthenticated()
    {

        $id = $_COOKIE('user');
        return isset($_COOKIE['user']) ? true : false;

    }
}