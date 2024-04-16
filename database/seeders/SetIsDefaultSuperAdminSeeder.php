<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class SetIsDefaultSuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = User::whereEmail('amir.email@yahoo.com')->first();
        $superAdmin->update(['is_super_admin' => true]);
    }
}
