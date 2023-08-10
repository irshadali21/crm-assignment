<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        // create permissions
        $permissions = [
            'view-user',
            'create-user',
            'update-user',
            'destroy-user',
            'view-role',
            'view-permission',
            'create-role',
            'create-permission',
            'update-role',
            'update-permission',
            'destroy-role',
            'destroy-permission',
            'view-companies',
            'create-companies',
            'update-companies',
            'destroy-companies',
            'view-employees',
            'create-employees',
            'update-employees',
            'destroy-employees',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
        // Create admin & role
        $admin_role= Role::create(['name' => 'admin  ']);
        $admin_role->syncPermissions($permissions);

        $admin = User::create([
            'name'=> 'Admin',
            'email' => 'admin@email.com',
            'password' => 'password',
            'email_verified_at' => now(),
        ]);

        $admin->assignRole($admin_role);

        $admin->syncPermissions($permissions);

        // Create sub-admin & role

        $permissions_sub_admin = [
            'view-employees',
            'create-employees',

        ];


        $sub_admin_role = Role::create(['name' => 'sub-admin']);
        $sub_admin = User::create([
            'name'=> 'sub-admin',
            'email' => 'sub-admin@email.com',
            'password' => 'password',
            'email_verified_at' => now(),
        ]);

        $sub_admin->assignRole($sub_admin_role);
        $sub_admin->syncPermissions($permissions_sub_admin);

    }
}
