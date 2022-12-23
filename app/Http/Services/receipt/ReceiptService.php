<?php

namespace App\Http\Services\receipt;

use App\Models\receipt\Receipt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ReceiptService
{

    public function store($request)
    {
        try {
            $request->except('_token');
            Receipt::create($request->all());

            Session::flash('success', 'Nhập Phiếu Thu Tiền Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function getAll()
    {
        return Receipt::orderByDesc('id')->paginate(10);
    }
}
