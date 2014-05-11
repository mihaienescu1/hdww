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
                <a href="{{ action('UserController@login') }}">Login</a>
            </li>
            <li>
                <a href="{{ action('UserController@register') }}">Register</a>
            </li>
            <li>
            
            	  <a href="#">Logout--</a>
            </li>
        </ul>
    </li>
</ul>

</nav>