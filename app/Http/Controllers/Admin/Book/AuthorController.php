<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book\Author;
use App\Http\Services\book\AuthorService;

class AuthorController extends Controller
{
    protected $authorService;

    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function create()
    {
        return view('admin.book.author', [
            'title' => 'Thêm Tác Giả Mới',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $this->authorService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.book.author_list', [
            'title' => 'Danh Sách Tác Giả',
            'authors' => $this->authorService->get(),
        ]);
    }

}
