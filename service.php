<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>DotCreative – Web Design Agency HTML Template</title>
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
						<!-- <div class="search_modal affix-top">
                <a href="#" class="search_modal_button header-button">
                    <i class="fa fa-search"></i>
                </a>
            </div> -->
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
							<h1>Service</h1>
							<ol class="breadcrumb">
								<li><a href="https://forms.gle/LxCZ49MtP6wG2Tdm6">->Contact Us</a></li>
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="ls s-pt-30 s-pb-20 s-pb-lg-50 s-pt-lg-50 c-gutter-60 c-mb-40 c-mb-md-60 service-item2">
				<div class="d-none d-lg-block divider-65"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6">

							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_1-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="#">Digital Marketing Website</a>
									</h6>

									<p>
										We use strategic marketing tactics to build your website . 
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-md-4 col-sm-6">

							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_2-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Development</a>
									</h6>

									<p>
										We have certified programmer to develop your website.
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-md-4 col-sm-6">

							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_3-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Web Design</a>
									</h6>

									<p>
										We have designers who works for maintaining intractiveness of your website.
									</p>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-md-4 col-sm-6">

							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_4-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">SEO Optimization</a>
									</h6>

									<p>
										Optimizing our web designs to rank on the first page of google is our specialty.
									</p>
								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-md-4 col-sm-6">

							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_5-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Ecommerce</a>
									</h6>

									<p>
										We build your online store using a flexible, modular platform that allows
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="col-md-4 col-sm-6">

							<div class="vertical-item text-center">
								<div class="item-media">
									<img src="images/service/service_icon_6-1.png" alt="">
								</div>
								<div class="item-content">
									<h6>
										<a href="service-single1.html">Branding</a>
									</h6>

									<p>
										A solid brand strategy, logo and guidelines help you to get You recognized.
									</p>

								</div>
							</div>
						</div>
						<!-- .col-* -->
						<div class="d-none d-lg-block divider-10"></div>
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


</body>

</html>