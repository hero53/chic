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
    return view('welcome');
});

Route::get('/index','page\PageController@index')->name('public.index');
Route::get('/commande','page\PageController@commande')->name('public.commande');
Route::get('/contact','page\PageController@contact')->name('public.contact');
