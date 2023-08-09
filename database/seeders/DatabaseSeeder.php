<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Game;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Carbon;
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
            'email' => 'peter.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Alex',
            'password' => bcrypt('password'),
            'email' => 'alex.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Rafi',
            'password' => bcrypt('password'),
            'email' => 'rafi.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Flo',
            'password' => bcrypt('password'),
            'email' => 'flo.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Isi',
            'password' => bcrypt('password'),
            'email' => 'isi.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Lorenz',
            'password' => bcrypt('password'),
            'email' => 'lorenz.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Max K',
            'password' => bcrypt('password'),
            'email' => 'max.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Raphi',
            'password' => bcrypt('password'),
            'email' => 'raphi.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Andi',
            'password' => bcrypt('password'),
            'email' => 'andi.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        User::factory()->create([
            'name' => 'Benni',
            'password' => bcrypt('password'),
            'email' => 'benni.email@gmail.com',
            'hasrole' => 'user',
        ])->assignRole('user');

        Game::factory()->create();
    }
}
