<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\user_domicilio;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //User::factory(100)->has(UsersDomicilio::factory())->create();
        User::factory()->count(50)->create();
        user_domicilio::factory()->count(100)->create();
        //User::factory(100)->has(User_Domicilio::factory()->count(100))->create();
    }
}
