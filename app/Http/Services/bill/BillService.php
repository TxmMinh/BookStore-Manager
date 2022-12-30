<?php

namespace App\Http\Services\bill;

use App\Models\bill\Bill;
use Illuminate\Support\Facades\Session;
use App\Models\people\Staff;
use App\Models\people\Client;

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

        $debt = $request->input('debt');
        $tong_no = Client::where('id', $request->input('customer_id'))->get()->value('tong_no');
        $update = (int)$debt + (int)$tong_no;
        Client::where('id', $request->input('customer_id'))->update(['tong_no' => $update]);
    }

    public function get()
    {
        return Bill::with(['staffs', 'clients'])->orderByDesc('id')->paginate(10);
    }

}
