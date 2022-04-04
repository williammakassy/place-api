<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// THIS IS FOR GET ALL PLACES 
Route::get('/places', 'App\Http\Controllers\PlaceController@index');

// THIS IS FOR ADDING NEW PLACE
Route::post('/places', 'App\Http\Controllers\PlaceController@store');

// THIS IS FOR GET A SPECIFIC PLACES
Route::get('/places/{id}', 'App\Http\Controllers\PlaceController@show');

// THIS IS FOR UPDATING A PLACE
Route::put('/updatePlace/{id}', 'App\Http\Controllers\PlaceController@updates');

// THIS IS FOR DELETING A PLACE
Route::delete('/places/{id}', 'App\Http\Controllers\PlaceController@destroy');