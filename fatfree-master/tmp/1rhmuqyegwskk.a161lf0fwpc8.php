 <div class="container">
    <div class="related_product_inner">
        <h2 class="single_c_title">Related Products: </h2>
        <div class="row">
            <?php foreach (($kumpulanPrdRekomItemBased?:[]) as $produk): ?>
                <div class="col-lg-3 col-sm-6">
                    <div class="l_product_item">
                        <div class="l_p_img">
                            <center><img src="<?= $produk['gambar'] ?>" alt="" height="200" width="200"></center>
                     </div>
                     <div class="l_p_text">
                       <ul>

                        <li><a class="add_cart_btn" href="/detail_produk/<?= $produk['idproduk'] ?>">Detail</a></li>

                    </ul>
                    <h4><?= $produk['nama'] ?></h4>
                    <h5>Rp <script>document.write(formatUang(<?= $produk['harga'] ?>))</script></h5>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!--<div class="col-lg-3 col-sm-6">
        <div class="l_product_item">
            <div class="l_p_img">
             <img src="img/product/featured-product/b_mg_epiphone_g400_1.jpg" alt=""  height="200" width="200">
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
          <img src="img/product/epiphone-eguitar--limited-union-jack-sheraton.jpg" alt=""  height="200" width="200">
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
          <img src="img/product/epiphone-eguitar--limited-union-jack-sheraton.jpg" alt=""  height="200" width="200">
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
</div>-->
</div>

</div>
</div>