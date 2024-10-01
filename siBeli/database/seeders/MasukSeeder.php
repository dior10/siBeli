<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Masuks')->insert([
            'kode_masuk'    => 'KM001',
            'tanggal_masuk' => '2024-09-05',
            'kode_admin'    => 'ADM01',
            'kode_supplier' => 'SPP01',
            'total_masuk'   => '10',
        ]);
        DB::table('Masuks')->insert([
            'kode_masuk'    => 'KM002',
            'tanggal_masuk' => '2024-02-10',
            'kode_admin'    => 'ADM02',
            'kode_supplier' => 'SPP02',
            'total_masuk'   => '10',
        ]);
        DB::table('Masuks')->insert([
            'kode_masuk'    => 'KM003',
            'tanggal_masuk' => '2024-09-17',
            'kode_admin'    => 'ADM03',
            'kode_supplier' => 'SPP03',
            'total_masuk'   => '10',
        ]);
    }
}
