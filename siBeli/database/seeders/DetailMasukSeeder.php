<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM01',
            'kode_masuk'        => 'KM001',
            'kode_barang_beli'  => 'BB001',
            'jumlah'            => '3',
            'subtotal'          => '5',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM02',
            'kode_masuk'        => 'KM002',
            'kode_barang_beli'  => 'BB002',
            'jumlah'            => '2',
            'subtotal'          => '4',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM03',
            'kode_masuk'        => 'KM003',
            'kode_barang_beli'  => 'BB003',
            'jumlah'            => '3',
            'subtotal'          => '6',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM04',
            'kode_masuk'        => 'KM004',
            'kode_barang_beli'  => 'BB004',
            'jumlah'            => '2',
            'subtotal'          => '3',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM05',
            'kode_masuk'        => 'KM005',
            'kode_barang_beli'  => 'BB005',
            'jumlah'            => '5',
            'subtotal'          => '6',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM06',
            'kode_masuk'        => 'KM006',
            'kode_barang_beli'  => 'BB006',
            'jumlah'            => '1',
            'subtotal'          => '2',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM07',
            'kode_masuk'        => 'KM007',
            'kode_barang_beli'  => 'BB007',
            'jumlah'            => '1',
            'subtotal'          => '3',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM08',
            'kode_masuk'        => 'KM008',
            'kode_barang_beli'  => 'BB008',
            'jumlah'            => '2',
            'subtotal'          => '4',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM09',
            'kode_masuk'        => 'KM009',
            'kode_barang_beli'  => 'BB009',
            'jumlah'            => '1',
            'subtotal'          => '3',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM10',
            'kode_masuk'        => 'KM010',
            'kode_barang_beli'  => 'BB010',
            'jumlah'            => '4',
            'subtotal'          => '5',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM11',
            'kode_masuk'        => 'KM011',
            'kode_barang_beli'  => 'BB011',
            'jumlah'            => '4',
            'subtotal'          => '7',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM12',
            'kode_masuk'        => 'KM012',
            'kode_barang_beli'  => 'BB012',
            'jumlah'            => '2',
            'subtotal'          => '5',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM13',
            'kode_masuk'        => 'KM013',
            'kode_barang_beli'  => 'BB013',
            'jumlah'            => '4',
            'subtotal'          => '6',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM14',
            'kode_masuk'        => 'KM014',
            'kode_barang_beli'  => 'BB014',
            'jumlah'            => '2',
            'subtotal'          => '5',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM15',
            'kode_masuk'        => 'KM015',
            'kode_barang_beli'  => 'BB015',
            'jumlah'            => '5',
            'subtotal'          => '6',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM16',
            'kode_masuk'        => 'KM016',
            'kode_barang_beli'  => 'BB016',
            'jumlah'            => '2',
            'subtotal'          => '5',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM17',
            'kode_masuk'        => 'KM017',
            'kode_barang_beli'  => 'BB017',
            'jumlah'            => '5',
            'subtotal'          => '7',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM18',
            'kode_masuk'        => 'KM018',
            'kode_barang_beli'  => 'BB018',
            'jumlah'            => '4',
            'subtotal'          => '5',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM19',
            'kode_masuk'        => 'KM019',
            'kode_barang_beli'  => 'BB019',
            'jumlah'            => '3',
            'subtotal'          => '6',
        ]);
        DB::table('detail_masuks')->insert([
            'id_masuk'          => 'IDM20',
            'kode_masuk'        => 'KM020',
            'kode_barang_beli'  => 'BB020',
            'jumlah'            => '2',
            'subtotal'          => '5',
        ]);
    }
}