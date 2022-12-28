<?php

namespace App\Http\Services\book;

use App\Models\book\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CategoryService
{
    public function store($request)
    {

        try {
            $request->except('_token');
            Category::create($request->all());

            Session::flash('success', 'Nhập Thể Loại Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Category::orderBy('id')->paginate(10);
    }
}
