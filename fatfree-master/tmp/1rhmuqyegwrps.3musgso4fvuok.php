<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">function formatUang(harga){
		var hargaS = harga+"";
		var hasil ="";
		var counter = 1;
		for (var i = hargaS.length - 1; i >= 0; i--) {
			hasil = hargaS.charAt(i)+hasil;

			if(counter%3==0){
				hasil = ","+hasil;
			}
			counter++;
		}

		console.log(hasil);
		return hasil;
	}</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" href="ui/images/fav-icon.png" type="image/x-icon" />
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Skripsi Non-Scalability</title>

	<!-- Icon css link -->
	<link href="../../ui/css/font-awesome.min.css" rel="stylesheet">
	<link href="../../ui/vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
	<link href="../../ui/vendors/elegant-icon/style.css" rel="stylesheet">
	<!-- Bootstrap -->
	<link href="../../ui/css/bootstrap.min.css" rel="stylesheet">

	<!-- Rev slider css -->
	<link href="../../ui/vendors/revolution/css/settings.css" rel="stylesheet">
	<link href=".../../ui/vendors/revolution/css/layers.css" rel="stylesheet">
	<link href="../../ui/vendors/revolution/css/navigation.css" rel="stylesheet">

	<!-- Extra plugin css -->
	<link href="../../ui/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
	<link href="../../ui/vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="../../vendors/jquery-ui/jquery-ui.css" rel="stylesheet">

	<link href="../../ui/css/style.css" rel="stylesheet">
	<link href="../../ui/css/responsive.css" rel="stylesheet">

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
		<?php echo $this->render('HeaderAdmin.htm',NULL,get_defined_vars(),0); ?>
	</header>
	<!--================End Menu Area =================-->

	<!--================Categories Banner Area =================-->
	<!--<section class="categories_banner_area">
		<div class="container">
			<div class="c_banner_inner">
				<h3>simple product Layout 02</h3>
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop</a></li>
					<li class="current"><a href="product-details2.html">Simple Product 02</a></li>
				</ul>
			</div>
		</div>
	</section>-->
	<!--================End Categories Banner Area =================-->

	<!--================Product Details Area =================-->
	<?php foreach (($produk?:[]) as $prd): ?>
		<section class="product_details_area">
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<div class="product_details_slider">
							<div id="product_slider2" class="rev_slider" data-version="5.3.1.6">
								<ul>	<!-- SLIDE  -->
									<li >
										<!-- MAIN IMAGE -->
										<img src=<?= $prd['gambar'] ?> alt=""  width="1920" height="1080" data-lazyload=<?= $prd['gambar'] ?> data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
										<!-- LAYERS -->
									</li>

								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-7">
						<div class="product_details_text">
							<h3><?= $prd['nama'] ?></h3>
						<!--<ul class="p_rating">
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
							<li><a href="#"><i class="fa fa-star"></i></a></li>
						</ul>-->
						<!--ngambil dari database nilai-->

						<!--<div class="add_review">
							<a href="#">5 Reviews</a>
							<a href="#">Add your review</a>
						</div>-->
						<!--<h6>Available In <span>Stock</span></h6>-->
						<h4>
							Rp <script>document.write(formatUang(<?= $prd['harga'] ?>))</script></h4>
							<p><?= $prd['deskripsi'] ?></p>

						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endforeach; ?>
	<!--================End Product Details Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<nav class="tab_menu">
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Product Description</a>
					<!--<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews</a>-->


					<!--Bagian tampilan fitur review berdasakan status beli-->
					

				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<p><?= $prd['deskripsi'] ?></p>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<h4>Rocky Ahmed</h4>
					<ul>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
						<li><a href="#"><i class="fa fa-star"></i></a></li>
					</ul>
				</div>

			</div>
		</div>
	</section>
	<!--================End Product Details Area =================-->

	<!--================End Related Product Area =================-->
	<!--<section class="related_product_area">
		<div class="container">
			<div class="related_product_inner">
				<h2 class="single_c_title">Related Product</h2>
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="l_product_item">
							<div class="l_p_img">
								<img class="img-fluid" src="img/product/related-product/r-product-1.jpg" alt="">
							</div>
							<div class="l_p_text">
								<ul>
									<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
									<li><a class="add_cart_btn" href="#">To Cart</a></li>
									<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
								</ul>
								<h4>Run Tracksuit</h4>
								<h5>$85.50</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="l_product_item">
							<div class="l_p_img">
								<img class="img-fluid" src="img/product/related-product/r-product-2.jpg" alt="">
								<h5 class="new">New</h5>
							</div>
							<div class="l_p_text">
								<ul>
									<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
									<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
									<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
								</ul>
								<h4>Nike Men Trouser</h4>
								<h5><del>$130.50</del>  $110</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="l_product_item">
							<div class="l_p_img">
								<img class="img-fluid" src="img/product/related-product/r-product-3.jpg" alt="">
							</div>
							<div class="l_p_text">
								<ul>
									<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
									<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
									<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
								</ul>
								<h4>Nike Track Pants</h4>
								<h5>$250.00</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="l_product_item">
							<div class="l_p_img">
								<img class="img-fluid" src="img/product/related-product/r-product-4.jpg" alt="">
								<h5 class="sale">Sale</h5>
							</div>
							<div class="l_p_text">
								<ul>
									<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
									<li><a class="add_cart_btn" href="#">Add To Cart</a></li>
									<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
								</ul>
								<h4>Therma Pants</h4>
								<h5>$45.50</h5>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>-->
	<!--================End Related Product Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
	</footer>
	<!--================End Footer Area =================-->




	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="../../ui/js/jquery-3.2.1.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../../ui/js/popper.min.js"></script>
	<script src="../../ui/js/bootstrap.min.js"></script>
	<!-- Rev slider js -->
	<script src="../../ui/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="../../ui/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
	<script src="../../ui/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="../../ui/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
	<script src="../../ui/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="../../ui/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="../../ui/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="../../ui/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<!-- Extra plugin css -->
	<script src="../../ui/vendors/counterup/jquery.waypoints.min.js"></script>
	<script src="../../ui/vendors/counterup/jquery.counterup.min.js"></script>
	<script src="../../ui/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="../../ui/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
	<script src="../../ui/vendors/image-dropdown/jquery.dd.min.js"></script>
	<script src="../../ui/js/smoothscroll.js"></script>
	<script src="../../ui/vendors/isotope/imagesloaded.pkgd.min.js"></script>
	<script src="../../ui/vendors/isotope/isotope.pkgd.min.js"></script>
	<script src="../../ui/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
	<script src="../../ui/vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
	<script src="../../ui/vendors/jquery-ui/jquery-ui.js"></script>

	<script src="../../ui/js/theme.js"></script>
</body>
</html>
<script type="text/javascript">
	function incrementValue()
	{
		var value = parseInt(document.getElementById('number').value, 10);
		value = isNaN(value) ? 0 : value;
		value++;
		document.getElementById('number').value = value;
	}
	function decrementValue()
	{
		var value = parseInt(document.getElementById('number').value, 10);
		if(value!=0){
			value = isNaN(value) ? 0 : value;
			value--;
			document.getElementById('number').value = value;
		}
	}
	function openCity(evt, tabname) {
		var i, tabcontent, tablinks;
		tabcontent = document.getElementsByClassName("tabcontent");
		for (i = 0; i < tabcontent.length; i++) {
			tabcontent[i].style.display = "none";
		}
		tablinks = document.getElementsByClassName("tablinks");
		for (i = 0; i < tablinks.length; i++) {
			tablinks[i].className = tablinks[i].className.replace(" active", "");
		}
		document.getElementById(tabname).style.display = "block";

		evt.currentTarget.className += " active";
	}
	function myFunction() {
		var x = document.getElementById("myDIV");

		if (x.style.display === 'block') {
			x.style.display = 'none';
		} else {
			x.style.display = 'block';
		}
	}
	var slider = document.getElementById(<?= $prd['idproduk'] ?>);
	var output = document.getElementById("nilai");
	output.innerHTML = 0 ;

	slider.oninput = function() {
		output.innerHTML = this.value;
	}
	function popUpBeli() {
		alert("Pembelian Berhasil !!");
	}
	function popUpReview() {
		alert("Terima Kasih Atas Reviewnya !!");
	}
</script>
