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
    $data = [
        'Marco',
        'Antonio',
        'Luigi'
    ];
    return view('home', compact ('data'));
});

Route::get('/nothing', function () {
    return view('nothing');
});
