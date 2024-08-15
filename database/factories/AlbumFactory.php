<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genre;
use App\Models\Artist;
use App\Models\Image;
use App\Models\Album;

class AlbumFactory extends Factory
{
    protected $model = Album::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'genre_id' => Genre::inRandomOrder()->first()->id,
            'artist_id' => Artist::inRandomOrder()->first()->id,
            'release_date' => $this->faker->date(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Album $album) {
            
            $image = Image::factory()->create([
                'imageable_type' => Album::class,
                'imageable_id' => $album->id,
            ]);

            
            $album->update(['cover_image_id' => $image->id]);
        });
    }
}
