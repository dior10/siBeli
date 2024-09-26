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
        Schema::create('detail_masuks', function (Blueprint $table) {
            $table->id();
            $table->char('id_masuk',5);
            $table->char('kode_masuk',5);
            $table->char('kode_barang_beli',5);
            $table->char('Jumlah');
            $table->decimal('Subtotal',10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_masuks');
    }
};
