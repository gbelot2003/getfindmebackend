<?php

namespace App\Http\Controllers\Audit;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use OwenIt\Auditing\Models\Audit;
use Yajra\DataTables\DataTables;

class AuditController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:Administrator|Supervisor']);
    }

    public function index(Request $request)
    {
        if($request->ajax()) {
            $audit =  DB::table('audits')->select('id', 'updated_at', 'user_type',
                'user_type', 'event', 'auditable_type', 'old_values', 'new_values', 'url',
                'ip_address', 'user_agent', 'tags');

            return dataTables::of($audit)->make(true);
        }

        $title = 'Audit Logs';
        $rows = Audit::OrderBy('id', 'DESC')->paginate(20);
        //dd($rows);
        return View('audits.index', compact('title', 'rows'));
    }


}
