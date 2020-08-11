<?php

namespace App\Http\Controllers\Audit;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuditController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware(['role:Administrator|Supervisor']);
    }

    public function index()
    {
        $title = 'Audit Logs';
        return View('audits.index', compact('title'));
    }


}
