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
            'name' => 'Angkutan umum/bus/pete-pete',
        ]);
        DB::table('transportasis')->insert([
            'id' => 3,
            'name' => 'Mobil/bus antar jemput',
        ]);
        DB::table('transportasis')->insert([
            'id' => 4,
            'name' => 'Kereta api',
        ]);
        DB::table('transportasis')->insert([
            'id' => 5,
            'name' => 'Ojek',
        ]);
        DB::table('transportasis')->insert([
            'id' => 6,
            'name' => 'Andong/Bendi/Sado/Dokar/Delman/Beca',
        ]);
        DB::table('transportasis')->insert([
            'id' => 7,
            'name' => 'Perahu Penyebrangan/Rakit/Getek',
        ]);
        DB::table('transportasis')->insert([
            'id' => 8,
            'name' => 'Kuda',
        ]);
        DB::table('transportasis')->insert([
            'id' => 9,
            'name' => 'Sepeda',
        ]);
        DB::table('transportasis')->insert([
            'id' => 10,
            'name' => 'Sepeda motor',
        ]);
        DB::table('transportasis')->insert([
            'id' => 11,
            'name' => 'Mobil pribadi',
        ]);
    }
}
