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
    return view('welcome');
});

Route::get('/amineharit', function () {
    return view('amineharit');
});

Route::get('/nayefaguerd', function () {
    return view('nayefaguerd');
});

Route::get('/achrafhakimi', function () {
    return view('achrafhakimi');
});

Route::get('/hakimziyech', function () {
    return view('hakimziyech');
});

Route::get('/sofyanamrabat', function () {
    return view('sofyanamrabat');
});

Route::get('/sofyanboufal', function () {
    return view('sofyanboufal');
});