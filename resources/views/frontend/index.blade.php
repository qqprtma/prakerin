<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Tracking Covid </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- Fonts -->
        <!-- Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

        <!-- CSS -->

        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">


        <link rel="stylesheet" href="{{asset('infinity/css/themefisher-fonts.css')}}">
        <link rel="stylesheet" href="{{asset('infinity/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('infinity/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('infinity/css/animate.css')}}">
        <link rel="stylesheet" href="{{asset('infinity/css/style.css')}}">
        <!-- Responsive Stylesheet -->
        <link rel="stylesheet" href="{{asset('infinity/css/responsive.css')}}">
    </head>

    <body id="body">

    	<div id="preloader">
    		<div class="book">
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		  <div class="book__page"></div>
    		</div>
    	</div>

	    <!--
	    Header start
	    ==================== -->
        <div class="container">
            <nav class="navbar navbar-fixed-top  navigation " id="top-nav">
                <a class="navbar-brand" href="#">

                </a>

              <button class="navbar-toggler hidden-lg-up float-lg-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" >
                  <i class="tf-ion-android-menu"></i>
              </button>
              <div class="collapse navbar-toggleable-md" id="navbarResponsive">
                <ul class="nav navbar-nav menu float-lg-right" id="top-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">HOME</a>
                  </li>
                </ul>
              </div>
            </nav>
         </div>


	    <section class="hero-area bg-1">
	        <div class="container">
	            <div class="row">
	                <div class="col-md-7">
	                    <div class="block">
	                        <h1 class="wow fadeInDown" data-wow-delay="0.3s" data-wow-duration=".2s">Tracking Covid</h1>
	                        <p class="wow fadeInDown" data-wow-delay="0.5s" data-wow-duration=".5s">Selamat Datang Di Live Data TrackingCovid</p>
	                        <div class="wow fadeInDown" data-wow-delay="0.7s" data-wow-duration=".7s">
	                        	<a class="btn btn-home" href="#about" role="button">Get Started</a>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-5 wow zoomIn">
	                    <div class="block">
	                        <div class="counter text-center">
	                            <ul id="countdown_dashboard">
	                                <li>
	                                    <div class="dash days_dash">
	                                        <span class="dash_title"><h2>Positif</h2></span>
                                            <span data-toggle="counter-up">{{ $positif }}</span>
                                            <p>Orang</p>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="dash hours_dash">
                                            <span class="dash_title"><h2>Sembuh</h2></span>
                                            <span data-toggle="counter-up">{{ $sembuh }}</span>
                                            <p>Orang</p>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="dash minutes_dash">
                                            <span class="dash_title"><h2>Meninggal</h2></span>
                                            <span data-toggle="counter-up">{{ $meninggal }}</span>
                                            <p>Orang</p>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                </div>
	            </div><!-- .row close -->
	        </div><!-- .container close -->
	    </section><!-- header close -->



        <!--
        About start
        ==================== -->

        </section><!-- #about close -->

        <section clas="wow fadeInUp">
        	<div class="map-wrapper">
        	</div>
        </section>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <p>Copyright &copy; <a href="http://www.Themefisher.com">Themefisher</a>| All right reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>


        <!-- Js -->
        <script src="{{asset('infinity/js/vendor/jquery-2.1.1.min.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous "></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
        <script src="{{asset('infinity/js/vendor/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{asset('infinity/js/jquery.lwtCountdown-1.0.js')}}"></script>
        <script src="{{asset('infinity/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('infinity/js/jquery.validate.min.js')}}"></script>
        <script src="{{asset('infinity/js/jquery.form.js')}}"></script>
        <script src="{{asset('infinity/js/jquery.nav.js')}}"></script>
        <script src="{{asset('infinity/js/wow.min.js')}}"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script> -->
        <script src="{{asset('infinity/js/main.js')}}"></script>

    </body>
</html>
