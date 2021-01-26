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
            ['name' => '(Belum diisi)'],
            ['name' => 'Kurang dari Rp. 500,000'],
            ['name' => 'Rp. 500,000 - Rp. 999,999'],
            ['name' => 'Rp. 1,000,000 - Rp. 1,999,999'],
            ['name' => 'Rp. 2,000,000 - Rp. 4,999,999'],
            ['name' => 'Rp. 5,000,000 - Rp. 20,000,000'],
            ['name' => 'Lebih dari Rp. 20,000,000'],
            ['name' => 'Tidak Berpenghasilan'],
        ]);
    }
}
