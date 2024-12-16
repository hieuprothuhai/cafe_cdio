<?php

namespace App\Http\Controllers;

use App\Models\Kho;
use Illuminate\Http\Request;

class KhoController extends Controller
{
    public function getData()
    {
        $data = Kho::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        Kho::create([
            'nha_cung_cap' => $request->nha_cung_cap,
            'nhan_vien' => $request->nhan_vien,
            'ma_nhap_kho' => $request->ma_nhap_kho,
            'tong_tien' => $request->tong_tien,
            'ghi_chu' => $request->ghi_chu,
            'tinh_trang' => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => 1,
            'message' => 'Đã tạo mới Kho ' . $request->nha_cung_cap . ' thành công.',
        ]);
    }
    public function update(Request $request)
    {
        Kho::where('id', $request->id)->update([
            'nha_cung_cap'      => $request->nha_cung_cap,
            'nhan_vien'  => $request->nhan_vien,
            'ma_nhap_kho'        => $request->ma_nhap_kho,
            'tong_tien'      => $request->tong_tien,
            'ghi_chu'  => $request->ghi_chu,
            'tinh_trang'     => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => 1,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        Kho::where('id', $request->id)->delete();

        return response()->json([
            'status' => 1,
            'message' => 'Đã xoá thành công'
        ]);
    }
    public function search(Request $request)
    {
        $noi_dung = '%' . $request->noi_dung . '%';

        $data = Kho::where('nha_cung_cap', 'like', $noi_dung)
            ->orwhere('nhan_vien', 'like', $noi_dung)
            ->orwhere('ma_nhap_kho', 'like', $noi_dung)
            ->get();

        return response()->json([
            'data' => $data
        ]);
    }
}
