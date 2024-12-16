<?php

use App\Http\Controllers\ChiTietNhapKhoController;
<<<<<<< HEAD
=======
use App\Http\Controllers\DichVuController;
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\KhoController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\PhanquyenController;
use App\Http\Controllers\SanPhamController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/admin/nhan-vien/data', [NhanVienController::class, 'getData']);
Route::post('/admin/nhan-vien/create', [NhanVienController::class, 'store']);
Route::post('/admin/nhan-vien/update', [NhanVienController::class, 'update']);
Route::post('/admin/nhan-vien/delete', [NhanVienController::class, 'delete']);
Route::post('/admin/dang-nhap', [NhanVienController::class, 'login']);
Route::get('/admin/check-login', [NhanVienController::class, 'checklogin']);


Route::get('/admin/khach-hang/data', [KhachHangController::class, 'getData']);
Route::post('/khach-hang/dang-ky', [KhachHangController::class, 'store']);
Route::post('/admin/khach-hang/update', [KhachHangController::class, 'update']);
Route::post('/admin/khach-hang/delete', [KhachHangController::class, 'destroy']);
Route::post('/khach-hang/dang-nhap', [KhachHangController::class, 'login']);
Route::get('/khach-hang/check-login', [KhachHangController::class, 'checklogin']);


Route::get('/admin/loai-sp/data', [LoaiSanPhamController::class, 'getData']);
Route::post('/admin/loai-sp/create', [LoaiSanPhamController::class, 'store']);
Route::post('/admin/loai-sp/update', [LoaiSanPhamController::class, 'update']);
Route::post('/admin/loai-sp/delete', [LoaiSanPhamController::class, 'delete']);
Route::post('/admin/loai/doi-trang-thai', [LoaiSanPhamController::class, 'doitrangthai']);



Route::get('/admin/san-pham/data', [SanPhamController::class, 'getData']);
Route::post('/admin/san-pham/create', [SanPhamController::class, 'store']);
Route::post('/admin/san-pham/update', [SanPhamController::class, 'update']);
Route::post('/admin/san-pham/delete', [SanPhamController::class, 'delete']);
Route::post('/admin/san-pham/doi-trang-thai', [SanPhamController::class, 'doitrangthai']);
Route::get('/admin/san-pham/dataopen/{id}', [SanPhamController::class, 'dataopen']);
Route::get('/admin/san-pham/dataopen', [SanPhamController::class, 'dataList']);
Route::post('/admin/san-pham/tim-kiem', [SanPhamController::class, 'tim']);

<<<<<<< HEAD
=======

>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
Route::get('/admin/nha-cung-cap/data', [NhaCungCapController::class, 'getData']);
Route::post('/admin/nha-cung-cap/create', [NhaCungCapController::class, 'store']);
Route::post('/admin/nha-cung-cap/update', [NhaCungCapController::class, 'update']);
Route::post('/admin/nha-cung-cap/delete', [NhaCungCapController::class, 'delete']);
Route::post('/admin/nha-cung-cap/tim-kiem', [NhaCungCapController::class, 'search']);
<<<<<<< HEAD
// Route::post('/admin/nha-cung-cap/doi-trang-thai', [NhaCungCapController::class, 'doitrangthai']);
=======
Route::post('/admin/nha-cung-cap/doi-trang-thai', [NhaCungCapController::class, 'doitrangthai']);
>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa

Route::get('/admin/chitiet-nhapkho/data', [ChiTietNhapKhoController::class, 'getData']);
Route::post('/admin/chitiet-nhapkho/create', [ChiTietNhapKhoController::class, 'store']);
Route::post('/admin/chitiet-nhapkho/update', [ChiTietNhapKhoController::class, 'update']);
Route::post('/admin/chitiet-nhapkho/delete', [ChiTietNhapKhoController::class, 'delete']);
Route::post('/admin/chitiet-nhapkho/tim-kiem', [ChiTietNhapKhoController::class, 'search']);
<<<<<<< HEAD
=======
Route::post('/admin/chitiet-nhapkho/doi-trang-thai', [ChiTietNhapKhoController::class, 'doitrangthai']);

>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa

Route::get('/admin/kho/data', [KhoController::class, 'getData']);
Route::post('/admin/kho/create', [KhoController::class, 'store']);
Route::post('/admin/kho/update', [KhoController::class, 'update']);
Route::post('/admin/kho/delete', [KhoController::class, 'delete']);
Route::post('/admin/kho/tim-kiem', [KhoController::class, 'search']);
<<<<<<< HEAD
=======
Route::post('/admin/kho/doi-trang-thai', [KhoController::class, 'doitrangthai']);

>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa

Route::get('/admin/phan-quyen/data', [PhanquyenController::class, 'getData']);
Route::post('/admin/phan-quyen/create', [PhanquyenController::class, 'store']);
Route::post('/admin/phan-quyen/update', [PhanquyenController::class, 'update']);
Route::post('/admin/phan-quyen/delete', [PhanquyenController::class, 'delete']);


<<<<<<< HEAD
=======
Route::post('/admin/dich-vu/getdata', [DichVuController::class, 'getdatatheoloaisp']);


>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
