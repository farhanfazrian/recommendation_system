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
    <title>Skripsi Scalability</title>

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

    <!--================Menu Area =================-->
    <!--================Top Header Area =================-->

    <div class="header_top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="top_header_left">
                        <!-- BAGIAN search -->
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

                        <img src="ui/images/logo.png" alt="">
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



                                <!-- <li class="cart"><a href="#"><i class="icon-handbag icons"></i></a></li>
                                <li class="h_price">
                                    <select class="selectpicker">
                                        <option>$0.00</option>
                                        <option>$0.00</option>
                                        <option>$0.00</option>
                                    </select>
                                </li> -->
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
    <?php foreach (($prd?:[]) as $produk): ?>
       <section class="product_details_area">
          <div class="container">
             <div class="row">
                <div class="col-lg-5">
                   <div class="product_details_slider">
                      <div id="product_slider2" class="rev_slider" data-version="5.3.1.6">
                         <ul>   <!-- SLIDE  -->
                            <li >
                               <!-- MAIN IMAGE -->
                               <img src=<?= $produk['gambar'] ?> alt=""  width="1920" height="1080" data-lazyload=<?= $produk['gambar'] ?> data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                               <!-- LAYERS -->
                           </li>

                       </ul>
                   </div>
               </div>
           </div>
           <div class="col-lg-7">
               <div class="product_details_text">
                  <h3><?= $produk['nama'] ?></h3>
                  <ul class="p_rating">
                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                     <li><a href="#"><i class="fa fa-star"></i></a></li>
                 </ul>
                 <!--ngambil dari database nilai-->

                        <!--<div class="add_review">
                            <a href="#">5 Reviews</a>
                            <a href="#">Add your review</a>
                        </div>-->
                        <h6>Available In <span>Stock</span></h6>
                        <h4>
                            Rp <script>document.write(formatUang(<?= $produk['harga'] ?>))</script></h4>
                            <p><?= $produk['deskripsi'] ?></p>

                            <div class="quantity">
                                <div class="custom">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon_minus-06"></i></button>
                                    <input type="text" name="qty" id="sst" maxlength="12" value="01" title="Quantity:" class="input-text qty" style="margin-top: 0px;">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;" class="increase items-count" type="button"><i class="icon_plus"></i></button>
                                </div>
                                <button class="add_cart_btn" href="#"  data-toggle="modal" data-target="#id01">buy</button>
                            </div>

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
              <!--<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Reviews (1)</a>-->
              <!--<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Add Review</a>-->
              
          </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
       <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <p><?= $produk['deskripsi'] ?></p>
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
                    <!--<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.  Emo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                    </div>-->
                    
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
                                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
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
<!-- script masalah pembelian-->
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
<!--script modal -->
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