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

    <link rel="icon" href="../../ui/images/fav-icon.png" type="image/x-icon" />
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
    <link href="../../ui/vendors/revolution/css/layers.css" rel="stylesheet">
    <link href="../../ui/vendors/revolution/css/navigation.css" rel="stylesheet">

    <!-- Extra plugin css -->
    <link href="../../ui/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="../../ui/vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="../../ui/vendors/jquery-ui/jquery-ui.css" rel="stylesheet">

    <link href="../../ui/css/style.css" rel="stylesheet">
    <link href="../../ui/css/responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]
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
                <h3>shop grid with left sidebar</h3>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li class="current"><a href="#">Shop Grid with Left Sidebar</a></li>
                </ul>
            </div>
        </div>
    </section>-->
    <!--================End Categories Banner Area =================-->
    <!--================Categories Product Area =================-->
    <section class="categories_product_main p_80">
        <div class="container">
            <div class="categories_main_inner">
                <div class="row row_disable">
                    <div class="col-lg-9 float-md-right">
                        <div class="showing_fillter">
                            <div class="row m0">
                                <!--<div class="first_fillter">
                                    <h4>Showing 1 to 12 of 30 total</h4>
                                </div>
                                <div class="secand_fillter">
                                    <h4>SORT BY :</h4>
                                    <select class="selectpicker">
                                        <option>Name</option>
                                        <option>Name 2</option>
                                        <option>Name 3</option>
                                    </select>
                                </div>
                                <div class="third_fillter">
                                    <h4>Show : </h4>
                                    <select class="selectpicker">
                                        <option>09</option>
                                        <option>10</option>
                                        <option>10</option>
                                    </select>
                                </div>
                                <div class="four_fillter">
                                    <h4>View</h4>
                                    <a class="active" href="#"><i class="icon_grid-2x2"></i></a>
                                    <a href="#"><i class="icon_grid-3x3"></i></a>
                                </div>-->
                            </div>
                        </div>

                        <div class="categories_product_area">
                            <div class="row">
                                <?php foreach (($sp?:[]) as $produk): ?>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="l_product_item">
                                            <div class="l_p_img">
                                                <img src="<?= $produk['gambar'] ?>" alt="">        
                                            </div>
                                            <div class="l_p_text">
                                             <ul>
                                                <!--<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>-->
                                                <li><a class="add_cart_btn" href="/detail_produk_admin/<?= $produk['idproduk'] ?>">Detail</a></li>
                                               <!--<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>-->
                                            </ul>
                                            <h4><?= $produk['nama'] ?></h4>
                                            <h5><!--<del>$45.50</del>-->Rp <script>document.write(formatUang(<?= $produk['harga'] ?>))</script></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                       <!-- <div class="col-lg-4 col-sm-6">
                            <div class="l_product_item">
                                <div class="l_p_img">
                                    <img src="../../ui/images/product/epiphone-eguitar-lp-studio-worn-ch.jpg" alt="">
                                </div>
                                <div class="l_p_text">
                                 <ul>
                                    <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                                    <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                                    <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
                                </ul>
                                <h4>Summer Dress</h4>
                                <h5>$45.50</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="l_product_item">
                            <div class="l_p_img">
                                <img src="ui/images/product/epiphone-es-339.jpg" alt="">
                                <h5 class="new">New</h5>
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
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <img src="ui/images/product/es339.jpg" alt="">
                            <h5 class="new">New</h5>
                        </div>
                        <div class="l_p_text">
                         <ul>

                            <li><a class="add_cart_btn" href="#">Detail</a></li>

                        </ul>
                        <h4>High Heel</h4>
                        <h5><del>$130.50</del>  $110</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
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
                    <h5>$250.50</h5>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-6">
            <div class="l_product_item">
                <div class="l_p_img">
                    <img src="ui/images/product/g200dx-nat-main.jpg" alt="">
                    <h5 class="new">New</h5>
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
    <div class="col-lg-4 col-sm-6">
        <div class="l_product_item">
            <div class="l_p_img">
                <img src="ui/images/product/g220dx.jpg" alt="">
                <h5 class="new">New</h5>
            </div>
            <div class="l_p_text">
             <ul>
                <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
                <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
                <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
            </ul>
            <h4>Nike Max Air Vapor Power</h4>
            <h5>$45.05</h5>
        </div>
    </div>
</div>
<div class="col-lg-4 col-sm-6">
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
        <h4>Nike Shoes</h4>
        <h5>$45.05</h5>
    </div>
</div>
</div>
<div class="col-lg-4 col-sm-6">
    <div class="l_product_item">
        <div class="l_p_img">
            <img src="ui/images/product/g260dx.png" alt="">
            <h5 class="sale">Sale</h5>
        </div>
        <div class="l_p_text">
         <ul>
            <li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>
            <li><a class="add_cart_btn" href="#">Add To Cart</a></li>
            <li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>
        </ul>

        <h4>Summer Dress</h4>
        <h5>$110</h5>
    </div>
</div>
</div>-->
</div>
</div>
</div>

<div class="col-lg-3 float-md-right" style="padding-right: 20px">
    <div class="categories_sidebar">
        <?php echo $this->render('SidebarRekomendasi.htm',NULL,get_defined_vars(),0); ?>  
    </div>
</div>
</div>
</div>
<nav aria-label="Page navigation example" class="pagination_area" >
  <ul class="pagination">
   <?php foreach (($countProduk?:[]) as $i): ?>
    <!-- pencarian aja -->
        <!--<?php if ($GET['pencarian']): ?>
            <li  class="page-item"><a style="border: 0px;" class="page-link" href="/category/<?= $idcategory ?>/<?= $i ?>?pencarian=<?= $GET['pencarian'] ?>"> <?= $i ?> </a> </li>
        <?php endif; ?>-->
        <!--max min aja -->
        <!--<?php if ($GET['batasMax'] && $GET['batasMin']): ?>
            <li  class="page-item"><a style="border: 0px;" class="page-link" href="/category/<?= $idcategory ?>/<?= $i ?>?pencarian=<?= $GET['batasMax'] ?>&<?= $GET['batasMin'] ?>"> <?= $i ?> </a> </li>
        <?php endif; ?>-->

        <li  class="page-item"><a style="border: 0px;" class="page-link" href="/category_admin/<?= $idcategory ?>/<?= $i ?>?pencarian=<?= $GET['pencarian'] ?>&batasMax=<?= $GET['batasMax'] ?>&batasMin=<?= $GET['batasMin'] ?>"> <?= $i ?> </a> </li>


        
    <?php endforeach; ?>
</ul>
</nav>
</div>

</section>
<!--================End Categories Product Area =================-->
<!--rekomendasi bawah-->



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


