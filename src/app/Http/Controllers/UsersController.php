<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables as dataTables;

class UsersController extends Controller
{

    public function __construct()
    {
        // Definimos permisos de ingreso
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        if($request->ajax()){
            return $this->UsersDataTable();
        }
        //Definimos titulo de la sección;
        $title = 'Usuarios';

        return View('users.index', compact('title'));
    }

    /**
     * @return mixed
     */
    private function UsersDataTable()
    {
        $build = DB::table('users')->select('id', 'name', 'email', 'phonefield', 'updated_at');

        return dataTables::of($build)
            ->addColumn('actions', function ($name) {
                return '
            <a class="" href="users/' . $name->id . '"><i class="fas fa-eye"></i> Ver</a> | 
            <a class="" href="users/' . $name->id . '/edit"><i class="fas fa-edit"></i> Editar</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
