<?php

Route::redirect('/', '/login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
