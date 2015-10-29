<?php


	Route::get('/',"InterController@index");
	Route::get('about',"InterController@about");
	Route::get('service',"InterController@service");
	Route::get('portfolio',"InterController@portfolio");
	Route::get('blog',"InterController@blog");
	Route::get('contact',"InterController@contact");

	// Register member
	Route::get('register',"InterController@register");
	Route::post('register',"InterController@post_register");


// View member
Route::get('member', [
    'middleware' => 'auth',
    'uses' => 'InterController@member'
]);

//Route::get('book/samit', 'BookController@samit');

// BookController
Route::get('book/showbook','BookController@showbook');
Route::resource('book','BookController');

// Route to EmployeeController
Route::controller('backend','EmployeeController');
// Route::controller('backend', [
//     'middleware' => 'auth',
//     'uses' => 'EmployeeController'
// ]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
