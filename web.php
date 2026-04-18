<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExrController;
Route::get('/', function () {
    return view('welcome');
});




Route::get('/show/{value}', [ExrController::class, 'show']);
