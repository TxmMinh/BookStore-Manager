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
            Client::create($request->all());
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
