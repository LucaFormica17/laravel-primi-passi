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
    $message = 'Hello World!';
    return view('my-app', compact('message'));
})->name('homepage');

Route::get('/man', function () {
    $mans = ['Alessio','Simone','Matteo','Vittorio','Christian'];
    return view('man', compact('mans'));
})->name('man');

Route::get('/woman', function () {
    $womans = ['Giulia','Federica','Silvia','Chiara','Gloria'];
    return view('woman', compact('womans'));
})->name('woman');
