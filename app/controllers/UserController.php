<?php

class UserController extends BaseController {
	
	protected $layout = 'hdww.layout';
	
	public function login()
	{
		return View::make('hdww.sign');
	} 
	
	public function socialLogin()
	{
		$socialUserData = Session::get('socialUserData');
		
		if (!empty($socialUserData) && count($socialUserData)) {
		
			$socialUser = User::where('social_profile_id', '=', $socialUserData['social_profile_id'])->first();
		
			if (!empty($socialUser)) {
				$login = Auth::login($socialUser);
				return Redirect::action('SiteController@index');
			} 
		}	
		
		return Redirect::action('UserController@pullInfo', array('network' => 'facebook', 'action' => 'register'));
		
	}
	
	public function loginCheck()
	{
		
		$rules = array(
			'email' 	=> array('required'),
			'password' => array('required')
		);

		$remember = !empty(Input::get('remember_me')) ? (bool) Input::get('remember_me') : false;
		
		$validation = Validator::make(Input::all(), $rules);
		
		if ($validation->fails()) {
			return Redirect::action('UserController@login')->withInput()->withErrors($validation);
		}
		
		$auth = Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password')], $remember);
		
		if ($auth) {
				return Redirect::action('SiteController@index');
		} else {
			return Redirect::action('UserController@login')
					->with('noAuthMessage', 'Incorrect user or password')
					->withInput();
		}
		
	}
	
	public function register()
	{
		return View::make('hdww.register');
	}
	
	public function store()
	{
		
		$rules = array(
			'first_name' 				=> array('required'),
			'last_name'  				=> array('required'),
			'email'      				=> array('required', 'email', 'unique:users,email'),
			'password'   				=> array('required', 'min:5'),
			'terms_and_conditions'	=> array('required')
		);
	
		$validation = Validator::make(Input::all(), $rules);
	
		if ($validation->passes()) {
			
			$nickName = Input::get('nick_name', false);
			
			if (!$nickName) {
				$nickName = Input::get('first_name') . ' ' . Input::get('last_name');	
			}
			
			$user = new User();
			$user->first_name = Input::get('first_name');
			$user->last_name = Input::get('last_name');
			$user->nick_name = $nickName;
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->social_network_name = Input::get('social_network_name');
			$user->social_profile_id = Input::get('social_profile_id');
			$user->save();
			
			return Redirect::action('UserController@profile');
			
		} else {
			return Redirect::action('UserController@register')->withInput()->withErrors($validation);	
		}
	}
	
	public function profile()
	{
		return View::make('hdww.profile');	
	}
	
	public function logout()
	{
		Auth::logout();
		Session::reflash();
		return Redirect::action('SiteController@index');
	}
	
	public function pullInfo($network = false, $action = 'register')
	{
		if (!$network) {
			return false;	
		}
	
		$redirectTo 		 = '/user/register';
		$fbCallBack 		 = 'http://howdowework.com/pullInfo/facebook/action/' . $action;
		
		
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
				$fb 	= OAuth::consumer('Facebook', $fbCallBack);
				
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
		
		if ($action == 'login') {
			$redirectTo = '/user/social-login';	
			Session::put('socialUserData', $backFill);
		}
		
		return Redirect::to($redirectTo)->withInput($backFill);
	}
	
	
}
