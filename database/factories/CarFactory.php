<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'license_plate' => $this->faker->unique()->bothify('??###'),
            'brand' => $this->faker->company,
            'model' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 1000, 100000),
            'mileage' => $this->faker->numberBetween(0, 200000),
            'seats' => $this->faker->numberBetween(2, 7),
            'doors' => $this->faker->numberBetween(2, 5),
            'production_year' => $this->faker->year,
            'weight' => $this->faker->numberBetween(1000, 3000),
            'color' => $this->faker->safeColorName,
            'image' => $this->faker->imageUrl(),
            'sold_at' => $this->faker->optional()->dateTime,
            'views' => $this->faker->numberBetween(0, 1000),
        ];
    }
}