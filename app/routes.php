<?php
// Route::get('users','UserController@index');
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

//Homepage Routing
Route::get('/', function()
{
	return View::make('tuptosea.index');
});
Route::get('ProfessorSignUp', function()
{
	return View::make('tuptosea.professor.ProfessorSignUp');
});
// Route::get('logout', 'SessionsController@destroy');
// Route::resource('sessions', 'SessionsController');
// ===============================================
// LOGIN SECTION =================================
// ===============================================
// show the login pages
// Route::get('/login/professor', function()
// {
// 	return View::make('tuptosea.users.ProfessorLogin');
// });
// Route::get('/login/student', function()
// {
// 	return View::make('tuptosea.users.StudentLogin');
// });
Route::get('ProfessorLogin','UsersController@ProfessorLogin');
Route::get('StudentLogin','UsersController@StudentLogin');
// Route::get('login/professor','SessionsController@create')->where('users','2');
// use the function (app/controllers/SessionsController)
Route::resource('users','UsersController');



// Route::get('admin', function()
// {
// return 'Admin Page';
// })->before('auth');
