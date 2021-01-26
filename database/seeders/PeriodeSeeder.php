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
            ['name' => '01',
            'desc' => '01 Januari - 28 Februari 2020',
            'ref_payment_amount' => 150000,
            'active' => true],

            ['name' => '02',
            'desc' => '01 Maret - 31 April 2020',
            'ref_payment_amount' => 150000,
            'active' => false],

            ['name' => '03',
            'desc' => '01 Mei - 31 Juni 2020',
            'ref_payment_amount' => 150000,
            'active' => false],
        ]);
    }
}
