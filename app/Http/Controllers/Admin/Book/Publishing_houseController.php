<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\book\Publishing_house;
use App\Http\Services\book\Publishing_houseService;

class Publishing_houseController extends Controller
{
    protected $publishing_houseService;

    public function __construct(Publishing_houseService $publishing_houseService)
    {
        $this->publishing_houseService = $publishing_houseService;
    }

    public function create()
    {
        return view('admin.book.publishing_house', [
            'title' => 'Thêm Nhà Xuất Bản Mới',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $this->publishing_houseService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.book.publishing_house_list', [
            'title' => 'Danh Sách Nhà Xuất Bản',
            'publishing_houses' => $this->publishing_houseService->get(),
        ]);
    }

}
