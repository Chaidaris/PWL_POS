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
        Schema::create('t_stok', function (Blueprint $table) {
            $table->id('stok_id'); // primary key (auto increment)
            $table->unsignedBigInteger('barang_id')->index(); // indexing untuk FK
            $table->unsignedBigInteger('user_id')->index(); // indexing untuk FK
            $table->dateTime('stok_tanggal'); // membuat kolom tanggal dengan tipe data datetime
            $table->integer('stok_jumlah'); // membuat kolom stok_masuk dengan tipe data integer
            $table->timestamps();

            $table->foreign('barang_id')->references('barang_id')->on('m_barang'); // membuat foreign key (FK) ke tabel m_barang
            $table->foreign('user_id')->references('user_id')->on('m_user'); // membuat foreign key (FK) ke tabel m_user
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_stok');
    }
};
