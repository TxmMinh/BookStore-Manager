<?php

namespace App\Http\Services\receipt;

use App\Models\receipt\Receipt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\people\Client;

class ReceiptService
{

    public function store($request)
    {
        try {
            $request->except('_token');

            $customer_id = $request->input('customer_id');
            $debt = Client::where('id', $customer_id)->get()->value('tong_no');
            if ($debt >= $request->input('money'))
            {
                Receipt::create($request->all());
                Session::flash('success', 'Nhập Phiếu Thu Tiền Thành Công');
            }
            else {
                Session::flash('err_phieuthu', 'Số tiền thu phải nhỏ hơn tiền khách nợ');
            }

        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }

        $money = $request->input('money');
        $tong_no = Client::where('id', $request->input('customer_id'))->get()->value('tong_no');
        $update = (int)$tong_no - (int)$money;
        Client::where('id', $request->input('customer_id'))->update(['tong_no' => $update]);
    }

    public function getAll()
    {
        return Receipt::orderByDesc('id')->paginate(10);
    }
}
