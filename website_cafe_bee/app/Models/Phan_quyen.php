<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phan_quyen extends Model
{
    use HasFactory;
    protected $table = 'phan_quyens';

    protected $fillable = [
        'ten_quyen',
      
    ];
}