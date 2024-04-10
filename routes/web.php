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
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note', [NoteController::class, 'store'])->name('note.store');
Route::get('/note/{id}', [NoteController::class, 'show'])->name('note.show');
Route::get('/note/{id}/edit', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note', [NoteController::class, 'update'])->name('note.update');
Route::delete('/note/{id}', [NoteController::class, 'destroy'])->name('note.destroy');

// Route::resource('note', NoteController::class);