<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    function index(){
        $moviesData = Movie::all();
        $newMovie = new Movie;
        $columns = $newMovie->getColumns();
        return view("movies.index", ["moviesData" => $moviesData, "columnList" => $columns]);
    }
}
