<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'genre_id',
        'artist_id',
        'cover_image_id',
        'release_date'
    ];

    public function cover()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
