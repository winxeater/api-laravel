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

Route::namespace('API')->name('api.')->group(function(){
    Route::prefix('/proprietarios')->group(function(){

        Route::get('/', 'ProprietarioController@index')->name('proprietarios');
        Route::get('/{id}', 'ProprietarioController@show')->name('single_proprietarios');

        Route::post('/', 'ProprietarioController@store')->name('store_proprietarios');
        Route::put('/{id}', 'ProprietarioController@update')->name('update_proprietarios');

        Route::delete('/{id}', 'ProprietarioController@delete')->name('delete_proprietarios');
    });
});
