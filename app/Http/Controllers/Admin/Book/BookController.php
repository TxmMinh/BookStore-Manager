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
        return view('admin.book.book_add', [
            'title' => 'Thêm Đầu Sách Mới',
            'authors' => DB::table('authors')->get(),
            'categories' => DB::table('categories')->get(),
            'publishing_houses' => DB::table('publishing_houses')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $this->bookService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.book.book_list', [
            'title' => 'Danh Sách Đầu Sách',
            'books' => $this->bookService->get(),
        ]);
    }
}
