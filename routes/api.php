<?php

use Illuminate\Http\Request;

Route::get('/cats', 'ApiController@getCats');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
