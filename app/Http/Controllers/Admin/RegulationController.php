<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\RegulationRequest;
use App\Models\Regulation;
use App\Http\Services\Regulation\RegulationService;

class RegulationController extends Controller
{
    protected $RegulationService;

    public function __construct(RegulationService $regulationService)
    {
        $this->regulationService = $regulationService;
    }

    public function create()
    {
        return view('admin.regulation.add', [
            'title' => 'Thêm Khách Hàng Mới',
        ]);
    }

    public function store(RegulationRequest $request)
    {
        $this->regulationService->store($request);
        return redirect()->back();
    }

    public function index()
    {
        return view('admin.regulation.list', [
            'title' => 'Danh Sách Quy Định',
            'regulations' => $this->regulationService->get(),
        ]);
    }

    public function show(Regulation $regulation)
    {
        return view('admin.regulation.edit', [
            'title' => 'Chỉnh Sửa Quy Định',
            'regulation' => $regulation,
        ]);
    }

    public function update(RegulationRequest $request, Regulation $regulation)
    {
        $result = $this->regulationService->update($request, $regulation);
        if ($result) {
            return redirect('/admin/regulation/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request)
    {
        $result = $this->regulationService->delete($request);
        if ($result) {
            return response()->json([
                'error' => false,
                'message' => 'Xóa thành công quy định',
            ]);
        }

        return response()->json(['error' => true]);
    }
}
