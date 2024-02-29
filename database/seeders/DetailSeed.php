<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'detail_jumlah' => 10,
                'detail_harga' => 10000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 2,
                'detail_jumlah' => 15,
                'detail_harga' => 15000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 2,
                'barang_id' => 3,
                'detail_jumlah' => 20,
                'detail_harga' => 20000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'detail_jumlah' => 25,
                'detail_harga' => 25000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 3,
                'barang_id' => 5,
                'detail_jumlah' => 30,
                'detail_harga' => 30000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 3,
                'barang_id' => 6,
                'detail_jumlah' => 35,
                'detail_harga' => 35000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 7,
                'penjualan_id' => 4,
                'barang_id' => 1,
                'detail_jumlah' => 40,
                'detail_harga' => 40000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 4,
                'barang_id' => 2,
                'detail_jumlah' => 45,
                'detail_harga' => 45000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 5,
                'barang_id' => 3,
                'detail_jumlah' => 50,
                'detail_harga' => 50000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 10,
                'penjualan_id' => 5,
                'barang_id' => 4,
                'detail_jumlah' => 55,
                'detail_harga' => 55000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 6,
                'barang_id' => 5,
                'detail_jumlah' => 60,
                'detail_harga' => 60000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'detail_jumlah' => 65,
                'detail_harga' => 65000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 13,
                'penjualan_id' => 7,
                'barang_id' => 1,
                'detail_jumlah' => 70,
                'detail_harga' => 70000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 7,
                'barang_id' => 2,
                'detail_jumlah' => 75,
                'harga' => 75000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 8,
                'barang_id' => 3,
                'jum' => 80,
                'harga' => 80000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 16,
                'penjualan_id' => 8,
                'barang_id' => 4,
                'jum' => 85,
                'harga' => 85000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 9,
                'barang_id' => 5,
                'detail_jumlah' => 90,
                'harga' => 90000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 9,
                'barang_id' => 6,
                'detail_jumlah' => 95,
                'harga' => 95000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 19,
                'penjualan_id' => 10,
                'barang_id' => 1,
                'detail_jumlah' => 100,
                'harga' => 100000,
                'created_at' => now(),
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 10,
                'barang_id' => 2,
                'detail_jumlah' => 105,
                'harga' => 105000,
                'created_at' => now(),
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
