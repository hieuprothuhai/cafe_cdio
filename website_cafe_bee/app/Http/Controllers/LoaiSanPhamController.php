<?php

namespace App\Http\Controllers;

use App\Models\loaisanpham;
use Illuminate\Http\Request;

class LoaiSanPhamController extends Controller
{
    public function store(Request $request)
    {
        loaisanpham::create([
            'ten_loai'     => $request->ten_loai,
            'hinh_anh'         => $request->hinh_anh,
            'tinh_trang'      => $request->tinh_trang,
        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Bạn thêm mới  ' . $request->ten_loai . '  Thành Công'
        ]);
    }
    public function getData()
    {
        $data = loaisanpham::get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function update(Request $request)
    {
        loaisanpham::where('id', $request->id)->update([
            'ten_loai'     => $request->ten_loai,
            'hinh_anh'         => $request->hinh_anh,
            'tinh_trang'      => $request->tinh_trang,

        ]);
        return response()->json([
            'status' => true,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        loaisanpham::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Đã xoá thành công'
        ]);
    }
    public function doitrangthai(Request $request)
    {
        $sanpham = loaisanpham::where('id', $request->id)->first();

        if($request->tinh_trang == 1) {
            $sanpham->tinh_trang = 0;
            $sanpham->save();
        } else {
            $sanpham->tinh_trang = 1;
            $sanpham->save();
        }
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Bạn đã cập nhật loại khóa ' . $request->ten_loai . ' thành công'
        ]);
    }
}
