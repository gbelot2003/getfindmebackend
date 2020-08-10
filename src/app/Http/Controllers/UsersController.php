<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        // Definimos permisos de ingreso
        $this->middleware('auth');
    }

    public function index()
    {
        //Definimos titulo de la sección;
        $title = 'Usuarios';

        $users = User::all();

        return View('users.index', compact('users', 'title'));
    }
}
