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

//To  register a new artisan
Route::post('/register', 'AuthController@register');

//for artisan login
Route::post('/login', 'AuthController@login');

//list all artisans
Route::get('users','UserController@index');


//list all artisans
Route::get('users','UserController@index');


//search for single artisan based on id
Route::get('user/{id}','UserController@show');



//Search query for artisan based on location and service

Route::get('/search', 'UserController@search');

