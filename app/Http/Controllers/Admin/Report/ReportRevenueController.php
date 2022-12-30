<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\bill\Bill;

class ReportRevenueController extends Controller
{
    public function index()
    {
        return view('admin.report.revenue_report', [
            'title' => 'Báo Cáo Doanh Thu',
            'bills' => Bill::orderBy('id')->paginate(10),
        ]);
    }
}
