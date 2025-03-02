<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
use App\Http\Controllers\MyController;

Route::get('/my-page', [MyController::class, 'showView']);
