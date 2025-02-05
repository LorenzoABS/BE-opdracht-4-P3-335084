<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AllergeenController;

Route::get('/', function () {
    return view('Home/index');
});

Route::get('/allergeen', [AllergeenController::class, 'index'])->name('allergeen.index');