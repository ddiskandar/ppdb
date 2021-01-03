<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransportasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transportasis')->insert([
            'id' => 99,
            'name' => 'Lainnya',
        ]);
        DB::table('transportasis')->insert([
            'id' => 1,
            'name' => 'Jalan Kaki',
        ]);
        DB::table('transportasis')->insert([
            'id' => 2,
            'name' => 'Kendaraan Pribadi',
        ]);
        DB::table('transportasis')->insert([
            'id' => 3,
            'name' => 'Kendaraan Umum/Angkot/Pete-pete',
        ]);
        DB::table('transportasis')->insert([
            'id' => 4,
            'name' => 'Jemputan Sekolah',
        ]);
        DB::table('transportasis')->insert([
            'id' => 5,
            'name' => 'Kereta Api',
        ]);
        DB::table('transportasis')->insert([
            'id' => 6,
            'name' => 'Ojek',
        ]);
        DB::table('transportasis')->insert([
            'id' => 7,
            'name' => 'Andong/Bendi/Sado/Dokar/Delman/Beca',
        ]);
        DB::table('transportasis')->insert([
            'id' => 8,
            'name' => 'Perahu Penyebrangan/Rakit/Getek',
        ]);
    }
}
