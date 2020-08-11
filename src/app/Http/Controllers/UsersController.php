<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables as dataTables;
use Acme\Http\Controllers\UserDataTableController;

class UsersController extends Controller
{

    public function __construct()
    {
        // Definimos permisos de ingreso
        $this->middleware('auth');
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


}
