<?php

namespace App\Http\Services\Regulation;
use App\Models\Regulation;
use Illuminate\Support\Facades\Session;

class RegulationService
{
    public function store($request)
    {
        try {
            $request->except('_token');
            Regulation::create($request->all());
            Session::flash('success', 'Thêm Quy Định Thành Công');
        } catch (\Exception $error) {
            Session::flash('error', $error->getMessage());
            return false;
        }
    }

    public function get()
    {
        return Regulation::orderBy('id')->paginate(10);
    }

    public function update($request, $regulation)
    {

        try {
            $regulation->fill($request->input());
            $regulation->save();
            Session::flash('success', 'Cập Nhập Thành Công');
        } catch (\Exception $err) {
            Session::flash('error', 'Có lỗi vui lòng thử lại');
            \Log::info($err->getMessage());
            return false;
        }
        return true;
    }

    public function delete($request)
    {
        $regulation = Regulation::where('id', $request->input('id'))->first();

        if ($regulation)
        {
            $regulation->delete();
            return true;
        }

        return false;
    }

}
