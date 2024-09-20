<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\Tour;

class HomeController extends Controller
{
    const PATH_VIEW = "client.triptopia.";

    public function index() {
        $tours = Tour::all();
        return view(self::PATH_VIEW . 'home', compact('tours'));
    }
}