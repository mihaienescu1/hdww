@extends('hdww.layout')

@section('content')
	@parent
    @include('hdww.partials.nav-header')
    <div class="row clearfix">
    	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<div class="container">
    <div class="omb_login">
    	<h3 class="text-center">Login or <a href="{{ action('UserController@register'); }}">Register</a></h3>
       <h4 class="text-center">Use one of the following social networks:</h4>
       <br />
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    <div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
			        <i class="fa fa-facebook visible-xs"></i>
			        <span class="hidden-xs">Facebook</span>
		        </a>
	        </div>
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
			        <i class="fa fa-twitter visible-xs"></i>
			        <span class="hidden-xs">Twitter</span>
		        </a>
	        </div>	
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Google+</span>
		        </a>
	        </div>	
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-6">	
                {{ Form::open(array('url' => 'user/login', 'role' => 'form', 'class'=>'omb_loginForm', 'autocompleted'=>'off')) }}
					<div class="input-group @if ($errors->has('password')) has-error @endif">
						<span class="input-group-addon"><i class="fa fa-user"></i></span>
                     {{ Form::text('email', null, array(
                                                   'class' => 'form-control',
                                                   'tabindex' => '1',
                                                   'id' => 'email',
                                                   'placeholder' => 'Your email' )
                		); }}
					</div>
					<span class="help-block"></span>
										
					<div class="input-group @if ($errors->has('password')) has-error @endif">
						<span class="input-group-addon"><i class="fa fa-lock"></i></span>
						{{ Form::password('password', array(
                                                       'class' => 'form-control',
                                                       'tabindex' => '2',
                                                       'id' => 'password',
                                                       'placeholder' => 'Your password' )
                    ); }}
					</div>
                    <!--<span class="help-block">Password error</span>-->
					<br />
                  @if (Session::has('incorrectPassword'))
                  <div class="row with-errors">
                  	<div class="col-xs-4 col-sm-4 col-md-6 col-md-offset-5">
                        <p class="text-center">User account unknown or password wrong.</p>
                      </div>
                  </div>
                  @endif  
                  @if ( $errors->count() > 0 )
                  <div class="row with-errors">
                  	<div class="col-xs-4 col-sm-4 col-md-6 col-md-offset-5">
                        <p class="text-center">Please correct the following errors :</p>
                          <ul>
                            @foreach( $errors->all() as $message )
                              <li>{{ $message }}</li>
                            @endforeach
                          </ul>
                      </div>
                  </div>
                  @endif
                  <div class="col-xs-4 col-sm-4 col-md-4 col-md-offset-4">
					<button class="btn btn-primary btn-block" type="submit">Login</button>
                  </div>
                  
				
			</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
                	Stay Authenticated
                  {{ Form::checkbox('remember_me', 0, null, ['id'=>'remember_me']); }}
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<a href="#">Forgot password?</a>
				</p>
			</div>
		</div>	   
        {{ Form::close() }} 	
	</div>

    </div>
    
@stop