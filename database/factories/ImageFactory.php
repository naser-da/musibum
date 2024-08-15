<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'filename' => $this->faker->word() . '_' . $this->faker->numberBetween(1, 1000) . '.' . $this->faker->randomElement(['jpg', 'png', 'gif']), 
            'user_id' => 1,
        ];
    }
}
