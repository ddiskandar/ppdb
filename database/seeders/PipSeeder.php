<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pips')->insert([
            'id' => 99,
            'name' => 'Mampu / Tidak layak PIP',
        ]);
        DB::table('pips')->insert([
            'id' => 1,
            'name' => 'Daerah Konflik',
        ]);
        DB::table('pips')->insert([
            'id' => 2,
            'name' => 'Dampak Bencana Alam',
        ]);
        DB::table('pips')->insert([
            'id' => 3,
            'name' => 'Kelainan Fisik',
        ]);
        DB::table('pips')->insert([
            'id' => 4,
            'name' => 'Pernah Drop Out',
        ]);
        DB::table('pips')->insert([
            'id' => 5,
            'name' => 'Keluarga Pidana/Berada di LAPAS',
        ]);
        DB::table('pips')->insert([
            'id' => 6,
            'name' => 'Pemegang PKH/PKS/KKS',
        ]);
        DB::table('pips')->insert([
            'id' => 7,
            'name' => 'Siswa Miskin/Rentan Miskin',
        ]);
        DB::table('pips')->insert([
            'id' => 8,
            'name' => 'Yatim Piatu/Panti Asuhan/Panti Sosial',
        ]);
    }
}
