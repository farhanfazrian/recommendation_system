

<aside class="l_widgest l_fillter_widget">
    <div class="l_w_title">
        <h3>Filter section</h3>
    </div>
    <div id="slider-range" class="ui_slider"></div>
    <label for="amount">Price:</label>
    <input type="text" id="amount" readonly>
</aside>

<aside class="l_widgest l_feature_widget">
    <div class="l_w_title">
      <h3>You might also like: </h3>
  </div>
  <?php foreach (($kumpulanPrdRekom?:[]) as $produk): ?>
      <div class="media">
        <div class="d-flex" style="padding-right: 0px;">
            <img src="<?= $produk['gambar'] ?>" alt=""  height="200" width="200">
        </div>
        <div class="media-body">
            <h4><?= $produk['nama'] ?></h4>
            <h5>Rp <script>document.write(formatUang(<?= $produk['harga'] ?>))</script></h5>
        </div>
    </div>
<?php endforeach; ?>
<!--<div class="media">
    <div class="d-flex">
        <img src="img/product/featured-product/408002264_jaguar_classic_60s_.jpg" alt="" height="200" width="200">
    </div>
    <div class="media-body">
        <h4>Crysp Denim<br />Montana</h4>
        <h5>$45.05</h5>
    </div>
</div>-->
</aside>
