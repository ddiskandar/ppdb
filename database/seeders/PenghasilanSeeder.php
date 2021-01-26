<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenghasilanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penghasilans')->insert([
            'id' => 99,
            'name' => 'Belum ada data',
        ]);
        DB::table('penghasilans')->insert([
            'id' => 1,
            'name' => 'Kurang dari Rp. 500,000',
        ]);
        DB::table('penghasilans')->insert([
            'id' => 2,
            'name' => 'Rp. 500,000 - Rp. 999,999',
        ]);
        DB::table('penghasilans')->insert([
            'id' => 3,
            'name' => 'Rp. 1,000,000 - Rp. 1,999,999',
        ]);
        DB::table('penghasilans')->insert([
            'id' => 4,
            'name' => 'Rp. 2,000,000 - Rp. 4,999,999',
        ]);
        DB::table('penghasilans')->insert([
            'id' => 5,
            'name' => 'Rp. 5,000,000 - Rp. 20,000,000',
        ]);
        DB::table('penghasilans')->insert([
            'id' => 6,
            'name' => 'Lebih dari Rp. 20,000,000',
        ]);
        DB::table('penghasilans')->insert([
            'id' => 10,
            'name' => 'Tidak Berpenghasilan',
        ]);
    }
}
