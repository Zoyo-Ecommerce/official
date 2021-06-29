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
							<h1>FAQ</h1>
							<ol class="breadcrumb">
							
							</ol>
							<div class="divider-15 d-none d-xl-block"></div>
						</div>
					</div>
				</div>
			</section>


			<section class="s-pt-30 s-pb-20 s-pt-md-75 s-pb-md-50 faq2">
				<div class="divider-35 d-none d-xl-block"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<!-- tabs start -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="tab01" data-toggle="tab" href="#tab01_pane" role="tab" aria-controls="tab01_pane" aria-expanded="true">User interface</a>
								</li>
								

							</ul>
							<div class="tab-content ls ms">

								<div class="tab-pane fade show active" id="tab01_pane" role="tabpanel" aria-labelledby="tab01">

									<div id="accordion01" role="tablist">
										<div class="tab-block">
											<div role="tab" id="collapse01_header">
												<p class="text-normal">
													<a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
														What does Your Company Consulting do?
													</a>
												</p>
											</div>

											<div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
												<div class="card-body">
													<p>
														We consult you to let your bussiness online.We provide best services to manage your business digitally. 
													</p>

												</div>
											</div>
										</div>

										<div class="tab-block">
											<div role="tab" id="collapse03_header">
												<p class="text-normal">
													<a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
														What industries do you specialize in?
													</a>
												</p>
											</div>
											<div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion01">
												<div class="card-body">
													<p>
													Our company specilised in Android app development, web designing, ecommerce business. 
													</p>
												</div>
											</div>
										</div>

										<div class="tab-block">
											<div role="tab" id="collapse04_header">
												<p class="text-normal">
													<a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
														Can you guarantee that our plan will raise capital?
													</a>
												</p>
											</div>
											<div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
												<div class="card-body">
													<p>
													 Yes we have Bussiness Development team to consult you, manage your bussiness and help you to raise capital.													</p>
												</div>
											</div>
										</div>

								
										<div class="tab-block">
											<div role="tab" id="collapse07_header">
												<p class="text-normal">
													<a class="collapsed" data-toggle="collapse" href="#collapse07" aria-expanded="false" aria-controls="collapse07">
														Why should we hire a consultant to write our business plan?
													</a>
												</p>
											</div>
											<div id="collapse07" class="collapse" role="tabpanel" aria-labelledby="collapse07_header" data-parent="#accordion01">
												<div class="card-body">
													<p>
														Because our plans follows certain strategy.
													</p>
												</div>
											</div>
										</div>

										<div class="tab-block">
											<div role="tab" id="collapse08_header">
												<p class="text-normal">
													<a class="collapsed" data-toggle="collapse" href="#collapse08" aria-expanded="false" aria-controls="collapse08">
														What makes your business plans so special?
													</a>
												</p>
											</div>
											<div id="collapse08" class="collapse" role="tabpanel" aria-labelledby="collapse08_header" data-parent="#accordion01">
												<div class="card-body">
													<p>
												      We works for fullfilment of your desires. 
													</p>
												</div>
											</div>
										</div>

										<div class="tab-block">
											<div role="tab" id="collapse09_header">
												<p class="text-normal">
													<a class="collapsed" data-toggle="collapse" href="#collapse09" aria-expanded="false" aria-controls="collapse09">
														What makes your financial projections special?
													</a>
												</p>
											</div>
											<div id="collapse09" class="collapse" role="tabpanel" aria-labelledby="collapse09_header" data-parent="#accordion01">
												<div class="card-body">
													<p>
														We have Bussiness Analyst, BDO, RM and most specialist professionals in our team.
													</p>
												</div>
											</div>
										</div>

										<div class="tab-block">
											<div role="tab" id="collapse10_header">
												<p class="text-normal">
													<a class="collapsed" data-toggle="collapse" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
														How does the process work?
													</a>
												</p>
											</div>
											<div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="collapse10_header" data-parent="#accordion01">
												<div class="card-body">
													<p>
														We plan strategy, Design solution, Develop framework, provide support and services. 
													</p>
												</div>
											</div>
										</div>
									</div>
									<!-- collapse -->
								

							
									<!-- collapse -->
								</div>
							</div>
							<!-- tabs end-->
						</div>
					</div>
				</div>
			</section>

		

			<section class="s-py-100 ls faq-contact-icon">
				<div class="divider-20 d-none d-xl-block"></div>
				<div class="container">
					<div class="row c-mb-50 c-gutter-30">
						<div class="col-lg-4 text-center">
							<div class="box-icon">
								<div class="border-icon">
									<div class="teaser-icon">
										<img src="images/icon1.png" alt="">
									</div>
								</div>
								<h6>
									Call Us
								</h6>
								<p>
									<strong>New Users:</strong> 8171-111-796
									<br>
									<strong>Support:</strong> 8171-111-796
								</p>
							</div>
						</div>
						<div class="col-lg-4 text-center">
							<div class="box-icon">
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
									<br> 
									 hr@zoyoecommerce.com
								</p>
							</div>
						</div>
						<div class="col-lg-4 text-center">
							<div class="box-icon">
								<div class="border-icon">
									<div class="teaser-icon">
										<img src="images/icon7.png" alt="">
									</div>
								</div>
								<h6>
									Hours
								</h6>
								<p>
									<strong>Mon-sat:</strong> 9:30 AM - 5:30 PM
									<br>
									<strong>Sunday:</strong> Closed
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="divider-30 d-none d-xl-block"></div>
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