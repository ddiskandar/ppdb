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
            ['name' => 'Islam'],
            ['name' => 'Kristen/Protestan'],
            ['name' => 'Katholik'],
            ['name' => 'Hindu'],
            ['name' => 'Budha'],
            ['name' => 'Kong hu chu'],
            ['name' => 'Kepercayaan Kepada Tuhan YME'],
        ]);
    }
}
