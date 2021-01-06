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
            'id' => 99,
            'name' => 'Tidak ada data',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 1,
            'name' => 'Tidak Sekolah',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 2,
            'name' => 'Putuh SD',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 3,
            'name' => 'SD Sederajat',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 4,
            'name' => 'SMP Sederajat',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 5,
            'name' => 'SMA Sederajat',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 6,
            'name' => 'D1',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 7,
            'name' => 'D2',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 8,
            'name' => 'D3',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 9,
            'name' => 'D4/S1',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 10,
            'name' => 'S2',
        ]);
        DB::table('pendidikans')->insert([
            'id' => 11,
            'name' => 'S3',
        ]);
    }
}
