<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Car;
use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Comment;
use App\Models\Mechanic;
use App\Models\Owner;
use App\Models\Phone;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Abdul Alim',
            'email' => 'abdulalim@bikrompur.com',
        ]);

        User::factory()->create([
            'name' => 'Al Razi',
            'email' => 'alrazi@bikrompur.com',
        ]);

        User::factory()->create([
            'name' => 'Juwel',
            'email' => 'juwel@bikrompur.com',
        ]);

        User::factory()->create([
            'name' => 'Miya Munshi',
            'email' => 'munshi@bikrompur.com',
        ]);

        User::factory(10)->create();
        Phone::factory(10)->create();
        Role::factory(3)->create();
        // RoleUser::factory(14)->create();
        Post::factory(10)->create();
        Category::factory(3)->create();
        Tag::factory(10)->create();
        // CategoryPost::factory(10)->create();
        // PostTag::factory(10)->create();
        Comment::factory(40)->create();
        Mechanic::factory(10)->create();
        Car::factory(10)->create();
        Owner::factory(10)->create();
    }
}
