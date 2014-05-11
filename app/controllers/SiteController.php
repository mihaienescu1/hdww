<?php

use Facebook\FaceookSession;

class SiteController extends BaseController {
	
	protected $layout = 'hdww.layout';

	public function index()
	{
		return View::make('hdww.index');
	}

	public function about()
	{	
	}
	
	public function how()
	{
	}
}
