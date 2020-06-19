
<style type="text/css">
 input[type=range] {
  height: 38px;
  -webkit-appearance: none;
  margin: 10px 0;
  width: 100%;
}
input[type=range]:focus {
  outline: none;
}
input[type=range]::-webkit-slider-runnable-track {
  width: 100%;
  height: 3px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 1px 1px 1px #000000;
  background: #000000;
  border-radius: 5px;
  border: 1px solid #000000;
}
input[type=range]::-webkit-slider-thumb {
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 15px;
  width: 5px;
  border-radius: 5px;
  background: #000000;
  cursor: pointer;
  -webkit-appearance: none;
  margin-top: -6.5px;
}
input[type=range]:focus::-webkit-slider-runnable-track {
  background: #000000;
}
input[type=range]::-moz-range-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  box-shadow: 1px 1px 1px #000000;
  background: #000000;
  border-radius: 5px;
  border: 1px solid #000000;
}
input[type=range]::-moz-range-thumb {
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 30px;
  width: 15px;
  border-radius: 5px;
  background: #000000;
  cursor: pointer;
}
input[type=range]::-ms-track {
  width: 100%;
  height: 5px;
  cursor: pointer;
  animate: 0.2s;
  background: transparent;
  border-color: transparent;
  color: transparent;
}
input[type=range]::-ms-fill-lower {
  background: #000000;
  border: 1px solid #000000;
  border-radius: 10px;
  box-shadow: 1px 1px 1px #000000;
}
input[type=range]::-ms-fill-upper {
  background: #000000;
  border: 1px solid #000000;
  border-radius: 10px;
  box-shadow: 1px 1px 1px #000000;
}
input[type=range]::-ms-thumb {
  margin-top: 1px;
  box-shadow: 1px 1px 1px #000000;
  border: 1px solid #000000;
  height: 30px;
  width: 15px;
  border-radius: 5px;
  background: #000000;
  cursor: pointer;
}
input[type=range]:focus::-ms-fill-lower {
  background: #000000;
}
input[type=range]:focus::-ms-fill-upper {
  background: #000000;
}

</style>
<aside class="l_widgest l_fillter_widget">
  <div class="l_w_title">
    <h3>Filter section</h3>
   <!-- </div>
    <div id="slider-range" class="ui_slider"></div>
    <label for="amount">Price: </label>
    <input type="text" id="amount" readonly>-->
    <form>

      <input class="ui_slider" type="range" min="10000" max="60000000" value="1000000" id="sliderMin" step="10000" name="batasMin">
      <p> From Rp  <span id="nilaiMin" name="nilaiKecil" ></span></p>
      <input class="ui_slider" type="range" min="10000" max="60000000" value="1000000" id="sliderMax" step="10000" name="batasMax">

      <p> To Rp  <span id="nilaiMax" name="nilaiBesar"></span></p>
      <button class="add_cart_btn" type="submit">submit</button>
    </form>
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
        <div class="l_p_text">
         
          <!--<li class="p_icon"><a href="#"><i class="icon_piechart"></i></a></li>-->
          
          <!--<li class="p_icon"><a href="#"><i class="icon_heart_alt"></i></a></li>-->
          
          <p><?= $produk['nama'] ?></p>
          <h5><!--<del>$45.50</del>-->Rp <script>document.write(formatUang(<?= $produk['harga'] ?>))</script></h5>
          <ul>
           <li><a class="add_cart_btn" href="/detail_produk/<?= $produk['idproduk'] ?>">Detail</a></li>
         </ul>
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
<script type="text/javascript">
 var sliderMax = document.getElementById("sliderMax");
 var outputMax = document.getElementById("nilaiMax");
 outputMax.innerHTML = sliderMax.value;

 var sliderMin = document.getElementById("sliderMin");
 var outputMin = document.getElementById("nilaiMin");
 outputMin.innerHTML = sliderMin.value;

 sliderMax.oninput = function() {
  outputMax.innerHTML = this.value;
}
sliderMin.oninput = function() {
  outputMin.innerHTML = this.value;
}
</script>
