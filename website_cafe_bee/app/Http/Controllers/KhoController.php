<?php

namespace App\Http\Controllers;

use App\Models\Kho;
use Illuminate\Http\Request;

class KhoController extends Controller
{
<<<<<<< HEAD
    public function getData()
    {
        $data = Kho::get();
=======
    // public function getdata()
    // {
    //     $data   = thanh_vien::leftjoin('chuc_vus', 'chuc_vus.id', 'thanh_viens.id_chuc_vu')
    //         ->select('thanh_viens.*', 'chuc_vus.ten_chuc_vu')
    //         ->get(); // get là ra 1 danh sách
    //     return response()->json([
    //         'data'   =>   $data
    //     ]);
    // }
    public function getData()
    {
        $data = Kho::leftjoin('nha_cung_caps', 'nha_cung_caps.id', 'khos.nha_cung_cap')
            ->leftjoin('nhan_viens', 'nhan_viens.id', 'khos.nhan_vien')
            ->select('khos.*', 'nha_cung_caps.ten_nha_cung_cap', 'nhan_viens.ho_va_ten')
            ->get();
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa

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
<<<<<<< HEAD
=======
    public function doitrangthai(Request $request)
    {
        $nha_cung_cap = Kho::where('id', $request->id)->first();

        if($request->tinh_trang == 1) {
            $nha_cung_cap->tinh_trang = 0;
            $nha_cung_cap->save();
        } else {
            $nha_cung_cap->tinh_trang = 1;
            $nha_cung_cap->save();
        }
        return response()->json([
            'status'    =>  true,
            'message'   =>  'Bạn đã cập nhật Nhà cung cấp ' . $request->nha_cung_cap . ' thành công'
        ]);
    }
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
}
