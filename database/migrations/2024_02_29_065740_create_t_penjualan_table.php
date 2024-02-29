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
        Schema::create('t_penjualan', function (Blueprint $table) {
            $table->id('penjualan_id'); // primary key (auto increment)
            $table->unsignedBigInteger('user_id')->index(); // indexing untuk FK
            $table->string('pembeli', 50); // membuat kolom pembeli dengan tipe data string
            $table->string('penjualan_kode', 20)->unique(); // membuat kolom penjualan_kode dengan tipe data string dan unique
            $table->dateTime('penjualan_tanggal'); // membuat kolom tanggal dengan tipe data datetime
            $table->timestamps();

            $table->foreign('user_id')->references('user_id')->on('m_user'); // membuat foreign key (FK) ke tabel m_user
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan');
    }
};
