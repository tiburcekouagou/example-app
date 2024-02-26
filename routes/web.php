<?php

use Illuminate\Support\Facades\App;
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
    $timezone = config('app.timezone');
    $language = config('app.locale');
    dd($timezone, $language);
    return view('welcome');
});

Route::get('/user/{name?}', function(?string $name = 'John') {
    return 'user : ' . $name;
})->where('name', '[a-z\_\-]+');

Route::get('/user/{id}', function (string $id) {
    return 'id : ' . $id;
})->where('id', '[0-9]+');