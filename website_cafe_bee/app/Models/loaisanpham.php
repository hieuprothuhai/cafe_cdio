<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaisanpham extends Model
{
    use HasFactory;
    protected $table = 'loaisanphams';

    protected $fillable = [
        'ten_loai',
        'hinh_anh',
        'tinh_trang',
    ];
}
