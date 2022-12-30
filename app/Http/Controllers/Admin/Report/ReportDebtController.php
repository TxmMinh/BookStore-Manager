<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bill\Bill;
use App\Models\people\Client;
use Illuminate\Support\Facades\DB;

class ReportDebtController extends Controller
{
    public function index()
    {
        return view('admin.report.debt_report', [
            'title' => 'Báo Cáo Công Nợ',
            'clients' => Client::orderBy('id')->paginate(10),
        ]);
    }
}
