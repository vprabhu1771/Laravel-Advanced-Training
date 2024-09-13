<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\PrintController;

Route::get('/print-receipt', [PrintController::class, 'test']);