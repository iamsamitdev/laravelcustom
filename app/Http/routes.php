<?php

Route::get('/',"InterController@index");
Route::get('about',"InterController@about");
Route::get('service',"InterController@service");
Route::get('portfolio',"InterController@portfolio");
Route::get('blog',"InterController@blog");
Route::get('contact',"InterController@contact");

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
