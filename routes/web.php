<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function(){
    return "Hallo Welt";
});

Route::get('/about',   [PageController::class, 'about']);

Route::get('/me',  [PageController::class, 'me']);

Route::get('/impressum', [PageController::class, 'impressum']);

Route::get('/contact', [PageController::class, 'contact'])
    ->name('pages.contact');


Route::get('/inventory/{id}', [PageController::class, 'inventory']);

Route::get('/features',  [PageController::class, 'features']);

Route::get('/items', [ItemController::class, 'index']);
