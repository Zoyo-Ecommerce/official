<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>ZOYO Ecommerce – IT Company</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<script     src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

		<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->
			<div class="header_absolute s-pb-30">
				<header class="page_header ds">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-xl-2 col-lg-3 col-11">
								<a href="./" class="logo text-center">
									<img src="images/logo.png" alt="">
								</a>
							</div>
							<div class="col-xl-8 col-lg-6 col-1 text-sm-center">
								<!-- main nav start -->
							<!-- BEGIN mynav.php INCLUDE -->
                          <?php include "./navmenu.html"; ?>
<!-- END mynav.php INCLUDE -->
								<!-- eof main nav -->
							</div>
							<div class="col-xl-2 col-lg-3 text-lg-left text-xl-right d-none d-lg-block">
								<div class="header_phone">
									<h6>
										8171-111-796
									</h6>
								</div>
							</div>
						</div>
					</div>
					<!-- header toggler -->
					<span class="toggle_menu">
						<span></span>
					</span>
				</header>
			</div>
			<span class="toggle_menu_side header-slide">
				<span></span>
			</span>

			<section class="page_slider main_slider">
				<div class="flexslider" data-nav="true" data-dots="false">
					<ul class="slides">
						<li class="ds text-center slide1">
							<span class="flexslider-overlay"></span>
							<span class="embed-responsive embed-responsive-16by9">
								<iframe src="https://www.youtube.com/embed/UBufeh1yv2c?feature=oembed&;showinfo=0&;autoplay=1&;controls=0&;mute=1&;loop=1&;playlist=UBufeh1yv2c" allowfullscreen=""></iframe>
							</span>
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeIn">
													<p class="text-uppercase intro_after_featured_word">welcome to</p>
												</div>

												<div class="intro_layer" data-animation="slideRight">
													<h2 class="text-uppercase intro_featured_word">
														it agency
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h3 class="intro_before_featured_word">
														<span class="color-main2">Web Design</span>,
														<span class="color-main3">Software Development </span> &
														<span class="color-main4">Branding</span>
													</h3>
												</div>
												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="process.php">Get Started</a>
												</div>
											</div>
											<!-- eof .intro_layers -->
										</div>
										<!-- eof .intro_layers_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li class="ds text-center slide2">
							<span class="flexslider-overlay"></span>
							<img src="images/slide_02.jpg" alt="" style="height: 750px;">
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers">
												<div class="intro_layer" data-animation="fadeIn">
													<h3 class="text-lowercase intro_before_featured_word">
														Online
													</h3>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase">
														Marketing
													</h2>

													<h4 class="text-uppercase">
														& <br>Products Selling
													</h4>
												</div>
												<div class="intro_layer" data-animation="pullDown">
													<p class="text-uppercase intro_after_featured_word">Solutions</p>
												</div>
												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="about.php">Get Started</a>
												</div>
											</div>

											<!-- eof .intro_layers -->
										</div>
										<!-- eof .intro_layers_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
						<li class="ds text-center slide3">
							<img src="images/slide_03.jpg" alt="" style="height: 750px;">
							<div class="container">
								<div class="row">
									<div class="col-12 itro_slider">
										<div class="intro_layers_wrapper">
											<div class="intro_layers text-left">
												<div class="intro_layer" data-animation="fadeInRight">
													<h2 class="text-uppercase intro_featured_word light">
														Digital
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase intro_featured_word bold">
														Marketing
													</h2>
												</div>
												<div class="intro_layer" data-animation="fadeIn">
													<h2 class="text-uppercase intro_featured_word">
														That works
													</h2>
												</div>

												<div class="intro_layer page-bottom" data-animation="expandUp">
													<a class="btn btn-maincolor" href="about.php">Get Started</a>
												</div>
											</div>
											<!-- eof .intro_layers -->
										</div>
										<!-- eof .intro_layers_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

					</ul>
				</div>
				<!-- eof flexslider -->
				
			</section>
			
			<section class="s-pt-30 s-pt-lg-50 s-pt-xl-25 ls about-home" id="about">
				<div class="divider-5 d-none d-xl-block"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
							<div class="main-content text-center">
								
								<h5>
									We are the one of the most effective Web Design Companies
								</h5>
								<p>
									Getting online is easy. Succeeding online is a different story. You’ll need more than just a beautiful website to stand out these days.
									<strong>Online marketing solutions.</strong> Conversion-based web design coupled with a lead generating marketing plan, your online success is inevitable.
								</p>
								<div class="divider-30"></div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
								<div>
									<div class="divider-40"></div>
									<button type="button" class="btn btn-outline-maincolor">Get Started</button>
									<div class="divider-40"></div>
								</div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
								<div class="divider-10 d-none d-xl-block"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="divider-10 d-block d-sm-none"></div>
			</section>

			<section class="s-pt-30 s-pb-3 service-item2 ls animate" id="services" data-animation="fadeInUp">
				<div class="container">
					<div class="row c-mb-50 c-mb-md-60">
						<div class="d-none d-lg-block divider-20"></div>
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_1-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										Marketing
									</h6>

									<p>
										We use strategic marketing tactics that have been proven to work.
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_2-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
									Development
									</h6>

									<p>
										Custom programming for most complex functions you can think.
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_3-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										Web Design
									</h6>

									<p>
										Pork chop pork belly hamburger prosciutto, fatback andouille flank.
									</p>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_4-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										SEO Optimization
									</h6>

									<p>
										Optimizing our web designs to rank on the first page of google is our specialty.
									</p>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_5-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										E-commerce
									</h6>

									<p>
										We build your online store using a flexible, modular platform that allows
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-12 col-md-6 col-lg-4">
							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_6-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										Branding
									</h6>

									<p>
										A solid brand strategy, logo and guidelines help you to get You recognized.
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
					</div>
					<div class="pink-line text-center">
						<img src="img/pink_line_big.png" alt="">
					</div>
				</div>
			</section>


			<section class="s-pt-100 s-pt-lg-130 ds process-part skew_right s-parallax top_white_line_big overflow-visible" id="steps">
				<div class="container">
					<div class="divider-65"></div>
					<div class="row align-items-center c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right">
								<h2 class="step-title">
									<span class="color-main">01</span>Strategy</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_1.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">We define your competition and target audience. Discover what is working in your online industry, then design your website accordingly.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part">
								<h2 class="step-title color1">
									<span class="color-main2">02</span>Design</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center">
								<img src="images/step_img_2.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">Color scheme, layout, sitemap, and style. We will bring your brand to life with a one of a kind masterpiece, built just for you.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4">
							<div class="step-left-part text-right part3">
								<h2 class="step-title">
									<span class="color-main3">03</span>Develop</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-center-part text-center">
								<img src="images/step_img_3.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="step-right-part">
								<p class="step-text">We turn your ideas into a reality. &our website is placed on a "development server" where you get to watch the whole process, live.</p>
							</div>
						</div>
					</div>

					<div class="row align-items-center right c-mb-20 c-mb-lg-60">
						<div class="col-12 col-lg-4  order-lg-3">
							<div class="step-left-part part4">
								<h2 class="step-title color1">
									<span class="color-main4">04</span>Support</h2>
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-2">
							<div class="step-center-part text-center last">
								<img src="images/step_img_4.jpg" alt="">
							</div>
						</div>
						<div class="col-12 col-lg-4 order-lg-1 text-right">
							<div class="step-right-part ">
								<p class="step-text">This is where you go live, to the world. Design, marketing, and maintenance; we'll be at your side for the life of your site.</p>
							</div>
						</div>
					</div>
					<div class="divider-10 d-block d-sm-none"></div>
					<div class="img-wrap text-center">
						<img src="img/vertical_line2.png" alt="">
					</div>
				</div>
			</section>


			<section class="ls ms book-item s-pb-30 s-pb-lg-25">
				<div class="corner corner-light"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="text-block text-center">
								<div class="btn-book-section overflow-visible">
									
								</div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
									<div class="divider-35"></div>
								</div>
								<h5>
									B2B Marketing & Web Design
									<br> Resources
								</h5>
								<p>
									B2B client acquisition is not the same as B2C– a B2B website, brand messaging and content marketing play a much different role. We understand the B2B marketing and sales funnel and the tactics that generate and nurture ideal client leads.
								</p>
								<div class="divider-30"></div>
								<div class="img-wrap text-center">
									<img src="img/vertical_line.png" alt="">
								</div>
							</div>
						</div>
						<div class="divider-40"></div>
						<div class="row c-gutter-30 c-mb-30 c-mb-lg-0 text-center book">
							<div class="col-12 col-lg-4">
								<div class="stage book-1 ls">
									<img src="images/book-1.jpg" alt="#">
									<div class="info">
										<header>
											<h6>
												<a href="#">B2B Marketing</a>
											</h6>
										</header>
										<p>
											
										</p>
										<p class="small-text link-a">
											<a href="https://forms.gle/LxCZ49MtP6wG2Tdm6">Contact US</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<div class="stage book-2 ds">
									<img src="images/book-2.jpg" alt="#">
									<div class="info">
										<header>
											<h6>
												<a href="#">Web Design</a>
											</h6>
										</header>
									
										<p class="small-text link-a">
											<a href="https://forms.gle/LxCZ49MtP6wG2Tdm6">Contact Us</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-12 col-lg-4">
								<div class="stage book-3 ls">
									<img src="images/book-3.jpg" alt="#">
									<div class="info">
										<header>
											<h6>
												<a href="#">Internship</a>
											</h6>
										</header>
										
										<p class="small-text link-a">
											<a href="https://forms.gle/CyNHKwjy5zTXg5yR7">Contact Us</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="s-pt-130 s-pt-md-50 ls text-section">
				<div class="divider-30"></div>
				<div class="container">
					<div class="row">
						<div class="text-center col-md-12 justify-content-center text-block">
							<img src="img/vertical_line.png" alt="">
							<div class="divider-35"></div>
							<div class="content">
								<h1>
									Lets Get Started
									<br> Your Project
								</h1>
								<p>
									We’ll help to achieve your goals and to grow business
								</p>
								<div class="divider-30"></div>
							</div>
							<img src="img/vertical_line.png" alt="">
							<div>
								<div class="divider-40"></div>
								<a href="https://forms.gle/LxCZ49MtP6wG2Tdm6" class="btn btn-outline-maincolor">Let’s Talk!</a>
								<div class="divider-30"></div>
							</div>
							<div class="img-wrap overflow-visible">
								<img src="img/vertical_line.png" alt="">
								<div class="divider-5 d-none d-xl-block"></div>
							</div>
						</div>

					</div>
				</div>
			</section>

			<section class="s-pt-50 s-pb-100 s-pt-lg-30 s-pb-lg-75 ls ms teaser-contact-icon main-icon s-parallax" id="contact">
				<div class="corner corner-inverse"></div>
				<div class="text-center img-wrap col-md-12">
					<img src="img/dark_line_short.png" alt="">
				</div>
				<div class="container">
					<div class="divider-10 d-none d-xl-block"></div>
					<div class="row c-mb-50 c-mb-lg-0">
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon1.png" alt="">
								</div>
							</div>
							<h6>
								Call Us
							</h6>
							<p>
								<strong>8171-111-796</strong>
								
							</p>
						</div>
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon3.png" alt="">
								</div>
							</div>
							<h6>
								Write Us
							</h6>
							<p>
								info@zoyoecommerce.com 
								<br>hr@zoyoecommerce.com
							</p>
						</div>
						<div class="col-lg-4 text-center">
							<div class="border-icon">
								<div class="teaser-icon">
									<a href="https://www.google.com/maps/d/u/0/edit?mid=1J5jzZy3-d3ilYH-ZbX8TEX35NeZZpq1h&usp=sharing"> <img src="images/icon2.png" alt=""></a>
									
								</div>
							</div>
							<h6>
							<a href="https://www.google.com/maps/d/u/0/edit?mid=1J5jzZy3-d3ilYH-ZbX8TEX35NeZZpq1h&usp=sharing">Visit Us</a>	
							</h6>
							<p>
							    Ring Road Way To Kali Mandir
                                <br>Bijnor ,UP
							</p>
						</div>
					</div>
					<div class="divider-30 d-none d-lg-block"></div>
					<div class="text-center img-wrap col-md-12 layout-2">
						<img src="img/dark_line_short.png" alt="">
					</div>
				</div>
				<div class="divider-10"></div>
			</section>

			<!--footer-->
			<!-- BEGIN footer.php INCLUDE -->
			<?php include "./footer.html"; ?>
<!-- END footer.php INCLUDE -->

			<section class="page_copyright light-copy cs s-py-20 s-py-lg-5 s-parallax copyright">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							Copyright reserved by Zoyo E-commerce Pvt Ltd
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->


	<script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>