<?php

namespace Acme\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables as dataTables;

class UserDataTableController {

    /**
     * @return mixed
     */
    public function UsersDataTable()
    {
        $build = DB::table('users')
            ->select('id', 'name', 'email', 'phonefield', 'updated_at');

        return dataTables::of($build)
            ->addColumn('actions', function ($name) {
                return '
            <a class="" href="users/' . $name->id . '"><i class="fas fa-eye"></i> Watch</a> | 
            <a class="" href="users/' . $name->id . '/edit"><i class="fas fa-edit"></i> Edit</a>';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }

}