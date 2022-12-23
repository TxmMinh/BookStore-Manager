<?php

namespace App\Http\Controllers\Admin\Book;

use App\Models\book\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Services\book\BookService;

class BookController extends Controller
{
    protected $bookService;

    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function create()
    {
        return view('admin.book.new', [
            'title' => 'Thêm Sách Mới',
        ]);
    }

    public function store(Request $request)
    {
        $this->bookService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.book.list', [
            'title' => 'Danh Sách Sách',
            'title_form' => 'Danh Sách Sách',
            'books' => $this->bookService->get(),
        ]);
    }


}
