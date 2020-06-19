<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Persuit</title>

        <!-- Icon css link -->
        <link href="ui/css/font-awesome.min.css" rel="stylesheet">
        <link href="ui/vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
        <link href="ui/vendors/elegant-icon/style.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="ui/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="ui/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="ui/endors/revolution/css/layers.css" rel="stylesheet">
        <link href="ui/vendors/revolution/css/navigation.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="ui/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
        <link href="ui/vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">
        <link href="ui/vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
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
        
        <!--================Categories Banner Area =================-->
        <section class="solid_banner_area">
            <div class="container">
                <div class="solid_banner_inner">
                    <h3>shopping cart</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="shopping-cart.html">Shopping cart</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Categories Banner Area =================-->
        
        <!--================Shopping Cart Area =================-->
        <section class="shopping_cart_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart_product_list">
                            <h3 class="cart_single_title">Discount Cupon</h3>
                            <div class="table-responsive-md">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">product</th>
                                            <th scope="col">price</th>
                                            <th scope="col">qunatity</th>
                                            <th scope="col">total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">
                                                <img src="img/icon/close-icon.png" alt="">
                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="img/product/cart-product/cart-1.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>Mens Nike Bag</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p>$150</p></td>
                                            <td><input type="text" placeholder="01"></td>
                                            <td><p>$150</p></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">
                                                <img src="img/icon/close-icon.png" alt="">
                                            </th>
                                            <td>
                                                <div class="media">
                                                    <div class="d-flex">
                                                        <img src="img/product/cart-product/cart-2.jpg" alt="">
                                                    </div>
                                                    <div class="media-body">
                                                        <h4>Mens Nike Bag</h4>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><p>$150</p></td>
                                            <td><input type="text" placeholder="01"></td>
                                            <td><p>$250</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="calculate_shoping_area">
                            <h3 class="cart_single_title">Calculate Shoping <span><i class="icon_minus-06"></i></span></h3>
                            <div class="calculate_shop_inner">
                                <form class="calculate_shoping_form row" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="form-group col-lg-12">
                                        <select class="selectpicker">
                                            <option>United State America (USA)</option>
                                            <option>United State America (USA)</option>
                                            <option>United State America (USA)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" id="state" name="state" placeholder="State / Country">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Postcode / Zip">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <button type="submit" value="submit" class="btn submit_btn form-control">update totals</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="total_amount_area">
                            <div class="cupon_box">
                                <h3 class="cart_single_title">Discount Cupon</h3>
                                <div class="cupon_box_inner">
                                    <input type="text" placeholder="Enter your code here">
                                    <button type="submit" class="btn btn-primary subs_btn">apply cupon</button>
                                </div>
                            </div>
                            <div class="cart_totals">
                                <h3 class="cart_single_title">Discount Cupon</h3>
                                <div class="cart_total_inner">
                                    <ul>
                                        <li><a href="#"><span>Cart Subtotal</span> $400.00</a></li>
                                        <li><a href="#"><span>Shipping</span> Free</a></li>
                                        <li><a href="#"><span>Totals</span> $400.00</a></li>
                                    </ul>
                                </div>
                                <button type="submit" class="btn btn-primary update_btn">update cart</button>
                                <button type="submit" class="btn btn-primary checkout_btn">proceed to checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Shopping Cart Area =================-->
        
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
        <script src="ui/endors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
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