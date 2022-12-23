<?php

namespace App\Http\Services\people;

use App\Models\people\Staff;
use Illuminate\Support\Facades\Session;

class StaffService
{
    public function store($request)
    {
        try {
            $request->except('_token');
            Staff::create($request->all());
            Session::flash('success', 'Thêm Nhân Viên Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Staff::orderBy('id')->paginate(10);
    }

}
