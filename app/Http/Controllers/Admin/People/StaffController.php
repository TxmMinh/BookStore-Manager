<?php

namespace App\Http\Controllers\Admin\People;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\people\Staff;
use App\Http\Services\people\StaffService;

class StaffController extends Controller
{
    protected $staffService;

    public function __construct(StaffService $staffService)
    {
        $this->staffService = $staffService;
    }

    public function create()
    {
        return view('admin.people.staff.add', [
            'title' => 'Thêm Danh Nhân Viên Mới',
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'gender' => 'required',
            'phone_number' => 'required'
        ]);

        $this->staffService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.people.staff.list', [
            'title' => 'Danh Sách Nhân Viên',
            'title_form' => 'Danh Sách Nhân Viên',
            'staffs' => $this->staffService->get(),
        ]);
    }

}
