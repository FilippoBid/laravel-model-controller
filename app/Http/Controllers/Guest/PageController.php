<?php

namespace App\Http\Controllers\Guest;
use App\Models\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
        $films = Movie::all();
        return view("index",compact("films")
            );
    }
}
