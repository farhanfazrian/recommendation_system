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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" href="../../ui/images/fav-icon.png" type="image/x-icon" />
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    input[type=email], input[type=password], input[type=number],input[type=text] {
    	width: 100%;
    	padding: 12px 20px;
    	margin: 8px 0;
    	display: inline-block;
    	border: 1px solid #ccc;
    	box-sizing: border-box;
    }
    .modal-content {
    	background-color: #fefefe;
    	margin: 5% auto 10%; 
    	max-width: 500px;
    	border: 0px;
    	width: 90%; 
    	display: block;
    }
    .isiModalLogin button {
    	padding: 14px 20px;
    	margin: 8px 0;
    	width: 30%;
    }
    /* Animasi zoom */
    .animate {
    	-webkit-animation: animatezoom 0.6s;
    	animation: animatezoom 0.6s
    }

    .modal-dialog{
    	padding-top: 70px;
    }
    .isiSignUp {
    	padding: 10px;
    }
    .isiSignUp button {

    	margin: 8px 0;
    	width: 30%;
    }
    .buttonNext{
    	display: inline-block;
    	width: 90px;
    	height: 35px;
    	margin: 8px 0;
    	float : right;
    	margin-left: 10px;


    }
    button: disabled {
    	cursor: not-allowed;
    }

    .checkbox{
    	display: flex;    
    	flex-wrap: wrap;
    	padding: 10px;
    }
    .gambarpilihan{
    	padding-right: 300px;
    }
</style>


</head>
<body>

	<!--================Top Header Area =================-->
    <?php if ($SESSION['message']): ?>
        <div><script type="text/javascript">alert('<?= $SESSION['message'] ?>')</script></div>
    <?php endif; ?>
    <div class="header_top_area">
      <div class="container">
         <div class="row">
            <div class="col-lg-3">
               <div class="top_header_left">
						<!--<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" aria-label="Search">
							<span class="input-group-btn">
								<button class="btn btn-secondary" type="button"><i class="icon-magnifier"></i></button>
							</span>
						</div>-->
					</div>
				</div>
				<div class="col-lg-6">
					<div class="top_header_middle">
						<img src="ui/images/logo.png" alt="" height="150px" width="300px">
					</div>
				</div>
				<div class="col-lg-3">
					<div class="top_right_header">
						<ul class="header_social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
						</ul>

						<ul class="top_right">
							<li class="user"><a href="#" data-toggle="modal" data-target="#id01"><i class="icon-user icons"></i></a></li>
							<!-- Button to Open the Modal -->
                           <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Open modal
                            </button>-->

                            <!-- The Modal -->

                            <div class="modal animate" id="id01">
                            	<div class="modal-dialog">
                            		<div class="modal-content">

                            			<!-- Modal Header -->
                            			<div class="modal-header">
                            				<h4 class="modal-title">Login</h4>
                            				<button type="button" class="close" data-dismiss="modal">&times;</button>
                            			</div>

                            			<!-- Modal body -->
                            			<div class="modal-content">
                            				<form class="modal-content" method="POST" action="\authenticate" >
                            					<div class="isiModalLogin">
                            						<label for="email"><p>Email</p></label>
                            						<input type="email" placeholder="Enter Email"  name="emailPengguna" id="inputEmail" required>
                            						<label for="psw"><p>Password</p></label>
                            						<input type="password" placeholder="Enter Password" name="password" id="inputPassword" required>
                            						<div style="text-align: center;">
                            							<button type="submit">Login</button>
                            						</div>
                            					</div>
                            					<center>
                            						<label>
                            							<p>Tidak punya akun ? <a href="#" data-toggle="modal" data-target="#id02" id="nextSignUp0" data-dismiss = "modal">Sign up </a></a> </p>
                            						</label></center>
                            					</form>
                            				</div>

                            				<!-- Modal footer -->
                            			</div>
                            		</div>
                            	</div>

                            	<!--==== Modal Sign up ====-->

                            	<div id="id02" class="modalSignUp modal">
                            		<form class="modal-content animate" method="POST" action="\register" >
                            			<div class="isiSignUp">   
                            				<div class="modal-header">
                            					<h4 class="modal-title">Sign up</h4>

                            				</div>
                            				<label for="email"><b>New Email</b></label>
                            				<input type="email" placeholder="Enter New Email" name="emailBaru" class= required>

                            				<label for="psw"><b>Password</b></label>
                            				<input type="password" placeholder="Enter New Password" name="passwordBaru" required>

                            				<label for="name"><b>Full Name</b></label>
                            				<input type="text" placeholder="Full Name" name="namaBaru" required>

                            				<label for="Address"><b>Address</b></label>
                            				<input type="text" placeholder="Address" name="alamatBaru" required>

                            				<label for="telpon"><b>Phone</b></label>
                            				<input pattern="[0-9]+" type="text" placeholder="Phone" name="teleponBaru" required>

                            				<button type=button class="buttonNext" id="nextSignUp" style="margin-top: 20px;" data-toggle="modal" data-target="#id03" id="nextSignUp1" data-dismiss = "modal" disabled>Next</button>

                            			</div>

                            		</div>
                            		<div id="id03" class="modal">
                            			<div class="modal-content animate"  >
                            				<div class="modal-header">
                            					<h4 class="modal-title">Pilihlah gitar yang anda suka</h4>

                            				</div>
                            				<div class="checkBoxLuar" id="checkbox1">   

                            					<div class="checkbox">
                            						<p><input type="checkbox" id="isi1" value="5" name="satu">CORT AD-810-OP ACOUSTIC GUITAR</p>
                            						<div class="gambarpilihan">
                            							<img src="..\..\ui\images\Acoustic_Gitar\ad810e.jpg"   alt="Northern Lights" width="175" height="175">
                            						</div>
                            					</div>
                            					<div class="checkbox"> 
                            						<p><input type="checkbox" id="isi2"  value="1" name="dua">Epiphone E/Guitar G-400 PRO-EB</p>
                            						<div class="gambarpilihan">
                            							<img src="..\..\ui\images\Elektrik_Guitar\epiphone-eguitar-g-400-pro-eb.jpg" alt="Northern Lights" width="175" height="175"> 
                            						</div>
                            					</div>
                            					<div class="checkbox">
                            						<p><input type="checkbox" id="isi3" value="63"  name="tiga" >GIBSON ES-339 ANTIQUE RED</p>
                            						<div class="gambarpilihan">
                            							<img src="../../ui/images/Elektrik_Guitar/es339.jpg"   alt="Northern Lights" width="175" height="175"> 
                            						</div>
                            					</div>

                            					<button type=button class="buttonNext" id="nextSignUp2" disabled data-toggle="modal" data-target="#id04" id="nextSignUp1" data-dismiss = "modal">Next</button>
                            					<button type=button class="buttonNext" id="prevSignUp2" data-toggle="modal" data-target="#id02" id="nextSignUp1" data-dismiss = "modal">Prev</button>
                            				</div>

                            			</div>
                            		</div>
                            		<div id="id04" class="modal">
                            			<div class="modal-content animate" >
                            				<div class="modal-header">
                            					<h4 class="modal-title">Pilihlah efek gitar yang anda suka</h4>

                            				</div>
                            				<div class="checkBoxLuar" id="checkbox2">   

                            					<div class="checkbox">
                            						<p><input type="checkbox" value="134"  name="empat">BOSS EFFECT AC-3</p>
                            						<div class="gambarpilihan">
                            							<img src="../../ui/images/Efek/401000097_ac-3_.jpg" alt="Northern Lights" width="175" height="175">
                            						</div>
                            					</div>
                            					<div class="checkbox">
                            						<p><input type="checkbox" value="131"  name="lima">JIM DUNLOP MXR M-75 SUPER BADASS DISTORTION</p>
                            						<div class="gambarpilihan">
                            							<img src="../../ui/images/Efek/as.jpg"   alt="Northern Lights" width="175" height="175">
                            						</div>
                            					</div>
                            					<div class="checkbox">
                            						<p><input type="checkbox" value="123"  name="enam" >EARTHQUAKER THE RAINBOW MACHINE</p>
                            						<div class="gambarpilihan">
                            							<img src="../../ui/images/Efek/rainbow-machine.jpg"  alt="Northern Lights" width="175" height="175"> 
                            						</div>
                            					</div>
                            				</div>
                            				<button type=button class="buttonNext" id="nextSignUp3" data-toggle="modal" data-target="#id05" id="nextSignUp1" data-dismiss = "modal" disabled>Next</button>
                            				<button type=button class="buttonNext" id="prevSignUp3" data-toggle="modal" data-target="#id03" id="nextSignUp1" data-dismiss = "modal">Prev</button>
                            			</div>
                            		</div>
                                    <div id="id05" class="modal">
                                        <div class="modal-content animate" >
                                            <div class="modal-header">
                                                <h4 class="modal-title">Pilihlah senar gitar yang anda suka</h4>

                                            </div>
                                            <div class="checkBoxLuar" id="checkbox3">   

                                                <div class="checkbox">
                                                    <p><input type="checkbox" value="215" name="tujuh">D'ADDARIO EXL 120-8 GUITAR STRING SUPER LIGHT</p>
                                                    <div class="gambarpilihan">
                                                        <img src="../../ui/images/Senar/daddario-exl120-8.jpg" alt="Northern Lights" width="175" height="175">
                                                    </div>
                                                </div>
                                                <div class="checkbox">
                                                    <p><input type="checkbox" value="226"  name="delapan">D'ADDARIO EXL-157 GUITAR STRING BARITONE MEDIUM</p>
                                                    <div class="gambarpilihan">
                                                        <img src="../../ui/images/Senar/b_mg_daddario_exl1103d.jpg"   alt="Northern Lights" width="175" height="175">
                                                    </div>
                                                </div>
                                                <div class="checkbox">
                                                    <p><input type="checkbox" value="229"  name="sembilan" >D'ADDARIO NYXL1254 GUITAR STRING NYXL HEAVY</p>
                                                    <div class="gambarpilihan">
                                                        <img src="../../ui/images/Senar/daddario-nyxl1254.jpg"  alt="Northern Lights" width="175" height="175"> 
                                                    </div>
                                                </div>
                                            </div>
                                            <button type=button class="buttonNext" id="nextSignUp4" data-toggle="modal" data-target="#id06" id="nextSignUp4" data-dismiss = "modal" disabled>Next</button>
                                            <button type=button class="buttonNext" id="prevSignUp4" data-toggle="modal" data-target="#id04" id="nextSignUp4" data-dismiss = "modal">Prev</button>
                                        </div>
                                    </div>
                            		<div id="id06" class="modal">
                            			<div class="modal-content animate" >
                            				<div class="modal-header">
                            					<h4 class="modal-title">Seberapa tertarik anda dengan aksesoris ini  ? </h4>

                            				</div>
                            				<div class="checkBoxLuar" id="checkbox3">   
                            					<div class="checkbox">
                            						<input type="text" class="inputIdProduk" name="Epiphone" value="19" readonly style="display: none">
                            						<p>LOCKIT MYTHICAL SWORDS GUITAR STRAP</p>
                            						<div class="gambarpilihan" id="gambarSlider">
                            							<img src="..\..\ui\images\Strap\34-bm4-mythicalswords.jpg" alt="Northern Lights" width="175" height="175">
                            						</div>

                            						<input type="range" min="0" max="5" class="slider" id='19' name="inputRating" value="0" style="margin-left: 50px;" >

                            						<p style="margin-left: 50px;margin-top: 5px;">Rating: <span id="nilai"></span></p> 
                            						<input  class="inputRating" type="text" placeholder="Enter Review" name="review" style="display: none" >

                            					</div>

                            				</div>
                            				<button type="submit" class="buttonNext">Sign Up</button>
                            				<button type=button class="buttonNext" id="prevSignUp5" data-toggle="modal" data-target="#id05" id="nextSignUp5" data-dismiss = "modal">Prev</button>
                            			</div>
                            		</div>
                            	</form>

                                <!--==== End modal sign up ====-->


                            	<!--<li class="cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                            	<li class="h_price">
                            		<select class="selectpicker">
                            			<option>$0.00</option>
                            			<option>$0.00</option>
                            			<option>$0.00</option>
                            		</select>
                            	</li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--================End Top Header Area =================-->

        <!--================Menu Area =================-->
        <header class="shop_header_area">
        	<div class="container">
        		<nav class="navbar navbar-expand-lg navbar-light bg-light">
        			<a class="navbar-brand" href="#"><img src="ui/images/logo.png" alt=""></a>
        			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        				<span class="navbar-toggler-icon"></span>
        			</button>

        			<div class="collapse navbar-collapse" id="navbarSupportedContent">

        				<!--================ Bagian header =================-->
        				<ul class="navbar-nav">
        					<li class="nav-item"><a class="nav-link" href="\home">Home</a></li>
                            <!--<ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="\home">Home Simple</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-carousel.html">Home Carousel</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-fullwidth.html">Home Full Width</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-parallax.html">Home Parallax</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-sidebar.html">Home Boxed</a></li>
                                <li class="nav-item"><a class="nav-link" href="home-fixed-menu.html">Home Fixed</a></li>
                            </ul>-->

                        <!--<li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="compare.html">Compare</a></li>
                                <li class="nav-item"><a class="nav-link" href="checkout.html">Checkout Method</a></li>
                                <li class="nav-item"><a class="nav-link" href="register.html">Checkout Register</a></li>
                                <li class="nav-item"><a class="nav-link" href="track.html">Track</a></li>
                                <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                                <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown submenu">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Shop <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-2column.html">Prodcut No Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-3column.html">Prodcut Two Column</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-no-sidebar-4column.html">Product Grid</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-left-sidebar.html">Categories Left Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-right-sidebar.html">Categories Right Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="categories-grid-left-sidebar.html">Categories Grid Sidebar</a></li>
                                <li class="nav-item"><a class="nav-link" href="product-details.html">Prodcut Details 01</a></li>
                                <li class="nav-item"><a class="nav-link" href="product-details2.html">Prodcut Details 02</a></li>
                                <li class="nav-item"><a class="nav-link" href="product-details3.html">Prodcut Details 03</a></li>
                                <li class="nav-item"><a class="nav-link" href="shopping-cart.html">Shopping Cart 01</a></li>
                                <li class="nav-item"><a class="nav-link" href="shopping-cart2.html">Shopping Cart 02</a></li>
                                <li class="nav-item"><a class="nav-link" href="empty-cart.html">Empty Cart</a></li>
                            </ul>
                        </li>-->
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>  <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--================End Menu Area =================-->

    <!--================Slider Area =================-->
    <section class="main_slider_area">
    	<div class="container">
    		<div id="main_slider" class="rev_slider" data-version="5.3.1.6">
    			<ul>
    				<li data-index="rs-1587" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="ui/images/home-slider/587199c1c734868349bd4c2b3434d3e9.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" height="529" height="690">
    					<!-- MAIN IMAGE -->
    					<img src="ui/images/home-slider/587199c1c734868349bd4c2b3434d3e9.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>

    					<!-- LAYER NR. 1 -->
    					<div class="slider_text_box">
    						<div class="tp-caption tp-resizeme first_text" 
    						data-x="['right','right','right','center','center']" 
    						data-hoffset="['0','0','0','0']" 
    						data-y="['top','top','top','top']" 
    						data-voffset="['60','60','60','80','95']" 
    						data-fontsize="['54','54','54','40','40']"
    						data-lineheight="['64','64','64','50','35']"
    						data-width="['470','470','470','300','250']"
    						data-height="none"
    						data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
    						data-type="text" 
    						data-responsive_offset="on" 
    						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
    						data-textAlign="['left','left','left','left','left','center']"
    						style="z-index: 8;font-family: Montserrat,sans-serif;font-weight:700;color:#29263a;"></div>


    					</div>
    				</li>
    				<li data-index="rs-1588" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="ui/images/home-slider/slider-2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Creative" data-param1="01" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
    					<!-- MAIN IMAGE -->
    					<img src="ui/images/home-slider/587199c1c734868349bd4c2b3434d3e9.jpg"  alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
    					<!-- LAYERS -->
    					<!-- LAYERS -->

    					<!-- LAYER NR. 1 -->
    					<div class="slider_text_box">
    						<div class="tp-caption tp-resizeme first_text" 
    						data-x="['right','right','right','center','center']" 
    						data-hoffset="['0','0','0','0']" 
    						data-y="['top','top','top','top']" 
    						data-voffset="['60','60','60','80','95']" 
    						data-fontsize="['54','54','54','40','40']"
    						data-lineheight="['64','64','64','50','35']"
    						data-width="['470','470','470','300','250']"
    						data-height="none"
    						data-whitespace="['nowrap','nowrap','nowrap','nowrap','nowrap']"
    						data-type="text" 
    						data-responsive_offset="on" 
    						data-frames="[{&quot;delay&quot;:10,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;0&quot;,&quot;from&quot;:&quot;y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;&quot;,&quot;mask&quot;:&quot;x:0px;y:0px;s:inherit;e:inherit;&quot;,&quot;to&quot;:&quot;o:1;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;},{&quot;delay&quot;:&quot;wait&quot;,&quot;speed&quot;:1500,&quot;frame&quot;:&quot;999&quot;,&quot;to&quot;:&quot;y:[175%];&quot;,&quot;mask&quot;:&quot;x:inherit;y:inherit;s:inherit;e:inherit;&quot;,&quot;ease&quot;:&quot;Power2.easeInOut&quot;}]"
    						data-textAlign="['left','left','left','left','left','center']"
    						style="z-index: 8;font-family: Montserrat,sans-serif;font-weight:700;color:#29263a;"><img src="ui/images/home-slider/2017-text.png" alt=""></div>




    					</div>
    				</li>
    			</ul>
    		</div>
    	</div>
    </section>
    <!--================End Slider Area =================-->

    <!--================Feature Add Area =================-->

    <!--================End Feature Add Area =================-->

    <!--================Our Latest Product Area =================-->
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
<div class="l_p_text" data-id="70">
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
<script>
   var slider = document.getElementById('19');
   var output = document.getElementById("nilai");
   output.innerHTML = 0 ;

   slider.oninput = function() {
      output.innerHTML = this.value;

  }

  var modal1 = document.getElementById('id01');
  var modal2 = document.getElementById('id02');
  var modal3 = document.getElementById('id03');
  var modal4 = document.getElementById('id04');
  var modal5 = document.getElementById('id05');
   var modal5 = document.getElementById('id06');
  var modals = document.querySelectorAll(".modal");
// method close modal jika klik di aera lain
function closeAllModal(e){

	modals.forEach(elem=>{

		if(elem==e.target){
			elem.style.display="none";
		}
	})

}
function openModal(modalO,modalC){
	modalO.style.display="block";
	modalC.style.display="none";
	console.log(modals);
}
window.onclick = closeAllModal;



/**document.querySelector("#nextSignUp").addEventListener("click",e=>{
  openModal(modal3,modal2);
});
document.querySelector("#nextSignUp2").addEventListener("click",e=>{
    openModal(modal4,modal3);
});
document.querySelector("#nextSignUp3").addEventListener("click",e=>{
  openModal(modal5,modal4);
});



document.querySelector("#prevSignUp2").addEventListener("click",e=>{
  openModal(modal2,modal3);
});
document.querySelector("#prevSignUp3").addEventListener("click",e=>{
  openModal(modal3,modal4);
});
document.querySelector("#prevSignUp4").addEventListener("click",e=>{
  openModal(modal4,modal5);
});**/



var next1 = $("#nextSignUp");
var inputIsiSignUp = $(".isiSignUp > input");

inputIsiSignUp.on("keyup",function(){
	console.log("masuk ni");
	var ok = true;
	inputIsiSignUp.each(function(idx,item){

		if(item.value===""){
			ok = false;
		}
	});

	if(ok === true){
		next1.prop('disabled', false);
	}
	else{
		next1.prop('disabled', true);
	}
});

var next2 = $("#nextSignUp2");
var inputCheckBox = $("#checkbox1 input");
console.log(inputCheckBox);
inputCheckBox.on("change",function(){

	var ok = false;
	inputCheckBox.each(function(idx,item){

		if(item.checked===true){
			ok = true;
		}
	});
	
	if(ok === true){
		next2.prop('disabled', false);
	}
	else{
		next2.prop('disabled', true);
	}
});
var next3 = $("#nextSignUp3");
var inputCheckBox2 = $("#checkbox2 input");
console.log(inputCheckBox);
inputCheckBox2.on("change",function(){

	var ok = false;
	inputCheckBox2.each(function(idx,item){

		if(item.checked===true){
			ok = true;
		}
	})
	
	if(ok === true){
		next3.prop('disabled', false);
	}
	else{
		next3.prop('disabled', true);
	}
});
var next4 = $("#nextSignUp4");
var inputCheckBox3 = $("#checkbox3 input");
console.log(inputCheckBox);
inputCheckBox2.on("change",function(){

    var ok = false;
    inputCheckBox2.each(function(idx,item){

        if(item.checked===true){
            ok = true;
        }
    })
    
    if(ok === true){
        next4.prop('disabled', false);
    }
    else{
        next4.prop('disabled', true);
    }
});



</script>
<script type="text/javascript">
    function goToDetail(e){
        let id = e.currentTarget.dataset.id;
        console.log(e.currentTarget);
        window.location= `/detail_produk_guest/${id}`;
        
    }
    document.querySelectorAll(".l_p_text").forEach(e=> {
        e.addEventListener("click",goToDetail);
    });

    $(document).ready(function() {
      $(window).keydown(function(event){
        if(event.keyCode == 13) {
          event.preventDefault();
          return false;
      }
  });
  });

</script>
</body>
</html>


