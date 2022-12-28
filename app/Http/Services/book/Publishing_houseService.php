<?php

namespace App\Http\Services\book;

use App\Models\book\Publishing_house;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class Publishing_houseService
{
    public function store($request)
    {

        try {
            $request->except('_token');
            Publishing_house::create($request->all());

            Session::flash('success', 'Nhập Nhà Xuất Bản Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Publishing_house::orderBy('id')->paginate(10);
    }
}
