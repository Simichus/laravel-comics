<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('comics', ['comics' => config('comics')]);
})->name('comics');


Route::get('/{id}', function ($id) {

    $comics = config('comics');
    $comic = $comics[$id];

    return view('comic', compact('comic'));
})->name('comic');
