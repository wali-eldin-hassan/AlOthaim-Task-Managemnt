<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPersmissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'admin' => ['create-task', 'view-task', 'edit-task', 'delete-task'],
            'user' => ['view-task', 'edit-task'],
        ];

        foreach ($roles as $role => $permissions) {
            $roleInstance = Role::firstOrCreate(['name' => $role]);

            foreach ($permissions as $permission) {
                $permissionInstance = Permission::firstOrCreate(['name' => $permission]);

                $roleInstance->givePermissionTo($permissionInstance);
            }
        }
    }
}
