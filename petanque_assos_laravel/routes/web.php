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
    return view('home');
});

Route::get("/galeries", function () {
    return view("galeries");
});

Route::get("/agenda", function () {
    return view("agenda");
});

Route::get("/galeries/album/{id}", function ($id) {
    return view("album", ["id" => $id]);
});
