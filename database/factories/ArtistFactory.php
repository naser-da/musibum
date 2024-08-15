<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Image;

class ArtistFactory extends Factory
{
    protected $model = Artist::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Artist $artist) {
            Image::factory()->create([
                'imageable_type' => Artist::class,
                'imageable_id' => $artist->id,
            ]);

            $artist->update(['avatar_id' => $artist->id]);
        });
    }
}
