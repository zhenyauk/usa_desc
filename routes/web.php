<?php


Route::get('/', 'PageController@index')->name('page.main');


Route::get('{slug}', 'PageController@customPage');


Route::group(['prefix' => 'admin'], function () {
    Admin::routes();
});
