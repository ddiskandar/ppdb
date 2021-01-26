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
            'id' => 1,
            'npsn' => '0',
            'name' => 'BELUM ADA DATA',
            'address' => 'Sukabumi',
            'last_students' => 0,
        ]);

        DB::table('schools')->insert([
            'npsn' => '1',
            'name' => '- LAINNYA (TIDAK ADA DI DAFTAR)',
            'address' => 'Sukabumi',
            'last_students' => 0,
        ]);
        
        DB::table('schools')->insert([
            'npsn' => '20277844',
            'name' => 'MTS YASTI 2 KADUDAMPIT',
            'address' => 'Sukabumi',
            'last_students' => 36,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20268381',
            'name' => 'SMP NEGERI 2 KADUDAMPIT',
            'address' => 'Cibogo',
            'last_students' => 48,
        ]);

        DB::table('schools')->insert([
            'npsn' => '69976264',
            'name' => 'AL-WASILAH 02',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277782',
            'name' => 'MTs AL FALAH',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277761',
            'name' => 'MTs AL HUDA CISAAT',
            'address' => 'Cisaat',
            'last_students' => 3,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277769',
            'name' => 'MTs AL MUKHTARIYYAH',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '69928086',
            'name' => 'MTs AL RAHIM',
            'address' => 'Kadudampit',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '69955886',
            'name' => 'MTs ALHIDAYAH CIBUNARKULON',
            'address' => 'Kadudampit',
            'last_students' => 4,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277826',
            'name' => 'MTs KADUDAMPIT',
            'address' => 'Kadudampit',
            'last_students' => 5,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277683',
            'name' => 'MTs NIDAUL KHOIR ( YASPIN )',
            'address' => 'Pasir Datar',
            'last_students' => 6,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277778',
            'name' => 'MTs NURUL HUDA CISAAT',
            'address' => 'Cisaat',
            'last_students' => 2,
        ]);

        DB::table('schools')->insert([
            'npsn' => '69928085',
            'name' => 'MTs RAUDLOTUL ULUM',
            'address' => 'Citamiang',
            'last_students' => 7,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277684',
            'name' => 'MTs SA MUSLIMUN AL MUHSINIYAH',
            'address' => 'Sukabumi',
            'last_students' => 4,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277779',
            'name' => 'MTs YAPIM JAYA',
            'address' => 'Cisaat',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277772',
            'name' => 'MTs YASTI 1 CISAAT',
            'address' => 'Cisaat',
            'last_students' => 4,
        ]);

        DB::table('schools')->insert([
            'npsn' => '69976307',
            'name' => 'MTS. TAHFIZH AL FALAKIYAH',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277689',
            'name' => 'MTSS AL - ANDALUSIA',
            'address' => 'Sukabumi',
            'last_students' => 3,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277825',
            'name' => 'MTSS AL - FURQON KAUDAMPIT',
            'address' => 'Kebonkawung',
            'last_students' => 27,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277688',
            'name' => 'MTSS AL BADRIYAH',
            'address' => 'Cisaat',
            'last_students' => 4,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277771',
            'name' => 'MTSS AL MASTHURIYAH',
            'address' => 'Cisaat',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277824',
            'name' => 'MTSS AT- TAHSISNIYYAH',
            'address' => 'Sukabumi',
            'last_students' => 2,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277773',
            'name' => 'MTSS DAARUSSALAAM',
            'address' => 'Sukabumi',
            'last_students' => 5,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277774',
            'name' => 'MTSS MIFTAHUL HUDA',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277685',
            'name' => 'MTSS PLUS AS-SAIDAH',
            'address' => 'Sukabumi',
            'last_students' => 5,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277783',
            'name' => 'MTSS TERPADU AL-IRFANIYYAH',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20277850',
            'name' => 'MTSS TUNAS HARAPAN BANGSA',
            'address' => 'Sukabumi',
            'last_students' => 4,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20245289',
            'name' => 'SMP DAARUL FALAAH CISAAT',
            'address' => 'Cisaat',
            'last_students' => 15,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20267734',
            'name' => 'SMP ISLAM AL - ANHAR',
            'address' => 'Cisaat',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20252035',
            'name' => 'SMP ISLAM AL MAFTUH CARINGIN',
            'address' => 'Caringin',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20253027',
            'name' => 'SMP ISLAM PATRIA AL FADLAH',
            'address' => 'Kadudampit',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20247079',
            'name' => 'SMP ISLAM TERPADU YASPIDA',
            'address' => 'Kadudampit',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20258063',
            'name' => 'SMP IT AT-TAISIRIYAH',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20202384',
            'name' => 'SMP NEGERI 1 CARINGIN',
            'address' => 'Caringin',
            'last_students' => 2,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20202417',
            'name' => 'SMP NEGERI 1 CISAAT',
            'address' => 'Cisaat',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20202409',
            'name' => 'SMP NEGERI 1 GUNUNGGURUH',
            'address' => 'Gunungguruh',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20202404',
            'name' => 'SMP NEGERI 1 KADUDAMPIT',
            'address' => 'Kadudampit',
            'last_students' => 9,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20253294',
            'name' => 'SMP NEGERI 2 BANTARGADUNG',
            'address' => 'Bantargadung',
            'last_students' => 2,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20202359',
            'name' => 'SMP NEGERI 2 CISAAT',
            'address' => 'Cisaat',
            'last_students' => 4,
        ]);

        DB::table('schools')->insert([
            'npsn' => '69962072',
            'name' => 'SMPN 6 CISOLOK SATU ATAP',
            'address' => 'Cisolok',
            'last_students' => 2,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20268796',
            'name' => 'SMPN 7 SURADE SATU ATAP',
            'address' => 'Surade',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20231139',
            'name' => 'SMP PLUS ALHASANAH',
            'address' => 'Cicurug',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20247058',
            'name' => 'SMP PGRI BANTARGADUNG',
            'address' => 'Bantargadung',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20220423',
            'name' => 'SMP PGRI 2',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20233740',
            'name' => 'SMP NEGERI SATU ATAP 1 LOSARANG',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '70000011',
            'name' => 'SMP NEGERI 2 SERANG BARU',
            'address' => 'Sukabumi',
            'last_students' => 1,
        ]);

        DB::table('schools')->insert([
            'npsn' => '20202378',
            'name' => 'SMP NEGERI 2 PABUARAN',
            'address' => 'Pabuaran',
            'last_students' => 1,
        ]);

    }
}
