<?php

class SiteController extends BaseController {
	
	protected $layout = 'hdww.layout';

	public function index()
	{
		
		$user = Social::facebook('/me');
		if (Social::check('facebook')) {
    		var_dump($user = Social::facebook('user'));
  		}
		
		return View::make('hdww.index');
	}

	public function about()
	{
		//return View::make('hdww.about');
			
	}
	
	public function how()
	{
		//return View::make('hdww.how');	
	}
}
