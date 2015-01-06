<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	public $timestamps = false;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $fillable = ['username' ,'email', 'password', 'confirm_password'];
	protected $table = 'users';
	public $messages;
	// public static $rules =  [
	// 'username' => 'required',
	// 'email' => 'required|unique:users|email',
	// 'password' => 'required|confirmed'
	// ];

	public static $rules = [
	        'username' => 'required', 
	        'email' => 'required|unique:users|email', 
	        'password' => 'required|alphaNum|min:6|max:20',
	        'confirm_password' => 'required|alphaNum|min:6|max:20|same:password'
	];
	/**
	 * The attributes excluded from the model's JSON form.
	 * 
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function IsValid()
	{
		$validation = Validator::make($this->attributes,static::$rules);
		if ($validation->passes())return true;
		$this->messages = $validation->messages();
		return false;
	}
	public function getRememberToken()
	{
	    return $this->remember_token;
	}

	public function setRememberToken($value)
	{
	    $this->remember_token = $value;
	}

	public function getRememberTokenName()
	{
	    return 'remember_token';
	}

}
