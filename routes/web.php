<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\home_Controller;
use App\Http\Controllers\announcement_Controller;

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



// fallback
Route::fallback(function(){
    return view('404');
});
