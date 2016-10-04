<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

use PDO;

class HomeController extends Controller
{
    public function index()
    {

        $pdo = new PDO('sqlite:/home/sergi/Code/laravelManualAuth/database/database.sqlite');
        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
        $query->execute();
        $row = $query->fetch();
        dd($row);


        $user = new \stdClass();
        $user->name = "Sergi";
        $user->sn1 = "Mauri";
        return view('home')
            ->withUser($user);


    }
}