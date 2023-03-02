<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">


<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content=""/>
		<meta name="keywords" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>{{env('APP_NAME')}}</title>
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontend/images/apple-touch-icon-152x152.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontend/images/apple-touch-icon-120x120.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/images/apple-touch-icon-76x76.png')}}">
		<link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="{{asset('frontend/css/fontawesome.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">	
		<link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet">
				
		<!-- TEMPLATE CSS -->
		<link href="{{asset('frontend/css/spinner.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/greenery.css')}}" rel="stylesheet"> 	
 
		<!-- Style Switcher CSS -->		
		<link href="{{asset('frontend/css/apricot.css')}}" rel="alternate stylesheet" title="apricot-theme">  
		<link href="{{asset('frontend/css/blue.css')}}" rel="alternate stylesheet" title="blue-theme"> 
		<link href="{{asset('frontend/css/bluestone.css')}}" rel="alternate stylesheet" title="bluestone-theme"> 
		<link href="{{asset('frontend/css/coral.css')}}" rel="alternate stylesheet" title="coral-theme"> 
		<link href="{{asset('frontend/css/curacao.css')}}" rel="alternate stylesheet" title="curacao-theme"> 		
		<link href="{{asset('frontend/css/green.css')}}" rel="alternate stylesheet" title="green-theme"> 
		<link href="{{asset('frontend/css/magenta.css')}}" rel="alternate stylesheet" title="magenta-theme">
		<link href="{{asset('frontend/css/purple.css')}}" rel="alternate stylesheet" title="purple-theme"> 
		<link href="{{asset('frontend/css/violet.css')}}" rel="alternate stylesheet" title="violet-theme"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 	
		<!-- RESPONSIVE CSS -->
		<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">  
		{{-- <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">   --}}
		<link href="https://vanessarezende.com/frontend/css/custom.css" rel="stylesheet">  
		
		{{-- <script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/13f6aef395b835c3dab53aee6/369c2e5550e241ff9fdc12488.js");</script> --}}
		
				<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
		<meta name="google-site-verification" content="mxdN-__8pcUb6hwkW16_Lk32bBdVBxxQvwgddORpIM0" />

	</head> 

	<body> 

  @include('layouts.script')


		<!-- PRELOADER SPINNER
		============================================= -->		
		{{-- <div id="loader-wrapper">
			<div id="loader">
				<div class="cssload-spinner"></div>
			</div>
		</div> --}}




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">


			<!-- HEADER
			============================================= -->
			<header id="header" class="header">
				<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-tra hover-menu">
					<div class="container">


						<!-- LOGO IMAGE -->
						<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 268 x 60 pixels) -->
				 		<a href="/" class="navbar-brand logo-black1">
							 <img src="{{asset('frontend/images/logo-white.png')}}" width="264" height="60" alt="header-logo">
						</a>			 		
												


				 		<!-- Responsive Menu Button -->
				 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				   		 	<span class="navbar-bar-icon"><i class="fas fa-bars"></i></span>
				  		</button>


				  		<!-- Navigation Menu -->
				  		<div id="navbarSupportedContent" class="collapse navbar-collapse">				  			
					   		<ul class="navbar-nav ml-auto">
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/')}}">Home</a></li>		 
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/classes')}}">Classes</a></li>	
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/blog')}}">Blog</a></li>	
								{{-- <li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/contact')}}">Contact</a></li>	 --}}
					      	</ul>

					      	<!-- Header Social Icons -->	
					      	<span class="navbar-text">						      															
								<span class="header-socials clearfix">
									<span><a href="https://www.instagram.com/vanessarezendeyoga/" class="ico-instagram"><i class="fab fa-instagram"></i></a></span>
									<span><a href="https://www.youtube.com/channel/UCMYB7vVrh3CO2ViOphk3Ydw" class="ico-youtube"><i class="fab fa-youtube"></i></a></span>	
									
									<span><a href="https://www.yelp.com/biz/yoga-and-meditation-by-vanessa-rezende-marina-del-rey" class="ico-linkedin">
									
									    <img src="{{asset('frontend/images/yelp.png')}}" style="height: 100%;" alt="header-logo">
									</a></span>
									<!--<i class="fa fa-yelp" style="color:red"></i>-->


								</span>
						    </span>	

						    
					    </div>	<!-- End Navigation Menu -->


					</div>	  <!-- End container -->
				</nav>	   <!-- End navbar -->
			</header>	<!-- END HEADER -->



    
    @yield('main_content') 

			<!-- FOOTER-2
			============================================= -->
			<footer id="footer-2" class="pt-100 footer division">
				<div class="container">


					<!-- FOOTER CONTENT -->
					<div class="row">


						<!-- FOOTER INFO -->
						<div class="col-md-10 col-lg-4">
							<div class="footer-info mb-40">

								<!-- Footer Logo -->
								<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 268 x 60  pixels) -->
                                <a href="/">
								<img src="{{asset('frontend/images/logo-white.png')}}" width="264" height="60" alt="footer-logo">	
                                </a>						

								<!-- Text -->	
								<p>I’m so glad you found me because that means you have something (or a lot of things!) to say. Please reach out to me anytime! 
								</p> 

								<!-- Social Icons -->
								<div class="footer-socials-links">
									<ul class="foo-socials text-center clearfix">																			
										<li><a href="https://www.instagram.com/vanessarezendeyoga/" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
										<li><a href="https://www.youtube.com/channel/UCMYB7vVrh3CO2ViOphk3Ydw" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>	
										
										<li>
										    <a href="https://www.yelp.com/biz/yoga-and-meditation-by-vanessa-rezende-marina-del-rey" class="ico-linkedin">
									
									    <img src="{{asset('frontend/images/yelp.png')}}" style="width: 18px!important;" alt="header-logo">
									</a>
										 </li>
																	
										<!--
										<li><a href="#" class="ico-dribbble"><i class="fab fa-dribbble"></i></a></li>		
										<li><a href="#" class="ico-behance"><i class="fab fa-behance"></i></a></li>										
										<li><a href="#" class="ico-instagram"><i class="fab fa-instagram"></i></a></li>
										<li><a href="#" class="ico-pinterest"><i class="fab fa-pinterest-p"></i></a></li>		
										<li><a href="#" class="ico-google-plus"><i class="fab fa-google-plus-g"></i></a></li>									
										<li><a href="#" class="ico-youtube"><i class="fab fa-youtube"></i></a></li>
										<li><a href="#" class="ico-vk"><i class="fab fa-vk"></i></a></li>-->		
									</ul>									
								</div>	
							
							</div>	
						</div>	


						<!-- FOOTER PRODUCTS LINKS -->
						<div class="col-md-6 col-lg-3 offset-lg-1">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h5 class="h5-xs">Important Links</h5>

								<!-- Footer List -->
								<ul class="clearfix">									
									<li><p><a href="{{URL::to('/blog')}}">Blog</a></p></li>			
									<!-- <li><p><a href="#">Courses</a></p></li> -->
									<li><p><a href="{{URL::to('/classes')}}">Classes</a></p></li>						
								</ul>

							</div>
						</div>


						<!-- FOOTER COMPANY LINKS -->
						<div class="col-md-6 col-lg-3">
							<div class="footer-links mb-40">
							
								<!-- Title -->
								<h5 class="h5-xs">Get in Touch</h5>

								<!-- Footer Links -->
								<ul class="clearfix">
									<!-- <li><p><a href="#">About Us</a></p></li>		 -->
									<li><p><a href="{{URL::to('/contact')}}">Contact Us</a></p></li>
								</ul>

							</div>
						</div>


					


					</div>	  <!-- END FOOTER CONTENT -->


					<!-- FOOTER COPYRIGHT -->
					<div class="row bottom-footer">
						<div class="col-md-12">
							<div class="footer-copyright text-right">
								<p>&copy; Designed &#38; Developed By  <span><a href="https://dinocodela.com/" title="">Dino Code LA</a></span> 2021</p>
							</div>
						</div>
					</div>


				</div>	   <!-- End container -->										
			</footer>	<!-- END FOOTER-2-->




		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	

		<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('frontend/js/fontawesome.js')}}"></script>	
		<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.easing.js')}}"></script>
		<script src="{{asset('frontend/js/retina.js')}}"></script>	
		<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>	
		<script src="{{asset('frontend/js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.vide.min.js')}}"></script>
		<script src="{{asset('frontend/js/wow.js')}}"></script>	
		<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontend/js/contact-form.js')}}"></script>
		<script src="{{asset('frontend/js/register-form.js')}}"></script>	
		<script src="{{asset('frontend/js/quick-form.js')}}"></script>
		<script src="{{asset('frontend/js/comment-form.js')}}"></script>			
		<script src="{{asset('frontend/js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>	
				
		<!-- Custom Script -->		
		<script src="{{asset('frontend/js/custom.js')}}"></script>	

		<script>
			new WOW().init();
		</script>	
					
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="{{asset('frontend/js/html5shiv.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/js/respond.min.js')}}" type="text/javascript"></script>
		<![endif] -->
									
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->


		<script src="{{asset('frontend/js/changer.js')}}"></script>
		<script defer src="{{asset('frontend/js/styleswitch.js')}}"></script>	
		



	</body>

</html>	