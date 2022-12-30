<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class ReportDebtController extends Controller
{
    public function index()
    {
        return view('admin.report.inventory_report', [
            'title' => 'Báo Cáo Tồn',
            'inventory_report' => $this->regulationService->get(),
        ]);
    }
}
