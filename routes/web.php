<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render("Home");
// })->name('home');

// Route::get('/about', function () {
//     return Inertia("About",[
//         'user' =>'Devinsto',
//     ]);
// });
Route::inertia('/',  'Home')->name('home');
Route::inertia('/about',   "About", ['user' =>'Devinsto' ])->name('about');
Route::inertia('/register', 'Auth/Register')->name( 'register');
Route::post('/register',[AuthController::class , 'register']);