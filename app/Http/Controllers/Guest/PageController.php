<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();

        return view('homepage', compact('movies'));
    }
}
