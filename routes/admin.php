<?php

use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\Admin\TourController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->as('admin.')->middleware('isAdmin')->group(function() {
    Route::get('/', function() {
        return view('admin.dashboard');
    });

    Route::resource('places', PlaceController::class);
    Route::resource('tours', TourController::class);
});