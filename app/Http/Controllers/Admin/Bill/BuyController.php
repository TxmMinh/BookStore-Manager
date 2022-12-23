<?php

namespace App\Http\Controllers\Admin\Bill;

use App\Models\bill\Buy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\bill\BuyService;

class BuyController extends Controller
{
    protected $buyService;

    public function __construct(BuyService $buyService)
    {
        $this->buyService = $buyService;
    }

    public function create()
    {
        return view('admin.bill.buy', [
            'title' => 'Bán Sản Phẩm',
            'books' => $this->buyService->getBook(),
        ]);
    }

    public function store(Request $request)
    {
        $this->buyService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.bill.buy_list', [
            'title' => 'Danh Sách Sách',
            'buys' => $this->buyService->get(),
        ]);
    }

}
