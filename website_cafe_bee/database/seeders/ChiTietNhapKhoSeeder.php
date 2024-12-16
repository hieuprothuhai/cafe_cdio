<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiTietNhapKhoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chi_tiet_nhap_khos')->delete();
        DB::table('chi_tiet_nhap_khos')->truncate();
        DB::table('chi_tiet_nhap_khos')->insert([
            [
                'nhap_kho' => 'Kho 1',
                'san_pham' => 'CaFe Trung Nguyên',
                'so_luong' => '10',
                'loai' => '1',
                'don_gia' => '50.000',
                'thanh_toan' => '500.000',
                'ghi_chu' => 'Ngon',
                'tinh_trang'        =>  1,

            ],
            [
                'nhap_kho' => 'Kho 2',
                'san_pham' => 'CaFe Chồn',
                'so_luong' => '5',
                'loai' => '2',
                'don_gia' => '40.000',
                'thanh_toan' => '200.000',
                'ghi_chu' => 'Ngon',
                'tinh_trang'        =>  1,

            ],
        ]);
    }
}
