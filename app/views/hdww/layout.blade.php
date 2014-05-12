<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css">
    {{ HTML::style('hdww/css/app.css') }}
    <title>howdowework.com</title>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    {{ HTML::script('hdww/js/app.js') }}
</head>
<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			@section('content')
           @show
			<div class="row clearfix">
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
				</div>
				<div class="col-md-4 column">
				</div>
			</div>
		</div>
	</div>
</div>
		
        <!--
        <div class="page-header">
            <div class="media">
              <span class="pull-right">
                {{ HTML::image('howdowework/img/logo-hdww.png', 'HowDoWeWork', array('class' => 'media-object logo')) }}
              </span>
              <span class="pull-left">
              		<h2>howdowework.com</h2>
                  <p>How can we change the way?</p>
              </span>
            </div>
            <h2>howdowework.com <br /><small>Subtext for header</small></h2>
            </div>
            -->
<script type="text/javascript">
$(function(){
	App.Init();
});
</script>
</body>
</html>
