<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WelcomeController::class, 'welcome']);
Route::get('/about', [WelcomeController::class, 'about']);

Route::get('/note', [NoteController::class, 'index'])->name('note.index');