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
            'desc' => 'Januari - 26 Maret 2020',
            'ref_payment_amount' => 150000,
            'link_wa' => 'https://chat.whatsapp.com/GBq6KDPq1MBDYDSKGtr67O',
            'active' => true],

            ['name' => '02',
            'desc' => '30 Maret - 30 April 2020',
            'ref_payment_amount' => 150000,
            'link_wa' => 'https://chat.whatsapp.com/GBq6KDPq1MBDYDSKGtr67O',
            'active' => false],

            ['name' => '03',
            'desc' => '01 Mei - Juni 2020',
            'ref_payment_amount' => 150000,
            'link_wa' => 'https://chat.whatsapp.com/GBq6KDPq1MBDYDSKGtr67O',
            'active' => false],
        ]);
    }
}
