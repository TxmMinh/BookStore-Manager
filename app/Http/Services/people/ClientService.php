<?php

namespace App\Http\Services\people;

use App\Models\people\Client;
use Illuminate\Support\Facades\Session;

class ClientService
{
    public function store($request)
    {
        try {
            $request->except('_token');
            Client::create([
                'name' => (string) $request->input('name'),
                'phone_number' => (string) $request->input('phone_number'),
                'email' => (string) $request->input('email'),
                'address' => (string) $request->input('address'),
                'tong_no' => '0',
            ]);
            Session::flash('success', 'Thêm Khách Hàng Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Client::orderByDesc('id')->paginate(10);
    }

}
