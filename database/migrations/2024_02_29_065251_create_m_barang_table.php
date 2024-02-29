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
        Schema::create('m_barang', function (Blueprint $table) {
            $table->id('barang_id'); // primary key (auto increment)
            $table->unsignedBigInteger('kategori_id')->index(); // indexing untuk FK
            $table->string('barang_kode', 10)->unique(); // membuat kolom barang_kode dengan tipe data string dan unique
            $table->string('barang_nama', 100); // membuat kolom barang_nama dengan tipe data string
            $table->integer('harga_beli'); // membuat kolom barang_harga dengan tipe data integer
            $table->integer('harga_jual'); // membuat kolom barang_harga dengan tipe data integer
            $table->timestamps();
            $table->foreign('kategori_id')->references('kategori_id')->on('m_kategori'); // membuat foreign key (FK) ke tabel m_kategori
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_barang');
    }
};
