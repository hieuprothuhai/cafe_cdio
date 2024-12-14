<?php

namespace App\Http\Controllers;

use App\Models\SanPham;
use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function store(Request $request)
    {
        SanPham::create([
            'id_san_pham' => $request->id_san_pham,
            'ten_san_pham' => $request->ten_san_pham,
            'mo_ta_ngan' => $request->mo_ta_ngan,
            'mo_ta_chi_tiet' => $request->mo_ta_chi_tiet,
            'gia_ban' => $request->gia_ban,
            'hinh_anh' => $request->hinh_anh,
            'tinh_trang' => $request->tinh_trang,
        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Bạn thêm mới  ' . $request->ten_san_pham . '  Thành Công'
        ]);
    }
    
    public function getData()
    {
        $data = SanPham::leftjoin('loaisanphams', 'loaisanphams.id', 'san_phams.id_san_pham')
            ->select('san_phams.*', 'loaisanphams.ten_loai')
            ->get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function update(Request $request)
    {
        SanPham::where('id', $request->id)->update([
            'id_san_pham' => $request->id_san_pham,
            'ten_san_pham' => $request->ten_san_pham,
            'mo_ta_ngan' => $request->mo_ta_ngan,
            'mo_ta_chi_tiet' => $request->mo_ta_chi_tiet,
            'gia_ban' => $request->gia_ban,
            'hinh_anh' => $request->hinh_anh,
            'tinh_trang' => $request->tinh_trang,

        ]);
        return response()->json([
            'status' => true,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        SanPham::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Đã xoá thành công'
        ]);
    }
    public function doitrangthai(Request $request)
    {
        $sanpham = SanPham::where('id', $request->id)->first();

        if ($request->tinh_trang == 0) {
            $sanpham->tinh_trang = 1;
            $sanpham->save();
        } else {
            $sanpham->tinh_trang = 0;
            $sanpham->save();
        }
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Bạn đã cập nhật loại khóa ' . $request->ten_san_pham . ' thành công'
        ]);
    }
    public function dataList()
    {
        $data = SanPham::get();
        return response()->json([
            'data'    =>  $data,
        ]);
    }
    public function dataopen($id)
    {
        $data = SanPham::where('id', $id)->select('ten_san_pham', 'hinh_anh', 'gia_ban', 'mo_ta_chi_tiet')->first();
        return response()->json([
            'data'    =>  $data,
        ]);
    }
    public function tim(Request $request)
    {
        $noi_dung = '%' . $request->noi_dung . '%';

        $data = SanPham::where('ten_san_pham', 'like', $noi_dung)
            ->orwhere('id_san_pham', 'like', $noi_dung)
            ->get();

        return response()->json([
            'data' => $data
        ]);
    }
}
