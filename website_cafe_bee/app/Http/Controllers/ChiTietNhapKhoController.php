<?php

namespace App\Http\Controllers;

use App\Models\ChiTietNhapKho;
use Illuminate\Http\Request;

class ChiTietNhapKhoController extends Controller
{
    public function getData()
    {
        $data = ChiTietNhapKho::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        ChiTietNhapKho::create([
            'nhap_kho' => $request->nhap_kho,
            'san_pham' => $request->san_pham,
            'so_luong' => $request->so_luong,
            'loai' => $request->loai,
            'don_gia' => $request->don_gia,
            'thanh_toan' => $request->thanh_toan,
            'ghi_chu' => $request->ghi_chu,
            'tinh_trang' => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => 1,
            'message' => 'Đã tạo mới chi tiết kho ' . $request->nhap_kho . ' thành công.',
        ]);
    }
    public function update(Request $request)
    {
        ChiTietNhapKho::where('id', $request->id)->update([
            'nhap_kho'      => $request->nhap_kho,
            'san_pham'  => $request->san_pham,
            'so_luong'        => $request->so_luong,
            'loai'      => $request->loai,
            'don_gia'  => $request->don_gia,
            'thanh_toan'        => $request->thanh_toan,
            'ghi_chu'        => $request->ghi_chu,
            'tinh_trang'     => $request->tinh_trang,
        ]);
        return response()->json([
            'status' => 1,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        ChiTietNhapKho::where('id', $request->id)->delete();

        return response()->json([
            'status' => 1,
            'message' => 'Đã xoá thành công'
        ]);
    }
    public function search(Request $request)
    {
        $noi_dung = '%' . $request->noi_dung . '%';

        $data = ChiTietNhapKho::where('nhap_kho', 'like', $noi_dung)
            ->orwhere('san_pham', 'like', $noi_dung)
            ->orwhere('so_luong', 'like', $noi_dung)
            ->get();

        return response()->json([
            'data' => $data
        ]);
    }
}
