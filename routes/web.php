<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('FrontEnd.IndePage');
});

Route::get('/FrontEnd/login', [LoginController::class, 'log'])->name('login');
