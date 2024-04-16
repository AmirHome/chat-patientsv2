<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $inputs = [
            ['title' => 'Admin', 'is_default' => 1],
            ['title' => 'Member', 'is_default' => 1],
        ];

        foreach ($inputs as $input) {
            Role::create($input);
        }

        $adminUser = User::whereEmail('amir.email@yahoo.com')->first();
        $adminRole = Role::where('title', '=', 'Admin')->first();
        $roles = [$adminRole->id];
        /** @var User $user */
        $adminUser->roles()->sync($roles);

        $users = User::where('id', '!=', $adminUser->id)->get();
        $memberRole = Role::where('title', '=', 'Member')->first();
        $memberRoles = [$memberRole->id];

        foreach ($users as $user) {
            /** @var User $user */
            $user->roles()->sync($memberRoles);
        }
    }
}
