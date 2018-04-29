<?php

Route::get('/', 'HomeController@index');
Route::get('/login', 'HomeController@login');
Route::post('/login', 'HomeController@login_checking');
Route::post('/logout', 'HomeController@logout');
Route::get('/update/{dust_bin_id}/{status}', 'DataController@update_status');
Route::get('/add-new-dustbin', 'DataController@index');
Route::post('/add-new-dustbin', 'DataController@create');
