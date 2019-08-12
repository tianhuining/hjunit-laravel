<?php
//路由文件
Route::get('/', 'HjunitController@index');
Route::post('/', 'HjunitController@store')->name('hjunit.store');
Route::get('test', 'TestController@index');

