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
            ['name' => '(Belum diisi)'],
            ['name' => 'Jalan Kaki'],
            ['name' => 'Angkutan umum/bus/pete-pete'],
            ['name' => 'Mobil/bus antar jemput'],
            ['name' => 'Kereta api'],
            ['name' => 'Ojek'],
            ['name' => 'Andong/Bendi/Sado/Dokar/Delman/Beca'],
            ['name' => 'Perahu Penyebrangan/Rakit/Getek'],
            ['name' => 'Kuda'],
            ['name' => 'Sepeda'],
            ['name' => 'Sepeda motor'],
            ['name' => 'Mobil pribadi'],
            ['name' => 'Lainnya'],
        ]);
    }
}
