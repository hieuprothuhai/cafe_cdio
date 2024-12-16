<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kho extends Model
{
    use HasFactory;
    protected $table = 'khos';

    protected $fillable = [
        'nha_cung_cap',
        'nhan_vien',
        'ma_nhap_kho',
        'tong_tien',
        'ghi_chu',
        'tinh_trang',
    ];
}
