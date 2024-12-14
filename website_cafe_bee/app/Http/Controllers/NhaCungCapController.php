<?php

namespace App\Http\Controllers;

use App\Models\NhaCungCap;
use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    public function getData()
    {
        $data = NhaCungCap::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        NhaCungCap::create([
            'ten_nha_cung_cap' => $request->ten_nha_cung_cap,
            'so_dien_thoai' => $request->so_dien_thoai,
            'dia_chi' => $request->dia_chi,
            'tinh_trang' => $request->tinh_trang,
        ]);

        return response()->json([
            'status' => 1,
            'message' => 'Đã tạo mới nhà cung cấp ' . $request->ten_nha_cung_cap . ' thành công.',
        ]);
    }
    public function update(Request $request)
    {
        NhaCungCap::where('id', $request->id)->update([
            'ten_nha_cung_cap'      => $request->ten_nha_cung_cap,
            'so_dien_thoai'  => $request->so_dien_thoai,
            'dia_chi'        => $request->dia_chi,
            'tinh_trang'     => $request->tinh_trang,

        ]);
        return response()->json([
            'status' => 1,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        NhaCungCap::where('id', $request->id)->delete();

        return response()->json([
            'status' => 1,
            'message' => 'Đã xoá thành công'
        ]);
    }
    public function search(Request $request)
    {
        $noi_dung = '%' . $request->noi_dung . '%';

        $data = NhaCungCap::where('ten_nha_cung_cap', 'like', $noi_dung)
            ->orwhere('so_dien_thoai', 'like', $noi_dung)
            ->orwhere('dia_chi', 'like', $noi_dung)
            ->get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function doitrangthai(Request $request)
    {
        $cungcap = NhaCungCap::where('id', $request->id)->first();

        if($request->tinh_trang == 1) {
            $cungcap->tinh_trang = 0;
            $cungcap->save();
        } else {
            $cungcap->tinh_trang = 1;
            $cungcap->save();
        }
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Bạn đã cập nhật loại khóa ' . $request->ten_nha_cung_cap . ' thành công'
        ]);
    }
}
