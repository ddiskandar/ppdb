<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AgamaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agamas')->insert([
            'id' => 1,
            'name' => 'Islam',
        ]);
        DB::table('agamas')->insert([
            'id' => 2,
            'name' => 'Kristen/Protestan',
        ]);
        DB::table('agamas')->insert([
            'id' => 3,
            'name' => 'Katholik',
        ]);
        DB::table('agamas')->insert([
            'id' => 4,
            'name' => 'Hindu',
        ]);
        DB::table('agamas')->insert([
            'id' => 5,
            'name' => 'Budha',
        ]);
        DB::table('agamas')->insert([
            'id' => 6,
            'name' => 'Kong hu chu',
        ]);
        DB::table('agamas')->insert([
            'id' => 7,
            'name' => 'Kepercayaan Kepada Tuhan YME',
        ]);
    }
}
