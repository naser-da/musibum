<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            ['name' => 'Rock', 'color' => '#FF5733', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Pop', 'color' => '#FFC300', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jazz', 'color' => '#900C3F', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hip Hop', 'color' => '#581845', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Classical', 'color' => '#C70039', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Electronic', 'color' => '#DAF7A6', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Blues', 'color' => '#1F618D', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reggae', 'color' => '#27AE60', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Country', 'color' => '#F39C12', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'R&B', 'color' => '#8E44AD', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Folk', 'color' => '#F5B041', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Soul', 'color' => '#2E4053', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Disco', 'color' => '#D4AC0D', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Metal', 'color' => '#34495E', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Punk', 'color' => '#E74C3C', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Funk', 'color' => '#E67E22', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ska', 'color' => '#16A085', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gospel', 'color' => '#2980B9', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Latin', 'color' => '#C0392B', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Reggaeton', 'color' => '#AAB7B8', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'House', 'color' => '#7D3C98', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Trance', 'color' => '#1ABC9C', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Dubstep', 'color' => '#2980B9', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Techno', 'color' => '#95A5A6', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'K-Pop', 'color' => '#E91E63', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Afrobeat', 'color' => '#F4D03F', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ambient', 'color' => '#16A085', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Indie', 'color' => '#9B59B6', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Alternative', 'color' => '#3498DB', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Opera', 'color' => '#F5CBA7', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Grime', 'color' => '#7B7D7D', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Trap', 'color' => '#F39C12', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Synthwave', 'color' => '#FF00FF', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Drum and Bass', 'color' => '#1C2833', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lofi', 'color' => '#5D6D7E', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'World Music', 'color' => '#2ECC71', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
