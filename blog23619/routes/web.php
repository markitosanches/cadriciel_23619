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
    return view('welcome');
});

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;

Route::get('/welcome', [HomeController::class, 'index']);
Route::get('/home', [BlogController::class, 'home']);
Route::get('/about', [BlogController::class, 'about']);
Route::get('/article', [BlogController::class, 'article']);
Route::get('/contact', [BlogController::class, 'contact']);
Route::post('/contact', [BlogController::class, 'contactForm']);

// avant laravel 8 
// Route::get('/welcome', 'HomeController@index');
