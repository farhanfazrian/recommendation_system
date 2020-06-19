<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="ui/images/fav-icon.png" type="image/x-icon" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Skripsi Non-Scalability</title>

	<!-- Icon css link -->
	<link href="ui/css/font-awesome.min.css" rel="stylesheet">
	<link href="ui/vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
	<link href="ui/vendors/elegant-icon/style.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="ui/css/bootstrap.min.css" rel="stylesheet">

	<!-- Rev slider css -->
	<link href="ui/vendors/revolution/css/settings.css" rel="stylesheet">
	<link href="ui/vendors/revolution/css/layers.css" rel="stylesheet">
	<link href="ui/vendors/revolution/css/navigation.css" rel="stylesheet">

	<!-- Extra plugin css -->
	<link href="ui/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
	<link href="ui/vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">

	<link href="ui/css/style.css" rel="stylesheet">
	<link href="ui/css/responsive.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<!--================Menu Area =================-->
	
	<header class="shop_header_area carousel_menu_area">
		<?php echo $this->render('HeaderUser.htm',NULL,get_defined_vars(),0); ?>
	</header>
	
	<!--================End Menu Area =================-->

	<!--================Home Carousel Area =================-->
	<section class="home_carousel_area">
		<div class="home_carousel_slider owl-carousel">
			<div class="item">
				<div class="h_carousel_item">
					<img src="ui/images/home-carousel/home-c-1.jpg" alt="">
					<div class="carousel_hover">
						<h3>mens bag</h3>
						<h4>We feature the best professional bags </h4>
						<h5>Including:</h5>
						<p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
						<a class="discover_btn" href="#">discover now</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="h_carousel_item">
					<img src="ui/images/home-carousel/home-c-2.jpg" alt="">
					<div class="carousel_hover">
						<h3>mens bag</h3>
						<h4>We feature the best professional bags </h4>
						<h5>Including:</h5>
						<p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
						<a class="discover_btn" href="#">discover now</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="h_carousel_item">
					<img src="ui/images/home-carousel/home-c-3.jpg" alt="">
					<div class="carousel_hover">
						<h3>mens bag</h3>
						<h4>We feature the best professional bags </h4>
						<h5>Including:</h5>
						<p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
						<a class="discover_btn" href="#">discover now</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="h_carousel_item">
					<img src="ui/images/home-carousel/home-c-4.jpg" alt="">
					<div class="carousel_hover">
						<h3>mens bag</h3>
						<h4>We feature the best professional bags </h4>
						<h5>Including:</h5>
						<p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
						<a class="discover_btn" href="#">discover now</a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="h_carousel_item">
					<img src="ui/images/home-carousel/home-c-5.jpg" alt="">
					<div class="carousel_hover">
						<h3>mens bag</h3>
						<h4>We feature the best professional bags </h4>
						<h5>Including:</h5>
						<p>Adidas, Century, Everlast, Fairtex, Fighting Sports, WaveMaster, Twins, Rival</p>
						<a class="discover_btn" href="#">discover now</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Home Carousel Area =================-->

	

	<!--================Latest Product isotope Area =================-->
	<section class="our_latest_product">
		<div class="container">
			<div class="s_m_title">
				<h2>Our Latest Product</h2>
			</div>
			<div class="l_product_slider owl-carousel">
				<div class="item">
					<div class="l_product_item">
						<div class="l_p_img">
							<img src="ui/images/product/epiphone-eguitar--limited-union-jack-sheraton.jpg" alt="">
						</div>
						<div class="l_p_text">
							<ul>
								<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
								<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
								<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
							</ul>
							<h4>Womens Libero</h4>
							<h5><del>$45.50</del>  $40</h5>
						</div>
					</div>
					<div class="l_product_item">
						<div class="l_p_img">
							<img src="ui/images/product/epiphone-eguitar-lp-studio-worn-ch.jpg" alt="">
						</div>
						<div class="l_p_text">
							<ul>
								<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
								<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
								<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
							</ul>
							<h4>Oxford Shirt</h4>
							<h5>$85.50</h5>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="l_product_item">
						<div class="l_p_img">
							<img src="ui/images/product/epiphone-es-339.jpg" alt="">
						</div>
						<div class="l_p_text">
							<ul>
								<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
								<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
								<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
							</ul>
							<h4>Travel Bags</h4>
							<h5><del>$45.50</del>  $40</h5>
						</div>
					</div>
					<div class="l_product_item">
						<div class="l_p_img">
							<img src="ui/images/product/es339.jpg" alt="">
						</div>
						<div class="l_p_text">
							<ul>
								<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
								<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
								<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
							</ul>
							<h4>High Heel</h4>
							<h5><del>$130.50</del>  $110</h5>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="l_product_item">
						<div class="l_p_img">
							<img src="ui/images/product/fender-strat-floyd-rose-bridge.jpg" alt="">
						</div>
						<div class="l_p_text">
							<ul>
								<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
								<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
								<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
							</ul>
							<h4>Summer Dress</h4>
							<h5>$45.05</h5>
						</div>
					</div>
					<div class="l_product_item">
						<div class="l_p_img">
							<img src="ui/images/product/fender-strat-floyd-rose-bridge.jpg" alt="">
						</div>
						<div class="l_p_text">
							<ul>
								<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
								<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
								<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
							</ul>
							<h4>Fossil Watch</h4>
							<h5>$250.00</h5>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="l_product_item">
						<div class="l_p_img">
							<img src="ui/images/product/g220dx.jpg" alt="">
						</div>
						<div class="l_p_text">
							<ul>
								<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
								<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
								<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
							</ul>
							<h4>Nike Shoes</h4>
							<h5><del>$130</del> $110</h5>
						</div>
					</div>
					<div class="l_product_item">
						<div class="l_p_img">
							<img src="ui/images/product/g250-bbl.jpg" alt="">
						</div>
						<div class="l_p_text">
							<ul>
								<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
								<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
								<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
							</ul>
							<h4>Ricky Shirt</h4>
							<h5>$45.05</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Our Latest Product Area =================-->

	<!--================Feature Big Add Area =================-->

	<!--================End Feature Big Add Area =================-->

	<!--================Product_listing Area =================-->

	<!--================End Product_listing Area =================-->

	<!--================Featured Product Area =================-->
	<section class="feature_product_area">
		<div class="container">
			<div class="f_p_inner">
				<div class="row">
					<div class="col-lg-3">
						<div class="f_product_left">
							<div class="s_m_title">
								<h2>Pop Essentials</h2>
							</div>
							<div class="f_product_inner" style="padding:0px;">  
								<div class="media">
									<div class="d-flex">
										<img src="ui/images/product/featured-product/SLASH.jpg" alt="" height="350" width="268">
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="fillter_slider_inner">
							<ul class="portfolio_filter">
								<li class="active" data-filter="*"><a href="#">men's</a></li>
								<li data-filter=".woman"><a href="#">Woman</a></li>
								<li data-filter=".shoes"><a href="#">Shoes</a></li>
								<li data-filter=".bags"><a href="#">Bags</a></li>
							</ul>
							<div class="fillter_slider owl-carousel">
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Featured Product Area =================-->
	<section class="feature_product_area">
		<div class="container">
			<div class="f_p_inner">
				<div class="row">
					<div class="col-lg-3">
						<div class="f_product_left">
							<div class="s_m_title">
								<h2>Pop Essentials</h2>
							</div>
							<div class="f_product_inner" style="padding:0px;">  
								<div class="media">
									<div class="d-flex">
										<img src="ui/images/product/featured-product/SLASH.jpg" alt="" height="350" width="268q">
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="fillter_slider_inner">
							<ul class="portfolio_filter">
								<li class="active" data-filter="*"><a href="#">men's</a></li>
								<li data-filter=".woman"><a href="#">Woman</a></li>
								<li data-filter=".shoes"><a href="#">Shoes</a></li>
								<li data-filter=".bags"><a href="#">Bags</a></li>
							</ul>
							<div class="fillter_slider owl-carousel">
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================Featured Product Area =================-->
	<section class="feature_product_area">
		<div class="container">
			<div class="f_p_inner">
				<div class="row">
					<div class="col-lg-3">
						<div class="f_product_left">
							<div class="s_m_title">
								<h2>Pop Essentials</h2>
							</div>
							<div class="f_product_inner" style="padding:0px;">  
								<div class="media">
									<div class="d-flex">
										<img src="ui/images/product/featured-product/SLASH.jpg" alt="" height="350" width="268q">
									</div>

								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<div class="fillter_slider_inner">
							<ul class="portfolio_filter">
								<li class="active" data-filter="*"><a href="#">men's</a></li>
								<li data-filter=".woman"><a href="#">Woman</a></li>
								<li data-filter=".shoes"><a href="#">Shoes</a></li>
								<li data-filter=".bags"><a href="#">Bags</a></li>
							</ul>
							<div class="fillter_slider owl-carousel">
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>
								<div class="item shoes">
									<div class="fillter_product_item bags">
										<div class="f_p_img">
											<img src="ui/images/product/fillter-product/fender-strat-floyd-rose-bridge.jpg" alt="">
											<h5 class="sale">Sale</h5>
										</div>
										<div class="f_p_text">
											<h5>Fender</h5>
											<h4>$45.05</h4>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Featured Product Area =================-->

	<!--================Form Blog Area =================-->
	<section class="from_blog_area">
		<div class="container">
			<div class="from_blog_inner">
				<div class="c_main_title">
					<h2>From The Blog</h2>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6">
						<a href="http://equipboard.com/" target="_blank">
							<div class="from_blog_item">
								<img class="img-fluid" src="ui/images/blog/from-blog/f-blog-1.jpg" alt="">
								<div class="f_blog_text">
									<h5>Equipboard</h5>
									<p>Equipboard</p>
									<h6>--</h6>
								</div>
							</div></a>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="from_blog_item">
								<img class="img-fluid" src="ui/images/blog/from-blog/f-blog-2.jpg" alt="">
								<div class="f_blog_text">
									<h5>fashion</h5>
									<p>Neque porro quisquam est qui dolorem ipsum</p>
									<h6>21.09.2017</h6>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6">
							<div class="from_blog_item">
								<img class="img-fluid" src="ui/images/blog/from-blog/f-blog-3.jpg" alt="">
								<div class="f_blog_text">
									<h5>fashion</h5>
									<p>Neque porro quisquam est qui dolorem ipsum</p>
									<h6>21.09.2017</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--================End Form Blog Area =================-->

		<!--================Footer Area =================-->
		<footer class="footer_area">
			<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
		</footer>
		<!--================End Footer Area =================-->




		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="ui/js/jquery-3.2.1.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="ui/js/popper.min.js"></script>
		<script src="ui/js/bootstrap.min.js"></script>
		<!-- Rev slider js -->
		<script src="ui/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script src="ui/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="ui/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
		<script src="ui/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
		<script src="ui/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<script src="ui/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script src="ui/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script src="ui/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
		<!-- Extra plugin css -->
		<script src="ui/vendors/counterup/jquery.waypoints.min.js"></script>
		<script src="ui/vendors/counterup/jquery.counterup.min.js"></script>
		<script src="ui/vendors/owl-carousel/owl.carousel.min.js"></script>
		<script src="ui/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
		<script src="ui/vendors/image-dropdown/jquery.dd.min.js"></script>
		<script src="ui/js/smoothscroll.js"></script>
		<script src="ui/vendors/isotope/imagesloaded.pkgd.min.js"></script>
		<script src="ui/vendors/isotope/isotope.pkgd.min.js"></script>
		<script src="ui/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
		<script src="ui/vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
		<script src="ui/vendors/jquery-ui/jquery-ui.js"></script>

		<script src="ui/js/theme.js"></script>

	</body>
	</html>

	<script type="text/javascript">
		function goToDetail(e){
			let id = e.currentTarget.dataset.id;
			console.log(e.currentTarget);
			window.location= `/detail_produk/${id}`;
		}
		document.querySelectorAll(".gallery").forEach(e=> {
			e.addEventListener("click",goToDetail);
		});

	</script>

