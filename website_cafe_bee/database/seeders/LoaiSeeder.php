<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('loaisanphams')->delete();

        DB::table('loaisanphams')->truncate();

        DB::table('loaisanphams')->insert([
            [
                'ten_loai'          =>  'Bánh',
                'hinh_anh'          =>  'https://png.pngtree.com/png-clipart/20210801/ourlarge/pngtree-cute-cake-icon-png-image_3747493.jpg',
                'tinh_trang'        =>  1,
            ],
            [
                'ten_loai'          =>  'Nước Uống',
                'hinh_anh'          =>  'https://img.lovepik.com/free-png/20210923/lovepik-vector-summer-juice-drink-png-image_401201928_wh1200.png',
                'tinh_trang'        =>  1,
            ],
        ]);
    }
}
