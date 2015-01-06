<?php

class UsersController extends \BaseController {
	protected $user;

	public function __construct(User $user)
	{
	 $this->user = $user;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = $this->user->all();

		return View::make('users',['users' => $users]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('create');
	
	}
	public function store()
	{
		$input = Input::all();
		if(! $this->user->fill($input)->isValid()){
			return Redirect::back()->withInput()->withErrors($this->user->messages);
		}else{
		$input['password'] = Hash::make($input['password']);
    	$this->user->fill($input);
		//if the user input is  valid then save it and assign associated role
	    unset($this->user->confirm_password);
	    $this->user->save();
		return Redirect::route('users.index');
		}
		
		
	} 
}
