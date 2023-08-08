<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        User::factory()->create([
             'name' => 'Paul',
            'password' => bcrypt('password'),
            'email' => 'paul.hager888@gmail.com',
            'hasrole' => 'admin',
        ])->assignRole('admin');

        User::factory()->create([
            'name' => 'Peter',
            'password' => bcrypt('password'),
            'email' => 'peter@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Alex',
            'password' => bcrypt('password'),
            'email' => 'alex@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Rafi',
            'password' => bcrypt('password'),
            'email' => 'rafi@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Flo',
            'password' => bcrypt('password'),
            'email' => 'flo@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');
    }
}
