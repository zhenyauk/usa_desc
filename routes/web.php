<?php


Route::get('/', 'PageController@index')->name('page.main');

Route::get('/job/new', 'JobController@register');
Route::post('/job/add', 'JobController@postAdd');
Route::post('/job/add-reg', 'JobController@postAddReg');



Route::group(['prefix' => 'admin'], function () {
    Admin::routes();
});

Route::get('{slug}', 'PageController@customPage');