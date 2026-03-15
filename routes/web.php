<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RandomController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');});

 //   Route::get('/', function () {return "Hallo Welt";});

    Route::get('/about', [PageController::class, 'about']);

    Route::get('/me', [PageController::class, 'me']);

    Route::get('/impressum', [PageController::class, 'impressum']);

    Route::get('/contact', [PageController::class, 'contact'])
        ->name('pages.contact');


    Route::get('/inventory/{id}', [PageController::class, 'inventory']);

    Route::get('/features', [PageController::class, 'features']);

    Route::get('/items', [ItemController::class, 'index']);

    Route::get('/student', [RandomController::class, 'show'])->middleware(['auth'])->name('student');

    Route::post('/student', [RandomController::class, 'show'])->name('students.select')->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/mydemo',function(){
    return view('demo');
})->middleware(['auth'])->name('demo');

require __DIR__.'/auth.php';
