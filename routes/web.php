<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render("Home");
});
// Route::get('/about', function () {
//     return Inertia("About",[
//         'user' =>'Devinsto',
//     ]);
// });
Route::inertia('/about',   "About", ['user' =>'Devinsto' ]);