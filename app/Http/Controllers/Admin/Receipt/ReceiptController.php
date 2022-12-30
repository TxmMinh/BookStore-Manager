<?php

namespace App\Http\Controllers\Admin\Receipt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\receipt\ReceiptService;
use App\Models\receipt\Receipt;
use Illuminate\Support\Facades\DB;

class ReceiptController extends Controller
{

    public function __construct(ReceiptService $receiptService)
    {
        $this->receiptService = $receiptService;
    }

    public function create()
    {
        return view('admin.receipt.add', [
            'title' => 'Phiếu Thu Tiền',
            'clients' => DB::table('clients')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $this->receiptService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.receipt.list', [
            'title' => 'Danh Sách Phiếu Thu Tiền',
            'receipts' => $this->receiptService->getAll(),
        ]);
    }
}
