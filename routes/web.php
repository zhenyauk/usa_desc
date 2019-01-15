<?php


Route::get('/', 'PageController@index')->name('page.main');



Route::group(['prefix' => 'admin'], function () {
    Admin::routes();
});

Route::get('{slug}', 'PageController@customPage');