@extends('hdww.layout')

@section('content')
	@parent
    @include('hdww.partials.nav-header')
    <div class="row clearfix">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		{{ Form::open(array('url' => 'user/register', 'role' => 'form')) }}
			<h2>Please Sign Up <small>It's free and always will be.</small></h2>
			<hr class="colorgraph">
            <h5>Pull you account info from the following social networks: </h5>
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
           <h5>Or, complete the following form:</h5>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group @if ($errors->has('first_name')) has-error @endif">
                 {{ Form::text('first_name', null, array('class' => 'form-control input-lg', 'placeholder' => 'First Name', 'tabindex' => '1' )); }}
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group @if ($errors->has('last_name')) has-error @endif">
                        {{ Form::text('last_name', null, array('class' => 'form-control input-lg', 'placeholder' => 'Last Name', 'tabindex' => '2' )); }}
					</div>
				</div>
			</div>
			<div class="form-group @if ($errors->has('nick_name')) has-error @endif">
                {{ Form::text('nick_name', null, array('class' => 'form-control input-lg', 'placeholder' => 'Display Name', 'tabindex' => '3' )); }}
			</div>
			<div class="form-group @if ($errors->has('email')) has-error @endif">
                {{ Form::text('email', null, array('class' => 'form-control input-lg', 'placeholder' => 'Email Address', 'tabindex' => '4' )); }}
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
                
					<div class="form-group @if ($errors->has('password')) has-error @endif">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
                
					<div class="form-group @if ($errors->has('password')) has-error @endif">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg error" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-4 col-sm-3 col-md-3">
					<span class="button-checkbox">
						<button type="button" class="btn @if ($errors->has('t_and_c')) btn-danger @else btn-default @endif" data-color="info" tabindex="7">I Agree</button>
                        {{ Form::checkbox('t_and_c', 0, null, ['class'=>'hidden', 'id'=>'t_and_c']); }}
					</span>
				</div>
                
				<div class="col-xs-8 col-sm-9 col-md-9">
					 By clicking <strong class="label label-primary">Register</strong>, you agree to the <a href="#" data-toggle="modal" data-target="#t_and_c_m">Terms and Conditions</a> set out by this site, including our Cookie Use.
				</div>
			</div>
			<hr class="colorgraph">
          	
			<div class="row">
				<div class="col-md-4 col-xs-4 col-lg-4">
                {{ Form::hidden('social_profile_id', null) }}
                {{ Form::hidden('social_network_name', null) }}
                <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
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