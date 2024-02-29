<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'MNM001',
                'barang_nama' => 'Teh Botol Sosro 500ml',
                'harga_beli' => 5000,
                'harga_jual' => 8000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'MNM002',
                'barang_nama' => 'Aqua 1500ml',
                'harga_beli' => 4000,
                'harga_jual' => 6000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'MKN001',
                'barang_nama' => 'Indomie Goreng',
                'harga_beli' => 2700,
                'harga_jual' => 3100,
                'created_at' => now(),
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'MKN002',
                'barang_nama' => 'Indomie Kaldu',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'SNC001',
                'barang_nama' => 'Chitato',
                'harga_beli' => 9000,
                'harga_jual' => 12000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'SNC002',
                'barang_nama' => 'Ringo',
                'harga_beli' => 7000,
                'harga_jual' => 10000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'SBK001',
                'barang_nama' => 'Gula Pasir',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'SBK002',
                'barang_nama' => 'Minyak Goreng',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 4,
                'barang_kode' => 'SBK003',
                'barang_nama' => 'Tepung Terigu',
                'harga_beli' => 8000,
                'harga_jual' => 10000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 4,
                'barang_kode' => 'SBK004',
                'barang_nama' => 'Telur Ayam',
                'harga_beli' => 20000,
                'harga_jual' => 25000,
                'created_at' => now(),
            ],
        ];

        DB::table('m_barang')->insert($data);
    }
}
