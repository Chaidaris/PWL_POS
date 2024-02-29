<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'penjualan_id' => 1,
                'user_id' => 4,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'P0001',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 4,
                'pembeli' => 'Nita',
                'penjualan_kode' => 'P0002',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 4,
                'pembeli' => 'Mira',
                'penjualan_kode' => 'P0003',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 4,
                'pembeli' => 'Arini',
                'penjualan_kode' => 'P0004',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 4,
                'pembeli' => 'Karina',
                'penjualan_kode' => 'P0005',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 4,
                'pembeli' => 'Fadly',
                'penjualan_kode' => 'P0006',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 4,
                'pembeli' => 'Dika',
                'penjualan_kode' => 'P0007',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 4,
                'pembeli' => 'Riri',
                'penjualan_kode' => 'P0008',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 4,
                'pembeli' => 'Yusuf',
                'penjualan_kode' => 'P0009',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 4,
                'pembeli' => 'Asrul',
                'penjualan_kode' => 'P0010',
                'penjualan_tanggal' => now(),
                'created_at' => now(),
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
