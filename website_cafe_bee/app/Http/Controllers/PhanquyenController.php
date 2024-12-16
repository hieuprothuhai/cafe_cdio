<?php

namespace App\Http\Controllers;

use App\Models\Phan_quyen;
use Illuminate\Http\Request;

class PhanquyenController extends Controller
{
    public function getData()
    {
        $data = Phan_quyen::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(Request $request)
    {
        Phan_quyen::create([
            'ten_quyen' => $request->ten_quyen,


        ]);

        return response()->json([
            'status' => true,
            'message' => 'Đã tạo mới quyền ' . $request->ten_quyen . ' thành công.',
        ]);
    }
    public function update(Request $request)
    {
        Phan_quyen::where('id', $request->id)->update([
            'ten_quyen' => $request->ten_quyen,


        ]);
        return response()->json([
            'status' => true,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        Phan_quyen::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Đã xoá thành công'
        ]);
    }
}
