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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('article_image')->group(function () {
    Route::get('create', 'App\Http\Controllers\ArticleImageController@create')->name('articleimage.create');
    Route::post('store', 'App\Http\Controllers\ArticleImageController@store')->name('articleimage.store');

});
