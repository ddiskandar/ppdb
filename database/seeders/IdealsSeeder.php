<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IdealsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ideals')->insert([
            ['name' => '(Belum diisi)'],
            ['name' => 'PNS'],
            ['name' => 'TNI/Polri'],
            ['name' => 'Guru/Dosen'],
            ['name' => 'Dokter'],
            ['name' => 'Politikus'],
            ['name' => 'Wiraswasta'],
            ['name' => 'Seni/Lukis/Artis/Sejenis'],
            ['name' => 'Lainnya'],
        ]);
        
    }
}
