<?php

namespace App\Http\Services\book;

use App\Models\book\Book;
use App\Models\book\Author;
use App\Models\book\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BookService
{
    public function store($request)
    {
        try {
            // $request->except('_token');
            Book::create([
                'name' => (string) $request->input('name'),
                'author_id' => (int) $request->input('author_id'),
                'category_id' => (int) $request->input('category_id'),
                'publishing_house_id' => (int) $request->input('publishing_house_id'),
                'number' => '0',
            ]);
            Session::flash('success', 'Nhập Đầu Sách Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }

        return true;
    }

    public function get()
    {
        return Book::with(['authors', 'categories', 'publishing_houses'])->orderByDesc('id')->paginate(10);
    }

}
