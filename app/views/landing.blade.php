<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>How do we work - Change the way we collaborate.</title>

    <!-- Bootstrap core CSS -->
   
	{{ HTML::style('landing/css/bootstrap.css') }}
    <!-- Add custom CSS here -->
   
    {{ HTML::style('landing/css/stylish-portfolio.css') }}
    {{ HTML::style('landing/font-awesome/css/font-awesome.min.css') }}
</head>

<body>
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
        <div class="vert-text">
            <h1>howdowework [.com]</h1>
            <h3>
                <em>We</em> give feedback to companies,
                <em>We</em> get better working conditions</h3>
                <h3>Coming Soon</h3>
            <a href="#about" class="btn btn-default btn-lg">what's this?</a>
        </div>
    </div>
    <!-- /Full Page Image Header Area -->

    <!-- Intro -->
    <div id="about" class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <h2>Are you happy with your employer ?</h2>
                    <p class="lead">
                    	If <strong>yes</strong>, just write a nice review! Maybe you have the chance to work with new like-minded colleagues.<br />
                    	If <strong>not</strong>, tell your story. Why should others suffer? Help Them!
                	</p>
                    <p class="lead">Your contribution is important. Together we can change the way we work.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /Intro -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <ul class="list-inline">
                        <li><a href="https://www.facebook.com/whymihu"><i class="fa fa-facebook fa-3x"></a></i>
                        </li>
                        <li><a href="https://www.twitter.com/mihai_enescu"><i class="fa fa-twitter fa-3x"></a></i>
                        </li>
                    </ul>
                    <div class="top-scroll">
                        <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
                    </div>
                    <hr>
                    <p>&copy; whymihu 2014</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Footer -->

    <!-- JavaScript -->
    {{ HTML::script('landing/js/jquery-1.10.2.js') }}
	{{ HTML::script('landing/js/bootstrap.js') }}
    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });
    </script>
    <script>
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>

</body>

</html>
