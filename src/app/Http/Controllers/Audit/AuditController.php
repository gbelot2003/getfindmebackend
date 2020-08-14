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
            $audit =  DB::table('audits')->select('audits.id', 'audits.updated_at',
                 'audits.event', 'audits.auditable_type', 'audits.old_values', 'audits.new_values', 'audits.url',
                'audits.ip_address', 'audits.user_agent', 'audits.tags', 'users.name as name')
            ->leftJoin('users', 'audits.user_id', '=', 'users.id');

            return dataTables::of($audit)->make(true);
        }

        $title = 'Audit Logs';
        return View('audits.index', compact('title'));
    }


}
