<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-briefcase"></span></a>
</div>
				
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
	<li>
        <a href="{{ action('SiteController@index') }}">Home</a>
    </li>
    <li>
        <a href="#">About the project</a>
    </li>
    <li>
        <a href="#">How it works</a>
    </li>
    <li>
        <a href="#">News</a>
    </li>
</ul>
<ul class="nav navbar-nav navbar-right">
@if (Auth::check())   
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, {{ Auth::user()->nick_name }} <strong class="caret"></strong></a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{ action('UserController@profile') }}">Your Profile</a>
            </li>
            <li class="divider"></li>
            <li>
                  <a href="{{ action('UserController@logout') }}">Logout</a>
            </li>
        </ul>
    </li>
@else
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, Guest <strong class="caret"></strong></a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{ action('UserController@login') }}">Login</a>
            </li>
            <li>
                <a href="{{ action('UserController@register') }}">Register</a>
            </li>
        </ul>
    </li>  
@endif
</ul>

</nav>