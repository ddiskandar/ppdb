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
            'last_students' => 127,
        ]);
        DB::table('majors')->insert([
            'name' => 'Bisnis Daring dan Pemasaran',
            'last_students' => 66,
        ]);
        DB::table('majors')->insert([
            'name' => 'Agribisnis Pengolahan Hasil Pertanian',
            'last_students' => 39,
        ]);
    }
}
