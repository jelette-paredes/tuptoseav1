<?php

class SessionsController extends \BaseController {

public function create()
{
	if(Auth::check()) return Redirect::to('/admin');
	 // return View::make('tuptosea.users.ProfessorLogin');
}
public function ProfessorLogin()
{
	return View::make('tuptosea.users.ProfessorLogin');
}
public function StudentLogin()
{
	return View::make('tuptosea.users.StudentLogin');
}
public function store()
{
	if (Auth::attempt(Input::only('email','password')))
	{
		return "Welcome ".Auth::user()->username;
	}
	return Redirect::back()->withInput();
} 

public function destroy()
{
	Auth::logout();
	return Redirect::route('sessions.create');
}

}
