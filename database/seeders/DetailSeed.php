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
                'penjualan_id' => 1,
                'barang_id' => 1,
                'jumlah' => 10,
                'harga' => 12000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 2,
                'jumlah' => 5,
                'harga' => 17000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'jumlah' => 12,
                'harga' => 35000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 8,
                'jumlah' => 8,
                'harga' => 10000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 7,
                'jumlah' => 6,
                'harga' => 15000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 9,
                'jumlah' => 10,
                'harga' => 30000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'jumlah' => 15,
                'harga' => 18000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 3,
                'jumlah' => 8,
                'harga' => 14000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 3,
                'jumlah' => 20,
                'harga' => 40000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 4,
                'jumlah' => 10,
                'harga' => 30000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 5,
                'jumlah' => 5,
                'harga' => 50000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 6,
                'jumlah' => 8,
                'harga' => 80000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 7,
                'jumlah' => 10,
                'harga' => 15000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 8,
                'jumlah' => 5,
                'harga' => 10000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 9,
                'jumlah' => 12,
                'harga' => 12000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 10,
                'jumlah' => 10,
                'harga' => 10000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 9,
                'jumlah' => 5,
                'harga' => 5000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 8,
                'jumlah' => 8,
                'harga' => 16000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 7,
                'jumlah' => 10,
                'harga' => 15000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 6,
                'jumlah' => 5,
                'harga' => 5000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 5,
                'jumlah' => 12,
                'harga' => 12000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 4,
                'jumlah' => 10,
                'harga' => 30000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 3,
                'jumlah' => 5,
                'harga' => 5000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 2,
                'jumlah' => 8,
                'harga' => 16000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 1,
                'jumlah' => 10,
                'harga' => 12000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 2,
                'jumlah' => 5,
                'harga' => 17000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 3,
                'jumlah' => 12,
                'harga' => 35000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 4,
                'jumlah' => 10,
                'harga' => 30000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 5,
                'jumlah' => 5,
                'harga' => 50000,
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 6,
                'jumlah' => 8,
                'harga' => 80000,
                'created_at' => now(),
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
