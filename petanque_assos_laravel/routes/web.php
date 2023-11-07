<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('shared/home');
})->name('home');

Route::get('/galeries', function () {
    return view('shared/galeries');
})->name('galeries');

Route::get('/agenda', function () {
    return view('shared/agenda');
})->name('agenda');

Route::get("/galeries/album/{id}", function ($id) {
    return view("shared/album", ["id" => $id]);
});

Route::get("/sponsors", function () {
    return view("shared/sponsors");
});
