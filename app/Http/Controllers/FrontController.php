<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class FrontController extends Controller
{
    public function homepage()
    {
        $albums = Album::all();

        return view('pages.front.homepage', compact('albums'));
    }
}
