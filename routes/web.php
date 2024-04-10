<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/about', [WelcomeController::class, 'about']);
// uztaisam html lapu about kurā ir tikai viens h1 elements