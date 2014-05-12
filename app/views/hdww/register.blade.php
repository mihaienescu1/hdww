@extends('hdww.layout')

@section('content')
	@parent
    @include('hdww.partials.nav-header')
    <div class="row clearfix">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 register-form">
		{{ Form::open(array('url' => 'user/register', 'role' => 'form')) }}
			<h4>Register <small>You can add feedback as a featured member.</small></h4>
			<hr class="colorgraph">
            <h5 class="text-center">Pull you account info from one of the following social networks :</h5>
            <br />
            <div class="row omb_socialButtons">
                <div class="col-md-4 col-xs-4 col-sm-2">
                    <a href="{{ action('UserController@pullInfo', array('facebook')) }}" class="btn btn-lg btn-block omb_btn-facebook">
                        <i class="fa fa-facebook visible-xs"></i>
                        <span class="hidden-xs">Facebook</span>
                    </a>
                </div>
                <div class="col-md-4 col-xs-4 col-sm-2">
                    <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                        <i class="fa fa-twitter visible-xs"></i>
                        <span class="hidden-xs">Twitter</span>
                    </a>
                </div>	
           	<div class="col-md-4 col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Google+</span>
		        </a>
	        	</div>	
           </div>
           <h5 class="text-center">- OR -</h5>
           <h5 class="text-center">Fill the form below :</h5>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group @if ($errors->has('first_name')) has-error @endif">
                  <label class="control-label" for="first_name">First Name:</label>
                  <div class="input-group">
                  	<span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                     {{ Form::text('first_name', null, array(
                                                          'class' => 'form-control input-lg',
                                                          'tabindex' => '1', 
                                                          'id' => 'first_name')
                      ); }}
                  </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group @if ($errors->has('last_name')) has-error @endif">
                    	<label class="control-label" for="last_name">Last Name:</label>
                      <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-edit"></i></span>
                        {{ Form::text('last_name', null, array(
                                                             'class' => 'form-control input-lg',
                                                             'tabindex' => '2',
                                                             'id' => 'last_name' )
                        ); }}
                        </div>
					</div>
				</div>
			</div>
			<div class="form-group @if ($errors->has('nick_name')) has-error @endif">
           	 <label class="control-label" for="nick_name">Nick Name:</label>
               <div class="input-group">
               <span class="input-group-addon"><i class="fa fa-user"></i></span>
               {{ Form::text('nick_name', null, array(
                                                        'class' => 'form-control input-lg', 
                                                      'tabindex' => '3',
                                                      'id' => 'nick_name' )
               ); }}
               </div>
			</div>
			<div class="form-group @if ($errors->has('email')) has-error @endif">
            	 <label class="control-label" for="email">Email:</label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                {{ Form::text('email', null, array(
                                                   'class' => 'form-control input-lg',
                                                   'tabindex' => '4',
                                                   'id' => 'email' )
                ); }}
                </div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
                
					<div class="form-group @if ($errors->has('password')) has-error @endif">
                  <label class="control-label" for="password">Password:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    {{ Form::password('password', array(
                                                       'class' => 'form-control input-lg',
                                                       'tabindex' => '5',
                                                       'id' => 'password' )
                    ); }}
                    </div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                
					<div class="form-group @if ($errors->has('password')) has-error @endif">
					<label class="control-label" for="password_confirm">Confirm:</label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    {{ Form::password('password_confirm', array(
                                                       'class' => 'form-control input-lg', 
                                                       'tabindex' => '5',
                                                       'id' => 'password_confirm' )
                    ); }}
                    </div>
					</div>
				</div>
              <div class="col-xs-12 col-sm-6 col-md-6 password-check-error password-message">
              	<p>Password does not match.</p>
              </div>
              <div class="col-xs-12 col-sm-6 col-md-6 password-check-match password-message">
              	<p>Password matches.</p>
              </div>
              @if ( $errors->count() > 0 )
              <div class="col-xs-12 col-sm-6 col-md-6 error-message">
              	<p>Please correct the following errors:.</p>
                	<ul>
                    @foreach( $errors->all() as $message )
                      <li>{{ $message }}</li>
                    @endforeach
                  </ul>
              </div>
              @endif
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn @if ($errors->has('t_and_c')) btn-danger @else btn-default @endif" data-color="info" tabindex="7">I Agree</button>
                        {{ Form::checkbox('terms_and_conditions', 0, null, ['class'=>'hidden', 'id'=>'terms_and_conditions']); }}
					</span>
				</div>
                
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to our <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a>.
				</div>
			</div>
			<hr class="colorgraph">
          	
			<div class="row">
				<div class="col-md-4 col-xs-4 col-lg-4">
                {{ Form::hidden('social_profile_id', 0) }}
                {{ Form::hidden('social_network_name', 0) }}
                <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" id="register" tabindex="7">
              </div>
			</div>
		{{ Form::close() }}
	</div>
</div>



<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div>
@stop