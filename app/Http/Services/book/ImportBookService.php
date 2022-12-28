<?php

namespace App\Http\Services\book;

use App\Models\book\ImportBook;
use App\Models\book\Book;
use App\Models\people\Staff;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ImportBookService
{
    public function getBook()
    {
        return Book::with(['authors', 'categories'])->get();
    }

    public function store($request)
    {

        try {
            ImportBook::create($request->all());
            Session::flash('success', 'Nhập Sách Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }

        $extra_number = $request->input('extra_number');
        $number = Book::where('id', $request->input('book_code'))->get()->value('number');
        $update = (int)$extra_number + (int)$number;
        Book::where('id', $request->input('book_code'))->update(['number' => $update]);

    }

    public function getAll()
    {
        return ImportBook::orderByDesc('id')->paginate(10);
    }
}
