<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home_Controller;
use App\Http\Controllers\announcement_Controller;
use App\Http\Controllers\news_Controller;

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


Route::get('/', [home_Controller::class, 'index']);

Route::get('/announcements', [announcement_Controller::class, 'index']);
Route::post('/announcements', [announcement_Controller::class, 'dateFilter']);
Route::get('/announcements/{id}', [announcement_Controller::class, 'show']);

Route::get('/news', [news_Controller::class, 'index']);
Route::get('/news/{id}', [news_Controller::class, 'show']);
Route::post('/news', [news_Controller::class, 'dateFilter']);
Route::get('/allnews', [news_Controller::class, 'allnews']);



// fallback
Route::fallback(function(){
    return view('404');
});
