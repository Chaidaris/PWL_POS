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
        Schema::create('m_user', function (Blueprint $table) {
            $table->id('user_id'); // primary key (auto increment)
            $table->unsignedBigInteger('level_id')->index(); // indexing untuk FK
            $table->string('user_nama', 20)->unique(); // membuat kolom user_nama dengan tipe data string
            $table->string('nama', 100); // membuat kolom nama dengan tipe data string
            $table->string('password'); // membuat kolom password dengan tipe data string
            $table->timestamps();
            $table->foreign('level_id')->references('level_id')->on('m_level'); // membuat foreign key (FK) ke tabel m_level
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('m_user');
    }
};
