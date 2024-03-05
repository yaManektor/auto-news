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

Route::get('/', 'StaticController@index');
Route::get('/about-us', 'StaticController@about');

/*---------------------------------------------------------------------------------------*/
/*                                     Articles page                                     */
/*---------------------------------------------------------------------------------------*/
Route::get('/articles/add', 'ArticlesController@create');
Route::post('/articles/add', 'ArticlesController@store');

Route::get('/articles/{id}', 'ArticlesController@show');
Route::delete('/articles/{id}', 'ArticlesController@destroy');

Route::get('/articles/{id}/edit', 'ArticlesController@edit');
Route::put('/articles/{id}/edit', 'ArticlesController@update');

//Route::resource('/articles', 'ArticlesController');

//Comments form
Route::post('/articles/{id}', 'CommentsController@store');

/*---------------------------------------------------------------------------------------*/
/*                                       Shop page                                       */
/*---------------------------------------------------------------------------------------*/
Route::get('/shop', 'ItemsController@index');
Route::get('/shop/items/{id}', 'ItemsController@show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
