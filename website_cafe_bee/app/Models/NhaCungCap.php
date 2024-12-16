<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    use HasFactory;
    protected $table = 'nha_cung_caps';

    protected $fillable = [
        'ten_nha_cung_cap',
        'so_dien_thoai',
        'dia_chi',
        'tinh_trang',
    ];
}
