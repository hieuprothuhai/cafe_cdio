<?php

namespace App\Http\Controllers;

use App\Http\Requests\CapNhatNhanVienRequest;
use App\Http\Requests\ThemNhanVienRequest;
use App\Models\NhanVien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class NhanVienController extends Controller
{
    public function getData()
    {
        $data = NhanVien::get();

        return response()->json([
            'data' => $data
        ]);
    }
    public function store(ThemNhanVienRequest $request)
    {
        NhanVien::create([
            'ho_va_ten' => $request->ho_va_ten,
            'email' => $request->email,
            'so_dien_thoai' => $request->so_dien_thoai,
            'password' => $request->password,
            'dia_chi' => $request->dia_chi,
            'id_quyen' => $request->id_quyen,
            'tinh_trang' => $request->tinh_trang,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Đã tạo mới nhân viên ' . $request->ho_va_ten . ' thành công.',
        ]);
    }
    public function update(CapNhatNhanVienRequest $request)
    {
        NhanVien::where('id', $request->id)->update([
            'ho_va_ten'      => $request->ho_va_ten,
            'email'          => $request->email,
            'so_dien_thoai'  => $request->so_dien_thoai,
            'dia_chi'        => $request->dia_chi,
            'id_quyen'       => $request->id_quyen,
            'tinh_trang'     => $request->tinh_trang,

        ]);
        return response()->json([
            'status' => true,
            'message' => 'Đã cập nhật thành công'
        ]);
    }
    public function delete(Request $request)
    {
        NhanVien::where('id', $request->id)->delete();

        return response()->json([
            'status' => true,
            'message' => 'Đã xoá thành công'
        ]);
    }
    public function login(Request $request)
    {

            //Dựa $request->email và $request->password
            $user = NhanVien::where('email', $request->email)
                              ->where('password', $request->password)
                              ->first();
            if($user){
                return response()->json([
                    'status'    => 1,
                    'message'   => 'Đăng nhập thành công',
                    'key'       => $user->createToKen('key_admin')->plainTextToken,
                ]);
            }
            else{
                return response()->json([
                    'status'    => 0,
                    'message'   => 'Tài khoản hoặc mật khẩu không đúng'
                ]);
            }
        }
        public function checklogin(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if($user && $user instanceof \App\Models\NhanVien){
            return response()->json([
                'status'    => 1,
            ]);
        }

    }
    }
