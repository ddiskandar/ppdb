<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PeriodeSeeder::class,
            AgamaSeeder::class,
            PipSeeder::class,
            TransportasiSeeder::class,
            MajorSeeder::class,
            SchoolSeeder::class,
            TinggalSeeder::class,
            PermissionsSeeder::class,
        ]);
        
        // $users = \App\Models\User::factory(50)->has(\App\Models\Student::factory())->create();
    }
}
