<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('calc');
// });

Route::get('/', [App\Http\Controllers\CalculatorController::class, 'index']);