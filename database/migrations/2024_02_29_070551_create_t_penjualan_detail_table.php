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
        Schema::create('t_penjualan_detail', function (Blueprint $table) {
            $table->id('detail_id'); // primary key (auto increment)
            $table->unsignedBigInteger('penjualan_id')->index(); // indexing untuk FK
            $table->unsignedBigInteger('barang_id')->index(); // indexing untuk FK
            $table->integer('jumlah'); // membuat kolom detail_jumlah dengan tipe data integer
            $table->integer('harga'); // membuat kolom detail_harga dengan tipe data integer
            $table->timestamps();

            $table->foreign('penjualan_id')->references('penjualan_id')->on('t_penjualan'); // membuat foreign key (FK) ke tabel t_penjualan
            $table->foreign('barang_id')->references('barang_id')->on('m_barang'); // membuat foreign key (FK) ke tabel m_barang
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_penjualan_detail');
    }
};
