<?php

class PagesController extends \BaseController {

public function home()
 {
 	$name = 'Ruel';

 	return View::make('users')->with('name',$name);
 }
}
