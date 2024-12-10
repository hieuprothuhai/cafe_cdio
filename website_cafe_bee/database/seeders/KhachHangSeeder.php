<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();
        DB::table('khach_hangs')->truncate();
        DB::table('khach_hangs')->insert([
            [
                'ho_va_ten' => 'Nguyễn Văn A',
                'email' => 'nguyenvana@gmail.com',
                'password' => '123',
                'so_dien_thoai' => '0912345678',
                'ngay_sinh' => '1995-06-15',
            ],
            [
                'ho_va_ten' => 'lan',
                'email' => 'lan@gmail.com',
                'password' => '123',
                'so_dien_thoai' => '0123456789',
                'ngay_sinh' => '2001-01-01',
            ],
        ]);
    }
}
