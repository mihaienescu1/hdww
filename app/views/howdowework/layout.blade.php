<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>howdowework.com | Change the vision of how we do our job</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        @include('howdowework.partials.stylesheets')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        @include('howdowework.partials.header')
        <div class="wrapper row-offcanvas row-offcanvas-left">
			 @include('howdowework.partials.sidebar-left')
            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
				  @include('howdowework.partials.content-header')
                <!-- Main content -->
                @section('index')
                @show
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        <!-- add new calendar event modal -->
        @include('howdowework.partials.javascripts')
    </body>
</html>