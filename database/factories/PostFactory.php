<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'user_id' => $this->faker->numberBetween(1, 10),
           'title' => $this->faker->sentence,
           'body' => $this->faker->text(500),
           'created_at' => $this->faker->dateTimeBetween('2023-01-01', '2023-03-17'),
           'deleted_at' => $this->faker->randomElement([
               null,
               $this->faker->dateTimeBetween('2023-03-18', '2023-03-19'),
           ])
        ];
    }
}
