<?php

use App\http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('series', [SeriesController::class, 'index']);
Route::get('series/criar', [SeriesController::class, 'create']);
