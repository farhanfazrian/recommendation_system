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
       <button type="submit" name="Epiphone" value="5" > <img src="..\..\ui\images\Acoustic_Gitar\ad810e.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">CORT AD-810-OP ACOUSTIC GUITAR</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="7" > <img src="..\..\ui\images\Acoustic_Gitar\b_caballero8.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">Manuel Rodriguez Caballero 8 Nylon String</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="8" > <img src="..\..\ui\images\Acoustic_Gitar\l300vf.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">CORT ACOUSTIC GUITAR L300VF NATr</div>
     </div>
   </form>
 </div>


</div>
<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
</body>
</html>

