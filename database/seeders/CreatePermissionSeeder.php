<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class CreatePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'title' => 'manage_users',
                'display_name' => 'Manage Users',
                'guard_name' => 'web',
            ],
            [
                'title' => 'manage_roles',
                'display_name' => 'Manage Roles',
                'guard_name' => 'web',
            ],
            [
                'title' => 'manage_reported_users',
                'display_name' => 'Manage Reported Users',
                'guard_name' => 'web',
            ],
            [
                'title' => 'manage_conversations',
                'display_name' => 'Manage Conversations',
                'guard_name' => 'web',
            ],
            [
                'title' => 'manage_settings',
                'display_name' => 'Manage Settings',
                'guard_name' => 'web',
            ],
            [
                'title' => 'manage_meetings',
                'display_name' => 'Manage Meetings',
                'guard_name' => 'web',
            ],
        ];

        foreach ($permissions as $permission) {
            Permission::create($permission);
        }

        $roles = Role::all();
        foreach ($roles as $role) {
            $role->update(['guard_name' => 'web']);
            if ($role->name == 'Admin') {
                $role->syncPermissions(Permission::pluck('title'));
            } elseif ($role->name == 'Member') {
                $role->syncPermissions(['manage_conversations', 'manage_meetings']);
            } else {
                $role->syncPermissions(['manage_conversations']);
            }
        }
    }
}
