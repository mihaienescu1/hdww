<?php

class UserController extends BaseController {
	
	protected $layout = 'hdww.layout';
	
	public function login()
	{
		return View::make('hdww.sign');
	} 
	
	public function register()
	{
		return View::make('hdww.register');
	}
	
	public function store()
	{
		
		$rules = array(
			'first_name' => array('required'),
			'last_name'  => array('required'),
			'email'      => array('required', 'email', 'unique:users,email'),
			'password'   => array('required', 'min:5'),
			't_and_c'    => array('required')
		);
	
		$validation = Validator::make(Input::all(), $rules);
	
		if ($validation->fails())
		{
			//Validation has failed.
			return Redirect::action('UserController@register')->withInput()->withErrors($validation);
		}
	}
	
	public function profile()
	{
		//return View::make('hdww.profile');	
	}
	
	public function logout()
	{
			
	}
	
	public function pullInfo($network = false)
	{
		if (!$network) {
			return false;	
		}
		
		$backFill = array(
			'first_name', 
			'last_name', 
			'nick_name', 
			'email', 
			'social_network_name' => $network, 
			'social_profile_id'
		);
		
		switch ($network) {
			
			case 'facebook' :
			
				$code 	= Input::get('code');
				$fb 	= OAuth::consumer('Facebook', 'http://howdowework.com/pullInfo/facebook');
				
				if (!empty($code)) {
					
					$token = $fb->requestAccessToken($code);
					$result = json_decode($fb->request('/me'), true);
			
					if (!empty($result)) {
						
						$backFill['first_name'] 			= $result['first_name'];
						$backFill['last_name'] 			= $result['last_name'];
						$backFill['email'] 				= $result['email'];
						$backFill['social_profile_id'] 	= $result['id'];
						
					}
			
				} else {
					$url = $fb->getAuthorizationUri();	
					return Redirect::to((string) $url);
				}
				
			break;	
		}
		
		if (empty($backFill['nickname'])) {
			$backFill['nick_name'] = $backFill['first_name'] . ' ' . $backFill['last_name'];
		}
						
		return Redirect::action('UserController@register')->withInput($backFill);
	}
	
}
