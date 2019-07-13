<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pizza','PizzaController@index');

Route::post('/pizza','PizzaController@store');

Route::put('/pizza/{id}','PizzaController@update');

Route::delete('/pizza/{id}','PizzaController@destroy');
