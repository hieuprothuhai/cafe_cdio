<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('khos', function (Blueprint $table) {
            $table->id();
            $table->string('nha_cung_cap');
            $table->string('nhan_vien');
            $table->string('ma_nhap_kho')->unique();
            $table->decimal('tong_tien', 15, 2)->default(0);
            $table->text('ghi_chu')->nullable(); // Ghi chú (có thể để trống)
            $table->Integer('tinh_trang');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('khos');
    }
};
