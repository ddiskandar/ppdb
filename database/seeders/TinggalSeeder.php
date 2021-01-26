<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TinggalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tinggals')->insert([
            'id' => 1,
            'name' => 'Bersama Orang tua',
        ]);
        DB::table('tinggals')->insert([
            'id' => 2,
            'name' => 'Wali',
        ]);
        DB::table('tinggals')->insert([
            'id' => 3,
            'name' => 'Kos',
        ]);
        DB::table('tinggals')->insert([
            'id' => 4,
            'name' => 'Asrama',
        ]);
        DB::table('tinggals')->insert([
            'id' => 5,
            'name' => 'Panti Asuhan',
        ]);
        DB::table('tinggals')->insert([
            'id' => 6,
            'name' => 'Pesantren',
        ]);
        DB::table('tinggals')->insert([
            'id' => 99,
            'name' => 'Lainnya',
        ]);
    }
}
