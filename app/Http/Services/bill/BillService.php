<?php

namespace App\Http\Services\bill;

use App\Models\bill\Bill;
use Illuminate\Support\Facades\Session;

class BillService
{
    public function store($request)
    {
        try {
            $request->except('_token');
            Bill::create($request->all());
            Session::flash('success', 'Thêm Hóa Đơn Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Bill::orderByDesc('id')->paginate(10);
    }

}
