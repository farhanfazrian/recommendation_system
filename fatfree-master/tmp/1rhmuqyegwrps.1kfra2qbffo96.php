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

      <link rel="icon" href="../ui/images/fav-icon.png" type="image/x-icon" />
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Skripsi Non-Scalability</title>

      <!-- Icon css link -->
      <link href="../ui/css/font-awesome.min.css" rel="stylesheet">
      <link href="../ui/vendors/line-icon/css/simple-line-icons.css" rel="stylesheet">
      <link href="../ui/vendors/elegant-icon/style.css" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="../ui/css/bootstrap.min.css" rel="stylesheet">

      <!-- Rev slider css -->
      <link href="../ui/vendors/revolution/css/settings.css" rel="stylesheet">
      <link href="../ui/vendors/revolution/css/layers.css" rel="stylesheet">
      <link href="../ui/vendors/revolution/css/navigation.css" rel="stylesheet">

      <!-- Extra plugin css -->
      <link href="../ui/vendors/owl-carousel/owl.carousel.min.css" rel="stylesheet">
      <link href="../ui/vendors/bootstrap-selector/css/bootstrap-select.min.css" rel="stylesheet">

      <link href="../ui/css/style.css" rel="stylesheet">
      <link href="../ui/css/responsive.css" rel="stylesheet">

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
    <!--================Shopping Cart Area =================-->
    <section class="shopping_cart_area p_100">
      <div class="container">
       <div class="row">
        <div class="col-lg-8">
          <?php if ($idProdukUpdate<'1'): ?>
           <div class="cart_product_list">
            <h3 class="cart_single_title">List Products</h3>
            <div class="table-responsive-md">
              <table class="table">
                <thead>
                  <tr>
                    <th style="text-align: center">idproduk</th>
                    <th style="text-align: center">deskripsi</th>
                    <th style="text-align: center">harga</th>
                    <th style="text-align: center">gambar</th>
                    <th style="text-align: center">nama</th>
                    <th style="text-align: center">category</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach (($sp?:[]) as $produk): ?>
                    <tr>
                      <td align="center"><?= $produk['idproduk'] ?></td>
                      <td align="center"><?= $produk['deskripsi'] ?></td>
                      <td align="center"><?= $produk['harga'] ?></td>
                      <td>
                        <div class="media">
                          <div class="d-flex">
                            <img src="<?= $produk['gambar'] ?>" height="200" width="200">
                          </div>
                        </div>
                      </td>
                      <td align="center"><?= $produk['nama'] ?></td>
                      <td align="center"><?= $produk['category'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        <?php endif; ?>
        <?php if ($idProdukUpdate>'0'): ?>
          <div class="cart_product_list">
            <h3 class="cart_single_title">Detail Produk Update</h3>
            <div class="table-responsive-md">
              <table class="table">
                <thead>
                  <tr>
                    <th style="text-align: center">idproduk</th>
                    <th style="text-align: center">deskripsi</th>
                    <th style="text-align: center">harga</th>
                    <th style="text-align: center">gambar</th>
                    <th style="text-align: center">nama</th>
                    <th style="text-align: center">category</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach (($prdUpdate?:[]) as $produk): ?>
                    <tr>
                      <td align="center"><?= $produk['idproduk'] ?></td>
                      <td align="center"><?= $produk['deskripsi'] ?></td>
                      <td align="center"><?= $produk['harga'] ?></td>
                      <td>
                        <div class="media">
                          <div class="d-flex">
                            <img src="<?= $produk['gambar'] ?>" height="200" width="200">
                          </div>
                        </div>
                      </td>
                      <td align="center"><?= $produk['nama'] ?></td>
                      <td align="center"><?= $produk['category'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        <?php endif; ?>
              <!--<table border="1">
                <thead>
                  <tr>

                    <th style="text-align: center">idproduk</th>
                    <th style="text-align: center">deskripsi</th>
                    <th style="text-align: center">harga</th>
                    <th style="text-align: center">gambar</th>
                    <th style="text-align: center">nama</th>
                    <th style="text-align: center">category</th>

                  </tr>
                </thead>
                <tbody>
                  <?php foreach (($sp?:[]) as $produk): ?>
                    <tr>
                      <td align="center"><?= $produk['idproduk'] ?></td>
                      <td align="center"><?= $produk['deskripsi'] ?></td>
                      <td align="center"><?= $produk['harga'] ?></td>
                      <td align="center"><?= $produk['gambar'] ?></td>
                      <td align="center"><?= $produk['nama'] ?></td>
                      <td align="center"><?= $produk['category'] ?></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>-->
              <div class="calculate_shoping_area">
                <h3 class="cart_single_title">Pilih ID Produk</h3>
                <div class="calculate_shop_inner">
                  <form class="calculate_shoping_form row">
                   <div class="form-group col-lg-12">
                    <select name="produkUpdate" class="selectpicker" onchange="location = this.value;" >
                      <option value="" selected disabled hidden>Pilih Id Produk</option>
                      <?php foreach (($sp?:[]) as $produk): ?>
                        <option value="/update/<?= $produk['idproduk'] ?>"><?= $produk['idproduk'] ?></option>
                      <?php endforeach; ?>  
                    </select>         
                  </div>
                </form>
              </div>
            </div>
            <?php if ($idProdukUpdate>'0'): ?>
              <div class="calculate_shoping_area">
               <h3 class="cart_single_title">Detail Update Produk<span></span></h3>
               <div class="calculate_shop_inner">
                <form class="calculate_shoping_form row" action="\updateProduk" method="post" id="contactForm" novalidate="novalidate">      
                  <?php foreach (($prdUpdate?:[]) as $produk): ?>
                     <div class="form-group col-lg-12">
                      <input type="text" class="form-control" id="zip" name="idproduk" placeholder="" value="<?= $produk['idproduk'] ?>" readonly="">
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="text" class="form-control" id="zip" name="deskripsi" placeholder="Deskripsi" value="<?= $produk['deskripsi'] ?>" required="">
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="number" class="form-control" id="state" name="harga" placeholder="Harga" value="<?= $produk['harga'] ?>" required="">
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="text" class="form-control" id="zip" name="urlGambar" placeholder="URL Gambar" value="<?= $produk['gambar'] ?>"required="">
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="text" class="form-control" id="state" name="nama" placeholder="Nama" value="<?= $produk['nama'] ?>"required="">
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="number" class="form-control" min="1" max="5" id="zip" name="kategori" value="<?= $produk['category'] ?>"placeholder="Kategori" required="">
                    </div>
                  <?php endforeach; ?>
                  <div class="form-group col-lg-12">
                    <button type="submit" value="submit" class="btn submit_btn form-control">Update</button>
                  </div>
                <?php endif; ?>
              </form>
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
 <script src="../ui/js/jquery-3.2.1.min.js"></script>
 <!-- Include all compiled plugins (below), or include individual files as needed -->
 <script src="../ui/js/popper.min.js"></script>
 <script src="../ui/js/bootstrap.min.js"></script>
 <!-- Rev slider js -->
 <script src="../ui/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
 <script src="../ui/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
 <script src="../ui/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
 <script src="../ui/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
 <script src="../ui/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
 <script src="../ui/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
 <script src="../ui/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
 <script src="../ui/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
 <!-- Extra plugin css -->
 <script src="../ui/vendors/counterup/jquery.waypoints.min.js"></script>
 <script src="../ui/vendors/counterup/jquery.counterup.min.js"></script>
 <script src="../ui/vendors/owl-carousel/owl.carousel.min.js"></script>
 <script src="../ui/vendors/bootstrap-selector/js/bootstrap-select.min.js"></script>
 <script src="../ui/vendors/image-dropdown/jquery.dd.min.js"></script>
 <script src="../ui/js/smoothscroll.js"></script>
 <script src="../ui/vendors/isotope/imagesloaded.pkgd.min.js"></script>
 <script src="../ui/vendors/isotope/isotope.pkgd.min.js"></script>
 <script src="../ui/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
 <script src="../ui/vendors/vertical-slider/js/jQuery.verticalCarousel.js"></script>
 <script src="../ui/vendors/jquery-ui/jquery-ui.js"></script>

 <script src="../ui/js/theme.js"></script>

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


