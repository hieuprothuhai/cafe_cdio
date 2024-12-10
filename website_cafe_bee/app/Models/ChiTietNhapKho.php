<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietNhapKho extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_nhap_khos';

    protected $fillable = [
        'nhap_kho',
        'san_pham',
        'so_luong',
        'loai',
        'don_gia',
        'thanh_toan',
        'ghi_chu',
        'tinh_trang',
    ];
}
