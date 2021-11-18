<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
    $title = 'THIS IS LARAVEL!!!';
    return view('pages.welcome')->with('title', $title);
});

Route::get('/services', [PagesController::class, "services"]);
/* Route::get('/services/{id?}', [PagesController::class, "services"]); */
Route::get('/about', [PagesController::class, "about"]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('posts', PostsController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
