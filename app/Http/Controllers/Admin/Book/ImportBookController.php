<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Book\BookRequest;
use App\Http\Services\book\ImportBookService;
use App\Models\book\ImportBook;
use Illuminate\Support\Facades\DB;

class ImportBookController extends Controller
{
    protected $importBookService;

    public function __construct(ImportBookService $importBookService)
    {
        $this->importBookService = $importBookService;
    }

    public function create()
    {
        return view('admin.import_book.add', [
            'title' => 'Nhập Sách',
            'books' => $this->importBookService->getBook(),
            'staffs' => DB::table('staffs')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $this->importBookService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.import_book.search', [
            'title' => 'Danh Sách Nhập Sách',
            'import_books' => $this->importBookService->getAll(),
        ]);
    }

}
