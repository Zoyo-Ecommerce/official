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

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
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


			<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
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


			<section class="page_title ls s-py-50 corner-title ls invise overflow-visible">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>About Us</h1>
							<ol class="breadcrumb">
							
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="s-pt-30 s-pt-lg-50 ls about">
				<div class="divider-60 d-none d-xl-block"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-8 offset-md-2">
							<div class="main-content text-center">
								<h5>
									"We love what we do and we love helping our client succeed at what they want to do."
								</h5>
								<i class="rt-icon2-user"></i>
								<p>
								
								</p>

								<div class="divider-10 d-none d-xl-block"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="s-pt-0  s-pb-30 s-pt-lg-30 s-pb-lg-75 ls about-icon teaser-contact-icon">
				<div class="divider-10 d-none d-xl-block"></div>
				<div class="container">
					<div class="row c-mt-50 c-mt-lg-0">
						<div class="col-lg-4 text-center call-icon">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon1_about.png" alt="">
								</div>
							</div>
							<h6>
								Who We Are
							</h6>
							<div class="icon-content">
								<p>
									We are a team of IT and Business professionals who love partnering with good people and businesses to help them achieve online success.
								</p>
							</div>
						</div>
						<div class="col-lg-4 text-center write-icon">
							<div class="divider-30 d-none d-xl-block"></div>
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon2_about.png" alt="">
								</div>
							</div>
							<div class="icon-content">
								<h6>
									What We Do
								</h6>
								<p>
									 We create custom, functional websites, APP and focused on letting our clients business online.
								</p>
							</div>
						</div>
						<div class="col-lg-4 text-center visit-icon">
							<div class="border-icon">
								<div class="teaser-icon">
									<img src="images/icon3_about.png" alt="">
								</div>
							</div>
							<div class="icon-content">
								<h6>
									Why We Do It
								</h6>
								<p>
									Each of us loves what we do and we feel that spirit helps translate into the quality of our work. Working with clients who love their work combines into a fun, wonderful partnership for everyone involved.
								</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="s-pt-20 s-pt-lg-30 gallery-carousel main-gallery container-px-0">
				<div class="container-fluid">
					<div class="divider-5 d-none d-xl-block"></div>
					<div class="row">
						<div class="col-lg-12">
							<div class="owl-carousel gallery-owl-nav" data-autoplay="false" data-responsive-lg="5" data-responsive-md="3" data-responsive-sm="3" data-responsive-xs="2" data-nav="true" data-dots="false" data-filters=".gallery-filters" data-margin="0" data-loop="true">
								<div class="vertical-item item-gallery content-absolute text-center ds web-design">
									<div class="item-media">
										<img src="images/gallery/gallery-1.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">web-design</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds logo-design">
									<div class="item-media">
										<img src="images/gallery/gallery-2.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">logo-design</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds advertisement">
									<div class="item-media">
										<img src="images/gallery/gallery-3.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">advertisement</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds branding">
									<div class="item-media">
										<img src="images/gallery/gallery-4.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">branding</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds design">
									<div class="item-media">
										<img src="images/gallery/gallery-5.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">design</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
								<div class="vertical-item item-gallery content-absolute text-center ds photo">
									<div class="item-media">
										<img src="images/gallery/gallery-6.jpg" alt="">
										<div class="media-links">

										</div>
									</div>
									<div class="item-content">
										<h6>
											<a class="small-text" href="gallery-regular.html">photo</a>
										</h6>
										<h6>
											<a href="gallery-regular.html">Clothes Badge Design</a>
										</h6>
									</div>
								</div>
							</div>
							<!-- .owl-carousel-->
						</div>
					</div>
				</div>
			</section>
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


	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

</body>

</html>