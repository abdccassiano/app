<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
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

Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
//Route::view('/portfolio', 'portfolio', compact('portfolio'))->name('portfolio');
//Route::get('/portfolio', PortfolioController::class)->name('portfolio');
Route::get('/portfolio', PortfolioController::class)->name('portfolio');
Route::view('/contact', 'contact')->name('contact');


//Route::view('/', 'home')->name('home');

/*Route::get('/', function () {
    $nombre = "Abdul";

    return view('home',compact('nombre'));
})->name('home');*/
