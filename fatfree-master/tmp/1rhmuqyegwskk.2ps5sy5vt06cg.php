<!DOCTYPE html>
<html>
<head>
	<style>
  div.gallery {
    margin: 20px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
    margin-bottom:30px; 
    margin-right: 5px;
  }

  div.gallery:hover {
    border: 1px solid #777;
  }

  div.gallery img {
    width: 100%;
    height: auto;
  }

  div.desc {
    padding: 15px;
    text-align: center;
  }
  div.kumpulanGallery{
    padding-left: 600px;
    padding-right: 200px;
  }
  button{
    border:none;
    padding: 0px;
    
    background-color: white;
  }
</style>
<title>Mencoba</title>
</head>
<body>
	<!-- Buat Include Header -->
  <?php echo $this->render('HeaderUser.htm',NULL,get_defined_vars(),0); ?>
  <?php echo $this->render('SidebarUser.htm',NULL,get_defined_vars(),0); ?>  

  <div class="kumpulanGallery">
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="22" > <img src="..\..\ui\images\Efek\lumberjack.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">ELECTRO HARMONIX LUMBERJACK LOGARRITHMIC </div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="23" > <img src="..\..\ui\images\Efek\memory-toy.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">ELECTRO HARMONIX MEMORY TOY PEDAL</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="24" > <img src="..\..\ui\images\Efek\pocket-metal-muff.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">ELECTRO HARMONIX POCKET METAL MUFF DISTORTION</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="25" > <img src="..\..\ui\images\Efek\ELECTROHARMONIXSUPEREGOSYNTHENGINE.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">ELECTRO HARMONIX SUPEREGO SYNTH ENGINE</div>
     </div>
   </form>
 </div>
  <?php echo $this->render('SidebarRekomendasi.htm',NULL,get_defined_vars(),0); ?>


<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
</body>
</html>

