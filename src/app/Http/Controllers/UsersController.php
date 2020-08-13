<?php

namespace App\Http\Controllers;

use App\Roles;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Yajra\DataTables\DataTables as dataTables;
use Acme\Http\Controllers\UserDataTableController;

class UsersController extends Controller
{

    public function __construct()
    {
        // Definimos permisos de ingreso
        $this->middleware('auth');
        $this->middleware(['role:Administrator|Supervisor']);
    }

    public function index(Request $request)
    {

        // Desplegamos lista de Datatable
        if($request->ajax()){
            $table = new UserDataTableController();
            return $table->UsersDataTable();
        }

        //Definimos titulo de la sección;
        $title = 'Usuarios';

        return View('users.index', compact('title'));
    }


    public function edit(User $user)
    {
        $title = $user->name;
        $roles = Roles::all();
        return view('users.edit', compact('user', 'title', 'roles'));
    }

    public function update(User $user, Request $request)
    {

    }

}
