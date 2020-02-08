<?php

Route::any('/', 'BaseController@index')->name('welcome');


Route::get('/login', 'AuthController@login')->name('login');
Route::any('/login-submit', 'AuthController@loginSubmit')->name('loginSubmit');
Route::any('/register', 'AuthController@register')->name('register');
Route::any('/register-submit', 'AuthController@registerSubmit')->name('registerSubmit');


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['admin']], function () {
        
    });
    Route::group(['middleware' => ['user']], function () {
        
    });
});


Route::post('/contact-us', 'HomeController@contactUs')->name('contactUs');
Route::get('/refresh-token', 'HomeController@refreshToken')->name('refreshToken');
Route::post('/upload-file', 'HomeController@uploadFile')->name('uploadFile');
