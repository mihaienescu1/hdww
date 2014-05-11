<nav class="navbar navbar-default" role="navigation">
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
    <li class="active">
        <a href="#">About the project</a>
    </li>
    <li>
        <a href="#">How it works</a>
    </li>
    <li>
        <a href="#">News</a>
    </li>
    <!--
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
        <ul class="dropdown-menu">
            <li>
                <a href="#">Action</a>
            </li>
            <li>
                <a href="#">Another action</a>
            </li>
            <li>
                <a href="#">Something else here</a>
            </li>
            <li class="divider">
        </li>
            <li>
                <a href="#">Separated link</a>
            </li>
            <li class="divider">
            </li>
            <li>
                <a href="#">One more separated link</a>
            </li>
        </ul>
    </li>
    -->
</ul>
<!--
<form class="navbar-form navbar-left" role="search">
    <div class="form-group">
        <input type="text" class="form-control" />
    </div> <button type="submit" class="btn btn-default">Submit</button>
</form>
-->
<ul class="nav navbar-nav navbar-right">
	<li class="dropdown">
    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, Guest <strong class="caret"></strong></a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{ action('UserController@signIn') }}">Login</a>
            </li>
            <li>
                <a href="{{ action('UserController@signUp') }}">Register</a>
            </li>
        </ul>
    </li>
</ul>
<!--
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
         <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, Trif <strong class="caret"></strong></a>
        <ul class="dropdown-menu">
            <li>
                <a href="#">Settings</a>
            </li>
            <li>
                <a href="#">Another action</a>
            </li>
            <li>
                <a href="#">Something else here</a>
            </li>
            <li class="divider">
            </li>
            <li>
                <a href="#">Log Out</a>
            </li>
        </ul>
    </li>
</ul>
-->

</nav>