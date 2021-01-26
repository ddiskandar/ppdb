<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jurusans')->insert([
            ['name' => 'Multimedia',
            'last_students' => 127],
            ['name' => 'Bisnis Daring dan Pemasaran',
            'last_students' => 66],
            ['name' => 'Agribisnis Pengolahan Hasil Pertanian',
            'last_students' => 39],
        ]);
    }
}
