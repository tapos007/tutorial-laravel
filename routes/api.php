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


Route::prefix('v1')->group(function () {
    Route::get('/post','api\v1\PostController@index');
    Route::post('/post','api\v1\PostController@insert');
    Route::get('/post/{id}','api\v1\PostController@apost');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
