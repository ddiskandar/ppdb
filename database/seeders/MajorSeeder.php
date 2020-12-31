<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('majors')->insert([
            'name' => 'Multimedia',
            'last_student' => 125,
        ]);
        DB::table('majors')->insert([
            'name' => 'Bisnis Daring dan Pemasaran',
            'last_student' => 64,
        ]);
        DB::table('majors')->insert([
            'name' => 'Agribisnis Pengolahan Hasil Pertanian',
            'last_student' => 37,
        ]);
    }
}
