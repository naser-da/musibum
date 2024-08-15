<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tracks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('artist_id');
            $table->foreignId('album_id')->nullable()->comment('could be nullable if the track is a single release');
            $table->foreignId('cover_image_id')->nullable();
            $table->integer('duration')->comment('track length in seconds');
            $table->date('release_date');
            $table->integer('track_number')->nullable()->comment('track order in the album');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tracks');
    }
};
