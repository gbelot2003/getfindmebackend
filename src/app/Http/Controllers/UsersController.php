<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->$this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();

        return View('users.index', compact('users'));
    }
}
