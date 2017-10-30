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


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login', 'Auth\LoginController@authenticate');

// index
Route::middleware('jwt')->get('/movies', 'MovieController@index');
// show
Route::middleware('jwt')->get('/movies/{id}', 'MovieController@show');
// store
Route::middleware('jwt')->post('/movies', 'MovieController@store');
// update
Route::middleware('jwt')->put('/movies/{id}', 'MovieController@update');
// delete
Route::middleware('jwt')->delete('/movies/{id}', 'MovieController@destroy');
