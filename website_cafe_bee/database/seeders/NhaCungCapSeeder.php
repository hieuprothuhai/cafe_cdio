<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nha_cung_caps')->delete();
        DB::table('nha_cung_caps')->truncate();
        DB::table('nha_cung_caps')->insert([
            [
                'ten_nha_cung_cap'  => 'NCC 1',
                'so_dien_thoai'     => '096743218',
                'dia_chi'           => 'Đà Nẵng',
                'tinh_trang'        =>  1,
            ],
            [
               'ten_nha_cung_cap' => 'NCC 2',
                'so_dien_thoai' => '096743777',
                'dia_chi' => 'Tam Kỳ',
                'tinh_trang'        =>  1,

            ],
        ]);
    }
}
