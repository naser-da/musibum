<?php

namespace Database\Factories;

use App\Models\Track;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class TrackFactory extends Factory
{
    protected $model = Track::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'artist_id' => Artist::factory(),
            'album_id' => rand(0, 1) ? Album::factory() : null,
            'duration' => $this->faker->numberBetween(180, 300),
            'release_date' => $this->faker->date(),
            'track_number' => $this->faker->optional()->numberBetween(1, 15),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Track $track) {
            $image = Image::factory()->create([
                'imageable_type' => Track::class,
                'imageable_id' => $track->id,
            ]);

            $track->update(['cover_image_id' => $image->id]);
        });
    }
}
