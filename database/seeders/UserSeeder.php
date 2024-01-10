<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRoule = Role::where('name', 'Michael')->first();
        $userRole = Role::where('name', 'Jan')->first();

        $admin = User::create([
            'name' => 'Michael',
            'is_admin' => 1,
            'email' => 'michael@test.de',
            'email_verified_at' => now(),
            'password' => 'test1234',
            'remember_token' => Str::random(10),
        ]);
        $hub_user = User::create([
            'name' => 'Jan',
            'is_admin' => 0,
            'email' => 'jan@test.de',
            'email_verified_at' => now(),
            'password' => 'test1234',
            'remember_token' => Str::random(10),
        ]);

        $admin->roles()->attach($adminRoule);
        $hub_user->roles()->attach($userRole);
    }

}
