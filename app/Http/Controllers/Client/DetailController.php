<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;

use App\Models\Tour;

class DetailController extends Controller
{
    const PATH_VIEW = "client.triptopia.";

    public function index(Tour $tour) 
    {
        $tour->load('galleries', 'extraFeatures');

        $tour->increment('view');

        return view(self::PATH_VIEW . 'detail', compact('tour'));
    }
}