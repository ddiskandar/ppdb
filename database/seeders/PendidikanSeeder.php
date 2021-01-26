<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pendidikans')->insert([
            ['name' => '(Belum diisi)'],
            ['name' => 'Tidak Sekolah'],
            ['name' => 'Putuh SD'],
            ['name' => 'SD Sederajat'],
            ['name' => 'SMP Sederajat'],
            ['name' => 'SMA Sederajat'],
            ['name' => 'D1'],
            ['name' => 'D2'],
            ['name' => 'D3'],
            ['name' => 'D4/S1'],
            ['name' => 'S2'],
            ['name' => 'S3'],
        ]);
    }
}
