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
            'id' => 99,
            'name' => 'Belum ada data',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 1,
            'name' => 'Tidak bekerja',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 2,
            'name' => 'Nelayan',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 3,
            'name' => 'Petani',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 4,
            'name' => 'Peternak',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 5,
            'name' => 'PNS/TNI/Polri',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 6,
            'name' => 'Karyawan Swasta',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 7,
            'name' => 'Pedagang Kecil',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 8,
            'name' => 'Pedagang Besar',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 9,
            'name' => 'Wiraswasta',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 10,
            'name' => 'Wirausaha',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 11,
            'name' => 'Buruh',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 12,
            'name' => 'Pensiunan',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 13,
            'name' => 'Tenaga Kerja Indonesia',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 14,
            'name' => 'Tidak dapat diterapkan',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 15,
            'name' => 'Sudah Meninggal',
        ]);
        DB::table('pekerjaans')->insert([
            'id' => 16,
            'name' => 'Lainnya',
        ]);
        
    }
}
