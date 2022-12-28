<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book\Category;
use App\Http\Services\book\CategoryService;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function create()
    {
        return view('admin.book.category', [
            'title' => 'Thêm Thể Loại Mới',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $this->categoryService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.book.category_list', [
            'title' => 'Danh Sách Thể Loại',
            'categories' => $this->categoryService->get(),
        ]);
    }

}
