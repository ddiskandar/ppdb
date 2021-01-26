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
            ['name' => '(Belum diisi)'],
            ['name' => 'Bersama Orang tua'],
            ['name' => 'Wali'],
            ['name' => 'Kos'],
            ['name' => 'Asrama'],
            ['name' => 'Panti Asuhan'],
            ['name' => 'Pesantren'],
            ['name' => 'Lainnya'],
        ]);
    }
}
