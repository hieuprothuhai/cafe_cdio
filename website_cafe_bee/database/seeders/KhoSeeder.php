<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khos')->delete();
        DB::table('khos')->truncate();
        DB::table('khos')->insert([
<<<<<<< HEAD
            [
                'nha_cung_cap' => 'NCC 1',
                'nhan_vien' => 'Nguyễn Văn C',
                'ma_nhap_kho' => 'MNK 123',
                'tong_tien' => '500.000',
                'ghi_chu' => 'Không có gì',
                'tinh_trang'        =>  1,

            ],
            [
                'nha_cung_cap' => 'NCC 2',
                'nhan_vien' => 'Nguyễn Văn D',
                'ma_nhap_kho' => 'MNK 124',
                'tong_tien' => '800.000',
                'ghi_chu' => 'Không có gì',
                'tinh_trang'        =>  1,

            ],
=======
            // [
            //     'nha_cung_cap' => 'NCC 1',
            //     'nhan_vien' => 'admin',
            //     'ma_nhap_kho' => 'MNK 123',
            //     'tong_tien' => '500.000',
            //     'ghi_chu' => 'Không có gì',
            //     'tinh_trang'        =>  1,

            // ],
            // [
            //     'nha_cung_cap' => 'NCC 2',
            //     'nhan_vien' => 'admin',
            //     'ma_nhap_kho' => 'MNK 124',
            //     'tong_tien' => '800.000',
            //     'ghi_chu' => 'Không có gì',
            //     'tinh_trang'        =>  1,

            // ],

>>>>>>> b2fd35f16cd8ee614f6bdb70320afffae71644aa
        ]);
    }
}
