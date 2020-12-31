<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schools')->insert([
            'npsn' => '20277822',
            'name' => 'MTs. YASTI 2 Kadudampit',
            'address' => 'Cimahigirang',
            'last_student' => 65,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20268386',
            'name' => 'SMP NEGERI 2 KADUDAMPIT',
            'address' => 'Cibogo',
            'last_student' => 76,
        ]);
    }
}
