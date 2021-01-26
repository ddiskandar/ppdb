<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pekerjaans')->insert([
            ['name' => '(Belum diisi)'],
            ['name' => 'Tidak bekerja'],
            ['name' => 'Nelayan'],
            ['name' => 'Petani'],
            ['name' => 'Peternak'],
            ['name' => 'PNS/TNI/Polri'],
            ['name' => 'Karyawan Swasta'],
            ['name' => 'Pedagang Kecil'],
            ['name' => 'Pedagang Besar'],
            ['name' => 'Wiraswasta'],
            ['name' => 'Wirausaha'],
            ['name' => 'Buruh'],
            ['name' => 'Pensiunan'],
            ['name' => 'Tenaga Kerja Indonesia'],
            ['name' => 'Tidak dapat diterapkan'],
            ['name' => 'Sudah Meninggal'],
            ['name' => 'Lainnya'],
        ]);
        
    }
}
