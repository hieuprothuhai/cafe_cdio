<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nhan_viens')->delete();

        DB::table('nhan_viens')->truncate();

        DB::table('nhan_viens')->insert([
            [
                'email'             =>  'admin@gmail.com',
                'password'          =>  '123',
                'ho_va_ten'         =>  'admin',
                'so_dien_thoai'     =>  '0987878787',
                'dia_chi'           =>  'Đà Nẵng',
                'tinh_trang'        =>  1,
            ],
            [
                'email'             =>  'admin2@gmail.com',
                'password'          =>  '123',
                'ho_va_ten'         =>  'admin2',
                'so_dien_thoai'     =>  '0234542341',
                'dia_chi'           =>  'Đà Nẵng',
                'tinh_trang'        =>  1,
            ],
        ]);
    }
}
