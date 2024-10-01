<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB001',
                'harga_jual'   => '150000',
                'harga_beli'   => '250000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Stabilo',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB002',
                'harga_jual'   => '100000',
                'harga_beli'   => '200000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Hekter',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB003',
                'harga_jual'   => '150000',
                'harga_beli'   => '250000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Spidol',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB004',
                'harga_jual'   => '100000',
                'harga_beli'   => '200000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Gunting',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB005',
                'harga_jual'   => '150000',
                'harga_beli'   => '250000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Buku',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB006',
                'harga_jual'   => '100000',
                'harga_beli'   => '200000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Rautan',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB007',
                'harga_jual'   => '150000',
                'harga_beli'   => '250000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Penggaris',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB008',
                'harga_jual'   => '100000',
                'harga_beli'   => '200000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Penghapus',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB009',
                'harga_jual'   => '150000',
                'harga_beli'   => '250000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Pulpen',
            ]);
            DB::table('Barangs')->insert([
                'kode_barang'  => 'BB010',
                'harga_jual'   => '100000',
                'harga_beli'   => '200000',
                'stok'         => '10',
                'status'       => 'Tersedia',
                'satuan'       => '10',
                'nama_barang'  => 'Pensil',
            ]);
        } 
    }
