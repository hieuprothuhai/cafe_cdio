<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class KhachHangController extends Controller
{
    public function store(Request $request)
    {
        KhachHang::create([
            'ho_va_ten'     => $request->ho_va_ten,
            'email'         => $request->email,
            'password'      => $request->password,
            'so_dien_thoai' => $request->so_dien_thoai,
            'ngay_sinh'     => $request->ngay_sinh,
        ]);
        return response()->json([
            'status'  => 1,
            'message' => 'Bạn Đăng Ký Tài Khoản  ' . $request->email . '  Thành Công'
        ]);
    }
    public function getData()
    {
        $data = KhachHang::get();
        return response()->json([
            'data' => $data
        ]);
    }
    public function update(Request $request)
    {
        KhachHang::where('id', $request->id)->update([
            'ho_va_ten'     => $request->ho_va_ten,
            'email'         => $request->email,
            'password'      => $request->password,
            'so_dien_thoai' => $request->so_dien_thoai,
            'ngay_sinh'     => $request->ngay_sinh,
        ]);
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Đã cập nhật khách hàng ' . $request->ten_khoa_hoc . ' thành công'
        ]);
    }
    public function destroy(Request $request)
    {
        KhachHang::where('id', $request->id)->delete();
        return response()->json([
            'status'    =>  1,
            'message'   =>  'Đã xóa khách hàng ' . $request->ten_khoa_hoc . ' thành công'
        ]);
    }
    public function login(Request $request)
    {
        $res = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => '6LcGsYwqAAAAAH1QBZe0LLmO9GegR0fHDOMnr3KT',
            'response' => $request->code
        ]);
        if($res->json()["success"] == true){
            //Dựa $request->email và $request->password
            $user = KhachHang::where('email', $request->email)
                              ->where('password', $request->password)
                              ->first();
            if($user){
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Đăng nhập thành công',
                    'key'       => $user->createToKen('key_khach_hang')->plainTextToken,
                ]);
            }
            else{
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Tài khoản hoặc mật khẩu không đúng'
                ]);
            }
        }else
        {
            return response()->json([
                'status'    => 0,
                'message'   => 'Mã recaptcha không đúng'
            ]);
        };
    }
    public function checklogin(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if($user && $user instanceof \App\Models\KhachHang){
            return response()->json([
                'status'    => 1,
            ]);
        }

    }
}
