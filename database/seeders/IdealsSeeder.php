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
            'id' => 1,
            'name' => '(Belum diisi)',
        ]);
        DB::table('ideals')->insert([
            'name' => 'PNS',
        ]);
        DB::table('ideals')->insert([
            'name' => 'TNI/Polri',
        ]);
        DB::table('ideals')->insert([
            'name' => 'Guru/Dosen',
        ]);
        DB::table('ideals')->insert([
            'name' => 'Dokter',
        ]);
        DB::table('ideals')->insert([
            'name' => 'Politikus',
        ]);
        DB::table('ideals')->insert([
            'name' => 'Wiraswasta',
        ]);
        DB::table('ideals')->insert([
            'name' => 'Seni/Lukis/Artis/Sejenis',
        ]);
        DB::table('ideals')->insert([
            'name' => 'Lainnya',
        ]);
        
    }
}
