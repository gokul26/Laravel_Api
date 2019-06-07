<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// List Articles

Route::get('articles', 'ArticleController@index');

// show Articles
Route::get('article/{id}', 'ArticleController@show');

// edit Articles
Route::put('articles', 'ArticleController@store');

// create Articles
Route::post('articles', 'ArticleController@store');

// delte Articles
Route::delete('articles/{id}', 'ArticleController@destroy');