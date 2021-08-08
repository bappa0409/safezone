<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title><?php echo $title; ?> | SafeZone</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/chosen.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,600i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,500i,700" rel="stylesheet">

	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin_assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	
	<!-- Toastr -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/admin_assets/plugins/toastr/toastr.min.css">

</head>
<body class="index-opt-3">
	<div class="wrapper">
		<form id="block-search-mobile" method="get" class="block-search-mobile">
			<div class="form-content">
				<div class="control">
					<a href="#" class="close-block-serach"><span class="icon fa fa-times"></span></a>
					<input type="text" name="search" placeholder="Search" class="input-subscribe">
					<button type="submit" class="btn search">
						<span><i class="fa fa-search" aria-hidden="true"></i></span>
					</button>
				</div>
			</div>
		</form>

		<!-- HEADER -->
		<header class="site-header header-opt-1">
			<!-- header-top -->
			<div class="header-top">
				<div class="container">
					<!-- hotline -->
					<ul class="nav-top-left" >
						<li><a href="#">Welcome to SafeZone - Always First Delivery</a></li>
					</ul><!-- hotline -->
					<!-- heder links -->
					<ul class="nav-top-right krystal-nav">
						<li ><a href="#">Newsletter</a></li>
						<?php 
						$customer_id = $this->session->userdata('customer_id');

						if ($customer_id) {
							?>
							<li><a href="#">Account</a></li>
							<li><a href="<?php echo base_url()?>logout">Logout</a></li>
							<?php 
						}else{
							?>
							<li><a href="<?php echo base_url()?>login"><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
							<?php
						}
						?>
						
						
					</ul><!-- heder links -->
				</div>
			</div> <!-- header-top -->
			<!-- header-content -->
			<div class="header-content">
				<div class="container">
					<div class="row">
						<div class="col-md-2 nav-left">
							<!-- logo -->
							<strong class="logo">
								<a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>assets/images/logo.png" alt="logo"></a>
							</strong><!-- logo -->
						</div>
						<div class="col-md-8 nav-mind">
							<!-- block search -->
							<div class="block-search">
								<div class="block-content">
									<div class="categori-search  ">
										<select data-placeholder="All Categories" class="chosen-select categori-search-option">
											<option value="">All Categories</option>
											<optgroup label="- Electronics">
												<option>Batteries & Chargens</option>
												<option>Headphone & Headsets</option>
												<option>Mp3 Player & Acessories</option>
											</optgroup>
											<optgroup label="- Smartphone & Table">
												<option>Batteries & Chargens</option>
												<option>Headphone & Headsets</option>
												<option>Mp3 Player & Acessories</option>
											</optgroup>
											<optgroup label="- Electronics">
												<option>Batteries & Chargens</option>
												<option>Headphone & Headsets</option>
												<option>Mp3 Player & Acessories</option>
											</optgroup>
											<optgroup label="- Smartphone & Table">
												<option>Batteries & Chargens</option>
												<option>Headphone & Headsets</option>
												<option>Mp3 Player & Acessories</option>
											</optgroup>
										</select>
									</div>
									<div class="form-search">
										<form>
											<div class="box-group">
												<input type="text" class="form-control" placeholder="Searh entire store here...">
												<button class="btn btn-search" type="button"><span>search</span></button>
											</div>
										</form>
									</div>
								</div>
							</div><!-- block search -->
						</div>
						<div class="col-md-2 nav-right">
							<!-- block mini cart -->
							<div class="block-minicart dropdown">

								<a class="minicart" href="#">
									<span class="counter qty">
										<span class="cart-icon"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
										<span class="counter-number">2</span>
									</span>
									<span class="counter-your-cart">
										<span class="counter-label">Your Cart:</span>
										<span class="counter-price">$00.00</span>
									</span>
								</a>
								<div class="parent-megamenu">
									<form>
										<div class="minicart-content-wrapper" >
											<div class="subtitle">
												You have <span>2</span> item(s) in your cart
											</div>
											<div class="minicart-items-wrapper">
												<ol class="minicart-items">
													<li class="product-inner">
														<div class="product-thumb style1">
															<div class="thumb-inner">
																<a href="#"><img src="<?php echo base_url()?>assets/images/home1/c1.jpg" alt="c1"></a>
															</div>
														</div>
														<div class="product-innfo">
															<div class="product-name"><a href="#">Xbox One S Halo Collection Bund</a></div>
															<a href="#" class="remove"><i class="fa fa-times" aria-hidden="true"></i></a>
															<span class="price price-dark">
																<ins>$229.00</ins>
															</span>
														</div>
													</li>
													<li class="product-inner">
														<div class="product-thumb style1">
															<div class="thumb-inner">
																<a href="#"><img src="<?php echo base_url()?>assets/images/home1/c2.jpg" alt="c2"></a>
															</div>
														</div>
														<div class="product-innfo">
															<div class="product-name"><a href="#">Acer's Aspire S7 is a thin and portable...</a></div>
															<a href="#" class="remove"><i class="fa fa-times" aria-hidden="true"></i></a>
															<span class="price">
																<ins>$229.00</ins>
																<del>$259.00</del>
															</span>
														</div>
													</li>
												</ol>
											</div>
											<div class="subtotal">
												<span class="label">Total :</span>
												<span class="price">$480.00</span>
											</div>
											<div class="actions">
												<a class="btn btn-viewcart" href="#">View cart</a>
												<a class="btn btn-checkout" href="#">Checkout</a>
											</div>
										</div>
									</form>
								</div>
							</div><!-- block mini cart -->
							<a href="#" class="hidden-md search-hidden"><span class="pe-7s-search"></span></a>
							<a class="wishlist-minicart" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div><!-- header-content -->
			<!-- header-menu-bar -->
			<div class="header-menu-bar header-sticky">
				<div class="header-menu-nav menu-style-2">
					<div class="container">
						<div class="header-menu-nav-inner">
							<div id="box-vertical-megamenus" class="box-vertical-megamenus nav-toggle-cat">
								<h4 class="title active">
									<span class="btn-open-mobile home-page">
										<span></span>
										<span></span>
										<span></span>
									</span>
									<span class="title-menu">All Departments</span>   
								</h4>
								<div class="vertical-menu-content" >
									<span class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></span>
									<ul class="vertical-menu-list">
										<li><a href="#">Fashion Men’s</a></li>
										<li class="menu-item-has-children arrow item-megamenu">
											<a href="#" class="dropdown-toggle">Fashion Women’s</a>
											<span class="toggle-submenu hidden-md"></span>
											<div class="submenu parent-megamenu megamenu">
												<div class="row">
													<div class="submenu-banner submenu-banner-menu-1">
														<div class="col-md-4">
															<div class="dropdown-menu-info">
																<h6 class="dropdown-menu-title">Fashion WoMen’s</h6>
																<div class="dropdown-menu-content">
																	<ul class="menu">
																		<li class="menu-item"><a href="#">Leather Jackets</a></li>
																		<li class="menu-item"><a href="#">Handbags</a></li>
																		<li class="menu-item"><a href="#">Shoes</a></li>
																		<li class="menu-item"><a href="#">Jewelrys</a></li>
																		<li class="menu-item"><a href="#">Clothings</a></li>
																		<li class="menu-item"><a href="#">Macbook Air</a></li>
																		<li class="menu-item"><a href="#">Laptop Pro</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-md-4">
															<div class="dropdown-menu-info">
																<h6 class="dropdown-menu-title">Accessories</h6>
																<div class="dropdown-menu-content">
																	<ul class="menu">
																		<li class="menu-item"><a href="#">Hair Accessories</a></li>
																		<li class="menu-item"><a href="#">Bloves & Mittens</a></li>
																		<li class="menu-item"><a href="#">Hats</a></li>
																		<li class="menu-item"><a href="#">Tech Accessories</a></li>
																		<li class="menu-item"><a href="#">Head Set</a></li>
																		<li class="menu-item"><a href="#">Software</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="menu-item-has-children arrow item-megamenu">
											<a href="#" class="dropdown-toggle">Hand Bags</a>
											<span class="toggle-submenu hidden-md"></span>
											<div class="submenu parent-megamenu megamenu">
												<div class="row">
													<div class="submenu-banner submenu-banner-menu-1">
														<div class="col-md-4">
															<div class="dropdown-menu-info">
																<h6 class="dropdown-menu-title">Fashion WoMen’s</h6>
																<div class="dropdown-menu-content">
																	<ul class="menu">
																		<li class="menu-item"><a href="#">Leather Jackets</a></li>
																		<li class="menu-item"><a href="#">Handbags</a></li>
																		<li class="menu-item"><a href="#">Shoes</a></li>
																		<li class="menu-item"><a href="#">Jewelrys</a></li>
																		<li class="menu-item"><a href="#">Clothings</a></li>
																		<li class="menu-item"><a href="#">Macbook Air</a></li>
																		<li class="menu-item"><a href="#">Laptop Pro</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-md-4">
															<div class="dropdown-menu-info">
																<h6 class="dropdown-menu-title">Accessories</h6>
																<div class="dropdown-menu-content">
																	<ul class="menu">
																		<li class="menu-item"><a href="#">Hair Accessories</a></li>
																		<li class="menu-item"><a href="#">Bloves & Mittens</a></li>
																		<li class="menu-item"><a href="#">Hats</a></li>
																		<li class="menu-item"><a href="#">Tech Accessories</a></li>
																		<li class="menu-item"><a href="#">Head Set</a></li>
																		<li class="menu-item"><a href="#">Software</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li><a href="#">Accessories</a>
										</li>
										<li><a href="#">Shoes</a></li>
										<li class="menu-item-has-children arrow item-megamenu">
											<a href="#" class="dropdown-toggle">Laptop & Computers</a>
											<span class="toggle-submenu hidden-md"></span>
											<div class="submenu parent-megamenu megamenu">
												<div class="row">
													<div class="submenu-banner submenu-banner-menu-1">
														<div class="col-md-4">
															<div class="dropdown-menu-info">
																<h6 class="dropdown-menu-title">Laptop & computers</h6>
																<div class="dropdown-menu-content">
																	<ul class="menu">
																		<li class="menu-item"><a href="#">Laptops, Desktops & Monitors</a></li>
																		<li class="menu-item"><a href="#">Printers & Ink</a></li>
																		<li class="menu-item"><a href="#">Computer Accessories</a></li>
																		<li class="menu-item"><a href="#">Software</a></li>
																		<li class="menu-item"><a href="#">Macbook</a></li>
																		<li class="menu-item"><a href="#">Macbook Air</a></li>
																		<li class="menu-item"><a href="#">Laptop Pro</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<div class="col-md-4">
															<div class="dropdown-menu-info">
																<h6 class="dropdown-menu-title">Accessories</h6>
																<div class="dropdown-menu-content">
																	<ul class="menu">
																		<li class="menu-item"><a href="#">Accessories</a></li>
																		<li class="menu-item"><a href="#">Phone Batteries</a></li>
																		<li class="menu-item"><a href="#">Phone Charger</a></li>
																		<li class="menu-item"><a href="#">Phone Screen</a></li>
																		<li class="menu-item"><a href="#">Head Set</a></li>
																		<li class="menu-item"><a href="#">Software</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li><a href="#">Game & Consoles</a></li>
										<li><a href="#">Headphone</a></li>
										<li><a href="#">Video Games & Consoles</a></li>
										<li><a href="#">Car Electronic & GDP</a></li>
										<li><a href="#">Virtual Reality</a></li>
									</ul>
								</div>
							</div>

							<div class="header-menu header-menu-resize">

								<ul class="header-nav krystal-nav">
									<li class="btn-close hidden-md"><i class="fa fa-times" aria-hidden="true"></i></li>
									<li class="menu-item-has-children">
										<a href="<?php echo base_url()?>" class="dropdown-toggle">Home</a>
									</li>
									<li>
										<a href="<?php echo base_url()?>shop" class="dropdown-toggle">Shop</a>
										<span class="toggle-submenu hidden-md"></span>
									</li>
									<li>
										<a href="contact-us.html" class="dropdown-toggle">Contact Us</a>
										<span class="toggle-submenu hidden-md"></span>
									</li>
									<li>
										<a href="contact-us.html" class="dropdown-toggle">Blog</a>
										<span class="toggle-submenu hidden-md"></span>
									</li>
									<li>
										<a href="contact-us.html" class="dropdown-toggle">Account</a>
										<span class="toggle-submenu hidden-md"></span>
									</li>
									<li>
										<a href="<?php echo base_url()?>sign-up" class="dropdown-toggle">Sign Up</a>
										<span class="toggle-submenu hidden-md"></span>
									</li>
								</ul>
							</div>
							<span data-action="toggle-nav" class="menu-on-mobile hidden-md">
								<span class="btn-open-mobile home-page">
									<span></span>
									<span></span>
									<span></span>
								</span>
								<span class="title-menu-mobile">Main menu</span> 
							</span>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- end HEADER -->  

		


		<?php echo $website_content ?>




		<!-- FOOTER -->
		<footer class="site-footer footer-opt-2">
			<div class="footer-top full-width">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="newsletter-title">
								<h3 class="h3-newsletter">Sign up to Newsletter</h3>
								<span class="span-newsletter">Recevie $50 Coupon for fist Shopping.</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="newsletter-form">
								<form id="newsletter-validate-detail" class="form subscribe">
									<div class="control">
										<input type="email" placeholder="Enter your email address" id="newsletter" name="email" class="input-subscribe">
										<button type="submit" title="Subscribe" class="btn subscribe">
											<span>Sign Up</span>
										</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-column equal-container">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-sm-6 equal-elem">
							<h3 class="title-of-section">About Us</h3>
							<div class="contacts">
								<p class="contacts-info">Nullam tristique tortor nibh, in viverra libero sollicitudin ac. Suspendisse quis lacinia ipsum. Etiam scelerisque sit amet lectus quis lacinia. Sed condimentum auctor.</p>
								<span class="contacts-info info-address ">218 Fifth Avenue, HeavenTower NewYork City</span>
								<span class="contacts-info info-phone">(+68) 123 456 7890</span>
								<span class="contacts-info info-support">Hot-Support@Krystal.com</span>
								<div class="socials">
									<a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
									<a href="#" class="social"><i class="fa fa-youtube" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-6 equal-elem">
							<div class="links">
								<h3 class="title-of-section">My account</h3>
								<ul>
									<li><a href="#">Sign In</a></li>
									<li><a href="#">View Cart</a></li>
									<li><a href="#">My Wishlist</a></li>
									<li><a href="#">Terms & Conditions</a></li>
									<li><a href="#">Contact us</a></li>
									<li><a href="#">Track My Order</a></li>
									<li><a href="#">Help</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-2 col-sm-6 equal-elem">
							<div class="links">
								<h3 class="title-of-section">Information</h3>
								<ul>
									<li><a href="#">Specials</a></li>
									<li><a href="#">New products</a></li>
									<li><a href="#">Best sellers</a></li>
									<li><a href="#">Our stores</a></li>
									<li><a href="#">Contact us</a></li>
									<li><a href="#">Sitemap</a></li>
									<li><a href="#">Blog</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 equal-elem">
							<div class="links links-ins">
								<h3 class="title-of-section">Instagram</h3>
								<div class="content-ins">
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins1.jpg" alt="ins1"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins2.jpg" alt="ins2"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins3.jpg" alt="ins3"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins4.jpg" alt="ins4"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins5.jpg" alt="ins5"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins6.jpg" alt="ins6"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins7.jpg" alt="ins7"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins8.jpg" alt="ins8"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins9.jpg" alt="ins9"></a>
									<a href="#"><img src="<?php echo base_url()?>assets/images/detail/ins10.jpg" alt="ins10"></a>
								</div>
								<a href="#" class="view-more">View More<!-- <i class="fa fa-arrow-circle-right" aria-hidden="true"></i> --></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright full-width">
				<div class="container">
					<div class="copyright-right">                
						© Copyright 2017<span> Krystal</span>. All Rights Reserved.
					</div>
					<div class="pay-men">
						<a href="#"><img src="<?php echo base_url()?>assets/images/home1/pay1.jpg" alt="pay1"></a>
						<a href="#"><img src="<?php echo base_url()?>assets/images/home1/pay2.jpg" alt="pay2"></a>
						<a href="#"><img src="<?php echo base_url()?>assets/images/home1/pay3.jpg" alt="pay3"></a>
						<a href="#"><img src="<?php echo base_url()?>assets/images/home1/pay4.jpg" alt="pay4"></a>
					</div>
				</div>
			</div>
		</footer>
		<!-- end FOOTER -->    

	</div>
	<a href="#" id="scrollup" title="Scroll to Top">Scroll</a>


	<!-- jQuery -->    
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/wow.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.actual.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/chosen.jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.sticky.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.elevateZoom.min.js"></script>

	<script src="<?php echo base_url()?>assets/js/fancybox/source/jquery.fancybox.pack.js"></script>
	<script src="<?php echo base_url()?>assets/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
	<script src="<?php echo base_url()?>assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/function.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/Modernizr.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.plugin.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.countdown.js"></script>

	<!-- SweetAlert2 -->
	<script src="<?php echo base_url()?>assets/admin_assets/plugins/sweetalert2/sweetalert2.min.js"></script>

	<!-- Toastr -->
	<script src="<?php echo base_url()?>assets/admin_assets/plugins/toastr/toastr.min.js"></script>

	<script type="text/javascript">
		$(function() {
    // const Toast = Swal.mixin({
    //   toast: true,
    //   position: 'top-end',
    //   showConfirmButton: false,
    //   timer: 3000
    // });

    $('.swalDefaultSuccess').click(function() {
    	Toast.fire({
    		icon: 'success',
    		title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    	})
    });
    $('.swalDefaultInfo').click(function() {
    	Toast.fire({
    		icon: 'info',
    		title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    	})
    });
    $('.swalDefaultError').click(function() {
    	Toast.fire({
    		icon: 'error',
    		title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    	})
    });
    $('.swalDefaultWarning').click(function() {
    	Toast.fire({
    		icon: 'warning',
    		title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    	})
    });
    $('.swalDefaultQuestion').click(function() {
    	Toast.fire({
    		icon: 'question',
    		title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
    	})
    });
});

</script>

</body>
</html>