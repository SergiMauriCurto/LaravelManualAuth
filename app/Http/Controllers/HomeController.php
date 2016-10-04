<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use App\Http\Requests;

use PDO;

class HomeController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //Passos controlador bàsic (glue/cola del model i vista):
        // 1) Aconseguir informació de l'usuari de la base de dades
        // 2) Mostrar vista home passant info del usuari


            $user = User::find(1);

            return view('home')
                ->withUser($user);

    }
}