<?php

namespace App\Http\Services\bill;

use App\Models\bill\Buy;
use App\Models\book\Book;
use Illuminate\Support\Facades\Session;

class BuyService
{
    public function getBook()
    {
        return Book::with('categories')->get();
    }

    public function store($request)
    {
        try {
            $request->except('_token');
            Buy::create($request->all());
            Session::flash('success', 'Bán Sản Phẩm Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Buy::orderByDesc('id')->paginate(10);
    }

}
