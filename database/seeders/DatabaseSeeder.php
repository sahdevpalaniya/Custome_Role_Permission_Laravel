<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User Seeder
        \App\Models\User::factory()->create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role_id' => 0,
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role_id' => 1,
        ]);

        // Role Seeder
        \App\Models\Role::create([
            'name' => 'Admin',
            'description' => 'admin Role',
        ]);
        \App\Models\Role::create([
            'name' => 'User',
            'description' => 'user Role',
        ]);

        // Permission Seeder
        \App\Models\Permission::create([
            'name' => 'view-user',
            'description' => 'this role is view user',
        ]);
        \App\Models\Permission::create([
            'name' => 'add-user',
            'description' => 'this role is add new user',
        ]);
        \App\Models\Permission::create([
            'name' => 'edit-user',
            'description' => 'this role is edit user',
        ]);
        \App\Models\Permission::create([
            'name' => 'delete-user',
            'description' => 'this role is delete user',
        ]);
    }
}