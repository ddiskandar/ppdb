<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pips')->insert([
            ['name' => '(Belum diisi)'],
            ['name' => 'Mampu / Tidak layak PIP'],
            ['name' => 'Daerah Konflik'],
            ['name' => 'Dampak Bencana Alam'],
            ['name' => 'Kelainan Fisik'],
            ['name' => 'Pernah Drop Out'],
            ['name' => 'Keluarga Pidana/Berada di LAPAS'],
            ['name' => 'Pemegang PKH/PKS/KKS'],
            ['name' => 'Siswa Miskin/Rentan Miskin'],
            ['name' => 'Yatim Piatu/Panti Asuhan/Panti Sosial'],
        ]);
    }
}
