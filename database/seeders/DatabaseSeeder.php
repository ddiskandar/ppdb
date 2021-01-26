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
            AgamaSeeder::class,
            PipSeeder::class,
            HobbySeeder::class,
            IdealsSeeder::class,
            PenghasilanSeeder::class,
            PekerjaanSeeder::class,
            TinggalSeeder::class,
            TransportasiSeeder::class,
            PendidikanSeeder::class,
            JurusanSeeder::class,
            SchoolSeeder::class,
            PeriodeSeeder::class,
            PermissionsSeeder::class,
        ]);
        
        // $users = \App\Models\User::factory(50)->has(\App\Models\Student::factory())->create();
    }
}
