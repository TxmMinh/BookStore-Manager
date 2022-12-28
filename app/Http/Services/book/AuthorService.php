<?php

namespace App\Http\Services\book;

use App\Models\book\Author;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class AuthorService
{
    public function store($request)
    {

        try {
            $request->except('_token');
            Author::create($request->all());
            Session::flash('success', 'Nhập Tác Giả Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Author::orderBy('id')->paginate(10);
    }
}
