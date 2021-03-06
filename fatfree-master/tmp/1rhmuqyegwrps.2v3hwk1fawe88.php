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
        //khusus harga ratusan ribu
        if(hargaS.length==6){
          hasil = hasil.substring(1, hasil.length);
        }

        return hasil;
      }</script>
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
      <div id="cobain"></div>
      <!--================Menu Area =================-->

      <header class="shop_header_area carousel_menu_area">
        <?php echo $this->render('HeaderAdmin.htm',NULL,get_defined_vars(),0); ?>
      </header>

      <!--================End Menu Area =================-->

      <!--================Home Carousel Area =================-->
      <section class="home_carousel_area">
		<!--<div class="home_carousel_slider owl-carousel">
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
		</div>-->

   <div class="main_slider_area">
    <div id="home_box_slider" class="rev_slider" data-version="5.3.1.6">
      <ul>
        <li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="ui/images/home-slider/kevinads.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="ui/images/home-slider/kevinads.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>


          <!-- LAYER NR. 1 -->
          <div class="slider_text_box first_text">
            <div class="tp-caption tp-resizeme first_text" 
            data-x="['left','left','left','left','left','left']" 
            data-hoffset="['60','60','60','60','20','0']" 
            data-y="['top','top','top','top','top','top']" 
            data-voffset="['70','70','70','70','70','70']" 
            data-fontsize="['48','48','48','48','48','48']"
            data-lineheight="['56','56','56','56','56','48']"
            data-width="['none','none','none','none','none']"
            data-height="none"
            data-whitespace="nowrap"
            data-type="text" 
            data-responsive_offset="on" 
            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
            data-textAlign="['left','left','left','left','left','left']"
            >Fender</div>
          </div>
        </li>
        <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="ui/images/home-slider/slashads.jpeg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="ui/images/home-slider/slashads.jpeg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
          <!-- LAYERS -->

          <!-- LAYER NR. 1 -->
          <div class="slider_text_box first_text">
            <div class="tp-caption tp-resizeme first_text" 
            data-x="['left','left','left','left','left','left']" 
            data-hoffset="['60','60','60','60','20','0']" 
            data-y="['top','top','top','top','top','top']" 
            data-voffset="['70','70','70','70','70','70']" 
            data-fontsize="['48','48','48','48','48','48']"
            data-lineheight="['56','56','56','56','56','48']"
            data-width="['none','none','none','none','none']"
            data-height="none"
            data-whitespace="nowrap"
            data-type="text" 
            data-responsive_offset="on" 
            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
            data-textAlign="['left','left','left','left','left','left']"
            >Gibson</div>


          </div>
        </li>
        <li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="ui/images/home-slider/slashads.jpeg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
          <!-- MAIN IMAGE -->
          <img src="ui/images/home-slider/slashads.jpeg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
          <!-- LAYERS -->
          <!-- LAYERS -->

          <!-- LAYER NR. 1 -->
          <div class="slider_text_box first_text">
            <div class="tp-caption tp-resizeme first_text" 
            data-x="['left','left','left','left','left','left']" 
            data-hoffset="['60','60','60','60','20','0']" 
            data-y="['top','top','top','top','top','top']" 
            data-voffset="['70','70','70','70','70','70']" 
            data-fontsize="['48','48','48','48','48','48']"
            data-lineheight="['56','56','56','56','56','48']"
            data-width="['none','none','none','none','none']"
            data-height="none"
            data-whitespace="nowrap"
            data-type="text" 
            data-responsive_offset="on" 
            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
            data-textAlign="['left','left','left','left','left','left']"
            ><p style="color: white">Best Winter <br> Collection</p></div>

            <div class="tp-caption tp-resizeme secand_text" 
            data-x="['left','left','left','left','left','left']" 
            data-hoffset="['60','60','60','60','20','0']" 
            data-y="['top','top','top','top']" data-voffset="['190','190','190','190','190','190']"  
            data-fontsize="['14','14','14','14','14','14']"
            data-lineheight="['24','24','24','24','24']"
            data-width="['300','300','300','300','300']"
            data-height="none"
            data-whitespace="normal"
            data-type="text" 
            data-responsive_offset="on"
            data-transform_idle="o:1;"
            data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
            data-textAlign="['left','left','left','left','left','left']"
            >There is no one who loves to be bread, who looks after it and wants to have it, simply because it is pain. 
          </div>

          <div class="tp-caption tp-resizeme third_btn" 
          data-x="['left','left','left','left','left','left']" 
          data-hoffset="['60','60','60','60','20','0']" 
          data-y="['top','top','top','top']" data-voffset="['290','290','290','290','290','290']" 
          data-width="none"
          data-height="none"
          data-whitespace="nowrap"
          data-type="text" 
          data-responsive_offset="on" 
          data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:[100%];s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
          data-textAlign="['left','left','left','left','left','left']">
          <a class="checkout_btn" href="#">shop now</a>
        </div>
      </div>
    </li>

  </ul>
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
                   <div class="l_p_img"  >
                      <img src="ui/images/product/epiphone-eguitar--limited-union-jack-sheraton.jpg" alt="">
                  </div>
                  <div class="l_p_text"  data-id="67">
                      <ul>                  
                         <li><a class="add_cart_btn" href="#">Detail</a></li>                     
                     </ul>
                     <h4>EPIPHONE  LIMITED UNION JACK SHERATON</h4>
                     <h5 id = "uang">
                      Rp <script>document.getElementById('uang').innerHTML =(formatUang(15120000))</script></h5>

                  </div>
              </div>
              <div class="l_product_item">
                 <div class="l_p_img">
                    <img src="ui/images/product/epiphone-eguitar-lp-studio-worn-ch.jpg" alt="">
                </div>
                <div class="l_p_text" data-id="69">
                    <ul>

                      <li><a class="add_cart_btn" href="#">Detail</a></li>
                  </ul>
                  <h4>EPIPHONE  LP STUDIO-WORN CHERRY</h4>
                  <h5 id = "uang1" >
                      Rp <script>document.getElementById('uang1').innerHTML =formatUang(6792000)</script></h5>

                  </div>
              </div>
          </div>
          <div class="item">
              <div class="l_product_item">
                 <div class="l_p_img">
                    <img src="ui/images/product/epiphone-es-339.jpg" alt="">
                </div>
                <div class="l_p_text" data-id="30">
                    <ul>
                      <li><a class="add_cart_btn" href="#">Detail</a></li>
                  </ul>
                  <h4>EPIPHONE ES-339 PRO HOLLOWBODY</h4>
                  <h5 id = "uang2" >
                      Rp <script>document.getElementById('uang2').innerHTML =(formatUang(33760000))</script></h5>
                  </div>
              </div>
              <div class="l_product_item">
                 <div class="l_p_img">
                    <img src="ui/images/product/es339.jpg" alt="">
                </div>
                <div class="l_p_text" data-id="63">
                    <ul>

                      <li><a class="add_cart_btn" href="#">Detail</a></li>

                  </ul>
                  <h4>GIBSON E/GUITAR ES-339 ANTIQUE RED</h4>
                  <h5 id = "uang3" >
                      Rp <script>document.getElementById('uang3').innerHTML =(formatUang(33760000))</script></h5>

                  </div>
              </div>
          </div>
          <div class="item">
              <div class="l_product_item">
                 <div class="l_p_img">
                    <img src="ui/images/product/fender-strat-floyd-rose-bridge.jpg" alt="">
                </div>
                <div class="l_p_text" data-id="102">
                    <ul>

                      <li><a class="add_cart_btn" href="#">Detail</a></li>

                  </ul>
                  <h4>FENDER STD STRAT FR PLUS TOP RW TBS </h4>
                  <h5 id = "uang4" >
                      Rp <script>document.getElementById('uang4').innerHTML = (formatUang(11600000))</script></h5> 
                  </div>
              </div>
              <div class="l_product_item">
                 <div class="l_p_img">
                    <img src="ui/images/Elektrik_Guitar/408002321_fender_guitar_classic_player_50_strat_mn_shg.jpg" alt="">
                </div>
                <div class="l_p_text" data-id="45">
                    <ul>

                      <li><a class="add_cart_btn" href="#">Detail</a></li>

                  </ul>
                  <h4>FENDER ELECTRIC CLASSIC GUITAR PLAYER 50s</h4>
                  <h5 id = "uang5" >        
                      Rp <script>document.getElementById('uang5').innerHTML =(formatUang(13200000))</script></h5> 

                  </div>
              </div>
          </div>
          <div class="item">
              <div class="l_product_item">
                 <div class="l_p_img">
                    <img src="ui/images/product/g220dx.jpg" alt="">
                </div>
                <div class="l_p_text" data-id="64">
                    <ul>

                      <li><a class="add_cart_btn" href="#">Detail</a></li>

                  </ul>
                  <h4>CORT ELECTRIC GUITAR G220DX-QT-TB</h4>
                  <h5 id = "uang6" >
                      Rp <script>document.getElementById('uang6').innerHTML =(formatUang(2952000))</script></h5>        
                  </div>
              </div>
              <div class="l_product_item">
                 <div class="l_p_img">
                    <img src="ui/images/product/g250-bbl.jpg" alt="">
                </div>
                <div class="l_p_text" data-id="32" >
                    <ul>

                      <li><a class="add_cart_btn" href="#">Detail</a></li>

                  </ul>
                  <h4>CORT G250-BBL</h4>
                  <h5 id = "uang7" >
                      <script>document.getElementById('uang7').innerHTML = (formatUang(2632000))</script></h5>

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
       <h2>Rock Essential</h2>
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
  <!--<ul class="portfolio_filter">
   <li class="active" data-filter="*"><a href="#">Gitar Listrik</a></li>
   <li data-filter=".woman"><a href="#">Gitar Akustik</a></li>
   <li data-filter=".shoes"><a href="#">Efek</a></li>
   <li data-filter=".bags"><a href="#">Senar</a></li>
   <li data-filter=".pick"><a href="#">Pick</a></li>
 </ul>-->
 <div class="fillter_slider owl-carousel">
  <div class="l_product_item">
   <div class="l_p_img">
    <img src="../../ui/images/Elektrik_Guitar/b_mg_gibson_lpstudio.jpg" alt="">
  </div>
  <div class="l_p_text" data-id="27">
    <ul>

      <li><a class="add_cart_btn" href="#">Detail</a></li>
    </ul>
    <h4>Gibson Les Paul Studio 50's Tribute </h4>
    <h5 id = "uang8" >
      Rp <script>document.getElementById('uang8').innerHTML =(formatUang(15920000))</script></h5>
    </div>
  </div>
  <div class="l_product_item">
   <div class="l_p_img">
    <img src="../../ui/images/Elektrik_Guitar/b_mg_gibson_sgstd.jpg" alt="">
  </div>
  <div class="l_p_text" data-id="28">
    <ul>

      <li><a class="add_cart_btn" href="#">Detail</a></li>
    </ul>
    <h4>Gibson SG Standard Electric Guitar Heritage Cherry</h4>
    <h5 id = "uang9" >
      Rp <script>document.getElementById('uang9').innerHTML =(formatUang(15920000))</script></h5>
    </div>
  </div>
  <div class="l_product_item">
   <div class="l_p_img">
    <img src="../../ui/images/Efek/401000326.jpg" alt="">
  </div>
  <div class="l_p_text" data-id="137">
    <ul>

      <li><a class="add_cart_btn" href="#">Detail</a></li>
    </ul>
    <h4>BOSS DIGITAL DELAY DD-7</h4>
    <h5 id = "uang10" >
      Rp <script>document.getElementById('uang10').innerHTML =(formatUang(2268000))</script></h5>
    </div>
  </div>
  <div class="l_product_item">
   <div class="l_p_img">
    <img src="../../ui/images/Efek/as.jpg" alt="">
  </div>
  <div class="l_p_text" data-id="10">
    <ul>

      <li><a class="add_cart_btn" href="#">Detail</a></li>
    </ul>
    <h4>JIM DUNLOP MXR M-75 SUPER BADASS DISTORTION </h4>
    <h5 id = "uang11" >
      Rp <script>document.getElementById('uang11').innerHTML =(formatUang(1400000))</script></h5>
    </div>
  </div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="feature_product_area">
   <div class="container">
      <div class="f_p_inner">
         <div class="row">
            <div class="col-lg-3">
               <div class="f_product_left">
                  <div class="s_m_title">
                     <h2>Jazz Essential</h2>
                 </div>
                 <div class="f_product_inner" style="padding:0px;">  
                     <div class="media">
                        <div class="d-flex">
                           <img src="ui/images/product/featured-product/SANTANA.jpg" alt="" height="350" width="268q">
                       </div>

                   </div>
               </div>
           </div>
       </div>
       <div class="col-lg-9">
           <div class="fillter_slider_inner">
 <!--<ul class="portfolio_filter">
   <li class="active" data-filter="*"><a href="#">Gitar Listrik</a></li>
   <li data-filter=".woman"><a href="#">Gitar Akustik</a></li>
   <li data-filter=".shoes"><a href="#">Efek</a></li>
   <li data-filter=".bags"><a href="#">Senar</a></li>
   <li data-filter=".pick"><a href="#">Pick</a></li>
</ul>-->
<div class="fillter_slider owl-carousel">
 <div class="l_product_item">
   <div class="l_p_img">
      <img src="../../ui/images/Elektrik_Guitar/epiphone-es-339.jpg" alt="">
  </div>
  <div class="l_p_text" data-id="30">
      <ul>

        <li><a class="add_cart_btn" href="#">Detail</a></li>
    </ul>
    <h4>EPIPHONE ES-339 PRO HOLLOWBODY CH </h4>
    <h5 id = "uang12" >
      Rp <script>document.getElementById('uang12').innerHTML =(formatUang(7432000))</script></h5>
  </div>
</div>
<div class="l_product_item">
   <div class="l_p_img">
      <img src="../../ui/images/Pick/407000399-class-mini-jazz-1.5-polished.jpg" alt="">
  </div>
  <div class="l_p_text" data-id="8">
      <ul>

        <li><a class="add_cart_btn" href="#">Detail</a></li>
    </ul>
    <h4>GRAVITY CLASSIC MINI JAZZ </h4>
    <h5 id = "uang13" >
      Rp <script>document.getElementById('uang13').innerHTML =(formatUang(60300))</script></h5>
  </div>
</div>
<div class="l_product_item">
   <div class="l_p_img">
      <img src="../../ui/images/Efek/401495401_boss_digital_rverb_rv-5_.jpg" alt="">
  </div>
  <div class="l_p_text" data-id="129">
      <ul>

        <li><a class="add_cart_btn" href="#">Detail</a></li>
    </ul>
    <h4>BOSS DIGITAL REVERB RV-5</h4>
    <h5 id = "uang14" >
      Rp <script>document.getElementById('uang14').innerHTML =(formatUang(3192000))</script></h5>
  </div>
</div>

<div class="l_product_item">
   <div class="l_p_img">
      <img src="../../ui/images/Senar/daddario-exl120-7.jpg" alt="">
  </div>
  <div class="l_p_text" data-id="14">
      <ul>

        <li><a class="add_cart_btn" href="#">Detail</a></li>
    </ul>
    <h4>D'ADDARIO EXL120 NICKEL ROUND WOUNDS ELECTRIC  </h4>
    <h5 id = "uang15" >
      Rp <script>document.getElementById('uang15').innerHTML =(formatUang(88000))</script></h5>
  </div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</section>

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
                           <img src="ui/images/product/featured-product/JASON.jpg" alt="" height="350" width="268q">
                       </div>

                   </div>
               </div>
           </div>
       </div>
       <div class="col-lg-9">
           <div class="fillter_slider_inner">
  <!--<ul class="portfolio_filter">
   <li class="active" data-filter="*"><a href="#">Gitar Listrik</a></li>
   <li data-filter=".woman"><a href="#">Gitar Akustik</a></li>
   <li data-filter=".shoes"><a href="#">Efek</a></li>
   <li data-filter=".bags"><a href="#">Senar</a></li>
   <li data-filter=".pick"><a href="#">Pick</a></li>
</ul>-->
<div class="fillter_slider owl-carousel">
  <div class="l_product_item">
     <div class="l_p_img">
        <img src="../../ui/images/Elektrik_Guitar/408002264_jaguar_classic_60s_.jpg" alt="">
    </div>
    <div class="l_p_text" data-id="49">
        <ul>

          <li><a class="add_cart_btn" href="#">Detail</a></li>
      </ul>
      <h4>FENDER CLASSIC 60S JAGUAR LACQUER ROSEWOOD</h4>
      <h5 id = "uang16" >
          Rp <script>document.getElementById('uang16').innerHTML =(formatUang(14960000))</script></h5>
      </div>
  </div>
  <div class="l_product_item">
     <div class="l_p_img">
        <img src="../../ui/images/Efek/401000324.jpg" alt="">
    </div>
    <div class="l_p_text" data-id="139">
        <ul>

          <li><a class="add_cart_btn" href="#">Detail</a></li>
      </ul>
      <h4>BOSS CHROMATIC TUNER TU-3</h4>
      <h5 id = "uang17" >
          Rp <script>document.getElementById('uang17').innerHTML =(formatUang(1500000))</script></h5>
      </div>
  </div>
  <div class="l_product_item">
     <div class="l_p_img">
        <img src="../../ui/images/Efek/401373401_bossoverdrive_od_3_.jpg" alt="">
    </div>
    <div class="l_p_text" data-id="136">
        <ul>

          <li><a class="add_cart_btn" href="#">Detail</a></li>
      </ul>
      <h4>BOSS OVER DRIVE OD-3 </h4>
      <h5 id = "uang18" >
          Rp <script>document.getElementById('uang18').innerHTML =(formatUang(1350000))</script></h5>
      </div>
  </div>
  <div class="l_product_item">
     <div class="l_p_img">
        <img src="../../ui/images/Efek/electro-harmonix-crayon-76-pull-range-overdrive.jpg" alt="">
    </div>
    <div class="l_p_text" data-id="147">
        <ul>

          <li><a class="add_cart_btn" href="#">Detail</a></li>
      </ul>
      <h4>ELECTRO HARMONIX CRAYON76 OVERDRIVE</h4>
      <h5 id = "uang19" >
          Rp <script>document.getElementById('uang19').innerHTML =(formatUang(88000))</script></h5>
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
    <a href="https://reverb.com/" target="_blank">
     <div class="from_blog_item">
      <img class="img-fluid" src="ui/images/blog/from-blog/f-blog-2.jpg" alt="">
      <div class="f_blog_text">
       <h5>Reverb</h5>
       <p>Reverb</p>
       <h6>--</h6>
     </div>
   </div></a>
 </div>
 <div class="col-lg-4 col-sm-6">
  
   <a href="http://www.pedalsandeffects.com/" target="_blank">
   <div class="from_blog_item">
    <img class="img-fluid" src="ui/images/blog/from-blog/f-blog-3.gif" alt="">
    <div class="f_blog_text">
     <h5>Pedals and Effects</h5>
     
     <h6>--</h6>
   </div>
 </div></a>
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
   window.location= `/detail_produk_admin/${id}`;
 }
 document.querySelectorAll(".l_p_text").forEach(e=> {
   e.addEventListener("click",goToDetail);
 });

</script>


