<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodes')->insert([
            'name' => '01',
            'desc' => '01 Januari - 28 Februari 2020',
            'active' => true
        ]);
        DB::table('periodes')->insert([
            'name' => '02',
            'desc' => '01 Januari - 28 Februari 2020',
        ]);
        DB::table('periodes')->insert([
            'name' => '03',
            'desc' => '01 Januari - 28 Februari 2020',
        ]);
    }
}
