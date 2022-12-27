<?php

namespace App\Http\Controllers\Admin\Bill;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\bill\BillService;
use App\Http\Services\People\ClientService;
use App\Models\bill\Bill;
use App\Models\people\Client;
use App\Models\book\Book;


class BillController extends Controller
{
    protected $billService;

    public function __construct(BillService $billService)
    {
        $this->billService = $billService;
    }

    public function create()
    {
        return view('admin.bill.add', [
            'title' => 'Bán Sản Phẩm',
            'clients' => Client::orderBy('id')->paginate(10),
            'books' => Book::orderBy('id')->paginate(10),
        ]);
    }

    public function store(Request $request)
    {
        $this->billService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.bill.list', [
            'title' => 'Danh Sách Hóa Đơn',
            'bills' => $this->billService->get(),
        ]);
    }
}
