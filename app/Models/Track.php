<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'artist_id',
        'album_id',
        'cover_image_id',
        'duration',
        'release_date'
    ];

    public function cover()
    {
        return $this->morphMany('App\Models\Image', 'imageable');
    }
}
