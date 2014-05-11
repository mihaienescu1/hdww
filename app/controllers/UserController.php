<?php

class UserController extends BaseController {
	
	protected $layout = 'hdww.layout';
	
	public function signIn()
	{
		return View::make('hdww.sign');
	} 
	
	public function signUp()
	{
		return View::make('hdww.register');
	}
}