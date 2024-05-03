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
            LevelSeeder::class,
            UserSeeder::class,
            KategoriSeeder::class,
            BarangSeed::class,
            StokSeed::class,
            PenjualanSeed::class,
            DetailSeed::class,
        ]);
    }
}