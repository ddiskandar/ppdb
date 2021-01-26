<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobbySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->insert([
            'id' => 1,
            'name' => '(Belum diisi)',
        ]);
        DB::table('hobbies')->insert([
            'name' => 'Olahraga',
        ]);
        DB::table('hobbies')->insert([
            'name' => 'Kesenian',
        ]);
        DB::table('hobbies')->insert([
            'name' => 'Membaca',
        ]);
        DB::table('hobbies')->insert([
            'name' => 'Menulis',
        ]);
        DB::table('hobbies')->insert([
            'name' => 'Traveling',
        ]);
        DB::table('hobbies')->insert([
            'name' => 'Lainnya',
        ]);
        
    }
}
