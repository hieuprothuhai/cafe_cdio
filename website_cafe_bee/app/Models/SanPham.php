<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    use HasFactory;
    protected $table = 'san_phams';

    protected $fillable = [
        'id_san_pham',
        'ten_san_pham',
        'mo_ta_ngan',
        'mo_ta_chi_tiet',
        'gia_ban',
        'hinh_anh',
        'tinh_trang',
    ];
}
