<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            NhanVienSeeder::class,
            KhachHangSeeder::class,
            SanPhamSeeder::class,
            LoaiSeeder::class,
            NhaCungCapSeeder::class,
            ChiTietNhapKhoSeeder::class,
            KhoSeeder::class,
        ]);
    }
}
