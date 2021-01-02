<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Hash;

class PermissionsSeeder extends Seeder
{
    /**
     * Create the initial roles and permissions.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        // Permission::create(['name' => 'edit articles']);
        // Permission::create(['name' => 'delete articles']);
        // Permission::create(['name' => 'publish articles']);
        // Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'student']);
        // $role1->givePermissionTo('edit articles');
        // $role1->givePermissionTo('delete articles');

        $role2 = Role::create(['name' => 'committee']);

        $role3 = Role::create(['name' => 'interviewer']);
        // $role2->givePermissionTo('publish articles');
        // $role2->givePermissionTo('unpublish articles');

        $role4 = Role::create(['name' => 'admin']);

        $role5 = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        

        $user = \App\Models\User::factory()->create([
            'username' => 'dd',
            'name' => 'Dede Iskandar',
            'email' => 'dd@smkplusalfarhan.sch.id',
            'password' => Hash::make('majuterus'),

        ]);
        $user->assignRole($role4);

        $user = \App\Models\User::factory()->create([
            'username' => 'is',
            'name' => 'Irpan Syauri',
            'email' => 'is@smkplusalfarhan.sch.id',
            'password' => Hash::make('majuterus'),
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'username' => 'hm',
            'name' => 'Helmina',
            'email' => 'hm@smkplusalfarhan.sch.id',
            'password' => Hash::make('majuterus'),
        ]);
        $user->assignRole($role3);
    }
}
