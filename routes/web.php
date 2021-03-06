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
/*Podemo modicar el idio desde rutas o desde el archivo app*/
//App::setlocale('es');

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
//Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
//Route::get('/portfolio', PortfolioController::class)->name('portfolio');
//Route::get('/portfolio', PortfolioController::class)->name('portfolio');
Route::get('/portfolio', 'App\Http\Controllers\PortfolioController@index')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');

Route::post('contact', 'App\Http\Controllers\MessagesController@store');

/*Route::resource('projects', 'App\Http\Controllers\PortfolioController');


//Route::view('/', 'home')->name('home');

/*Route::get('/', function () {
    $nombre = "Abdul";

    return view('home',compact('nombre'));
})->name('home');*/
