<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Abdul Alim',
            'email' => 'abdulalim@example.com',
        ]);

        User::factory()->create([
            'name' => 'Al Razi',
            'email' => 'alrazi@example.com',
        ]);

        User::factory()->create([
            'name' => 'Juwel',
            'email' => 'juwel@example.com',
        ]);
    }
}
