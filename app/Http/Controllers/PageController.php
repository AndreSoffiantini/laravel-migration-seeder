<?php

namespace App\Http\Controllers;

use App\Tour;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $tours = Tour::all();
        dd($tours);
        return view('welcome');
    }
    
}
