<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create()->each(function ($user) {
            $cars = \App\Models\Car::factory(3)->create(['user_id' => $user->id]);
            $tags = \App\Models\Tag::factory(5)->create();

            foreach ($cars as $car) {
                $car->tags()->attach($tags->random(2));
            }
        });
    }
}