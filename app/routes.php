<?php
// Route::get('users','UserController@index');

//Eto route for Index talaga
Route::get('/', function()
{
	return View::make('tuptosea.index');
});


// // Route::get('/', 'FriendsController@getAddFriend');
// Route::post('/',function()
// {
// 	return View::make('tuptosea.index');
// });
// Route::get('/users','UsersController@index');

// Route::get('/', function()
// {
// 	User::create([
// 			'username' => 'RuelM',
// 			'email' => 'matitu3456@gmail.com',
// 			'password' => Hash::make('changeme')

// 		]);
// 	return 'Done!';
// });

//for testing 1/5/2015 
// Route::get('login', 'SessionsController@create');
// Route::get('logout', 'SessionsController@destroy');
// Route::resource('sessions', 'SessionsController');
// Route::resource('users','UsersController');
// Route::get('admin', function()
// {
// return 'Admin Page';
// })->before('auth');
