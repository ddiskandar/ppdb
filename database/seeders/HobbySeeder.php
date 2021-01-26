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
            ['name' => '(Belum diisi)'],
            ['name' => 'Olahraga'],
            ['name' => 'Kesenian'],
            ['name' => 'Membaca'],
            ['name' => 'Menulis'],
            ['name' => 'Traveling'],
            ['name' => 'Lainnya'],
        ]);
        
    }
}
