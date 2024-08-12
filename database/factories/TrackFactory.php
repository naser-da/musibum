<?php

namespace Database\Factories;

use App\Models\Track;
use App\Models\Artist;
use App\Models\Album;
use App\Models\CoverImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Track>
 */
class TrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker()->sentence(3),
            'artist_id' => Artist::factory(),
            'album_id' => Album::factory()->nullable(), 
            'cover_image_id' => CoverImage::factory(), 
            'duration' => $this->faker()->numberBetween(180, 300), // Duration in seconds
            'release_date' => $this->faker()->date(),
            'track_number' => $this->faker()->optional()->numberBetween(1, 15),
        ];
    }
}
