<?php

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
    return view('welcome');
})->name('welcome');


Route::get('/galeria', function () {
    return view('galeria');
})->name('galeria');

Route::get('/conctatos', function () {
    return view('conctatos');
})->name('contactos');

Route::get('/preinscricao', function () {
    return view('preinscricao');
})->name('preinscricao');

Route::get('/Quemsomos', function () {
    return view('Quemsomos');
})->name('Quemsomos');
