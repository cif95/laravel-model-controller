<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $movies = Movie::all();

        return view ('guest.movies.index', [ 'movies' => $movies ]);
    }

    public function show($id) {

        $movie = Movie::findOrFail($id);

        return view('guest.movies.show', ['movie' => $movie]);
    }
}
