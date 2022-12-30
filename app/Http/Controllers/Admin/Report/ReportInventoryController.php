<?php

namespace App\Http\Controllers\Admin\Report;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\book\Book;

class ReportInventoryController extends Controller
{
    public function index()
    {
        return view('admin.report.inventory_report', [
            'title' => 'Báo Cáo Tồn',
            'books' => Book::orderBy('id')->paginate(10),
        ]);
    }
}
