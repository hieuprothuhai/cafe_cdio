<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('san_phams')->delete();

        DB::table('san_phams')->truncate();

        DB::table('san_phams')->insert([
            [
                'id_san_pham'  =>  '0',
                'ten_san_pham'  =>  'Cafe Sữa',
                'mo_ta_ngan'  =>  'Cafe Sữa truyền thống',
                'mo_ta_chi_tiet'  =>  'cafe phin',
                'gia_ban'  =>  '45000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1639377904_bac-siu_525b9fa5055b41f183088c8e479a9472.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '0',
                'ten_san_pham'  =>  'Hi-Tea Vải',
                'mo_ta_ngan'  =>  'Trà Vải ',
                'mo_ta_chi_tiet'  =>  'Làm từ những trái vải tươi ngon',
                'gia_ban'  =>  '50000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1669736893_hi-tea-vai_557c90d4174f44dda30b986ee85660ce.png',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '0',
                'ten_san_pham'  =>  'Choco Croffle',
                'mo_ta_ngan'  =>  'Chocolate ',
                'mo_ta_chi_tiet'  =>  'Chocolate từ những thanh socola nguyên chất',
                'gia_ban'  =>  '39000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1712139673_choco_ec8ed31a5b934af78c362be5a6252626.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Tiramisu',
                'mo_ta_ngan'  =>  'Tiramisu ',
                'mo_ta_chi_tiet'  =>  'Bánh Tiramisu',
                'gia_ban'  =>  '39000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1638170137_tiramisu_25db4b4c4c434f2fb9c61821d5f1ba77.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Croissant trứng muối',
                'mo_ta_ngan'  =>  'Croissant trứng muối ',
                'mo_ta_chi_tiet'  =>  'Croissant trứng muối thơm ngon',
                'gia_ban'  =>  '45000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/croissant-trung-muoi_880850_8eee147c56d7406990b23fadcf898896.jpg',
                'tinh_trang'  =>  '0',
            ],
            [
                'id_san_pham'  =>  '1',
                'ten_san_pham'  =>  'Mousse Gấu Chocolate',
                'mo_ta_ngan'  =>  'Mousse Gấu Chocolate ',
                'mo_ta_chi_tiet'  =>  'Mousse Gấu Chocolate lmà từ socola',
                'gia_ban'  =>  '39000',
                'hinh_anh'  =>  'https://product.hstatic.net/1000075078/product/1638170066_gau_b7b0360f6b9a4e6484b0db6329c813d0.jpg',
                'tinh_trang'  =>  '0',
            ],
        ]);
    }
}
