<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/', function () {
// return ('Hallo Welt!');
// });

Route::get('/about');

Route::get('/me');

Route::get('/impressum');

Route::get('/contact', [PageController::class, 'contact'])->name('pages.contact');


// Aufruf mit /inventory/1 => in der Funktion in ein Parameter id mit dem Inhalt 1 vorhanden
Route::get('/inventory/{id}', [PageController::class, 'inventory']);

Route::get('/image', function () {
    return view('image');
});

Route::get('/items', [ItemController::class, 'index']);

Route::get('/student', [\App\Http\Controllers\RandomController::class, 'show'])
    ->middleware('auth')->name('student');


Route::post('/student', [\App\Http\Controllers\RandomController::class, 'show'])
    ->middleware('auth')->name('students.select');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); // Zwiebelschicht

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/schools', [SchoolController::class, 'index']
)->middleware(['auth'])->name('schools.index');

Route::post('/schools', [SchoolController::class, 'store']
)->name('schule.store')->middleware(['auth']);

Route::get('/rooms', [\App\Http\Controllers\RoomController::class, 'index']
)->middleware(['auth'])->name('rooms.index');

Route::post('/rooms', [\App\Http\Controllers\RoomController::class, 'store']
)->name('room.store')->middleware(['auth']);

Route::delete('/rooms/{room}', [\App\Http\Controllers\RoomController::class, 'destroy'])
    ->name('rooms.destroy')->middleware(['auth']);

Route::get('/rooms/{room}/edit', [\App\Http\Controllers\RoomController::class, 'edit'])
    ->name('rooms.edit')->middleware(['auth']);

require __DIR__.'/auth.php';
