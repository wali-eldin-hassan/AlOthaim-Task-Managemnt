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
            'user' => ['view-task'],
        ];

        foreach ($roles as $role => $permissions) {
            Role::create(['name' => $role]);
            foreach ($permissions as $permission) {
                Permission::create(['name' => $permission]);
                if ($role === 'admin') {
                    Role::findByName($role)->syncPermissions(Permission::all());
                }
            }

        }
    }
}
