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
       <button type="submit" name="Epiphone" value="11" > <img src="..\..\ui\images\Pick\407000399-class-mini-jazz-1.5-polished.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">GRAVITY CLASSIC MINI JAZZ 1.5 POLISHED PICK</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="12" > <img src="..\..\ui\images\Pick\GCLS15P-xlarge.jpg"   alt="Northern Lights" width="400" height="200"> </button>
       <div class="desc">GRAVITY CLASSIC STANDARD 1.5 POLISHED PICK </div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="13" > <img src="..\..\ui\images\Pick\407000427-razer-standard-2.0-elipsehole-polished.jpg" alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">GRAVITY RAZER STANDARD 2.0 ELIPSE HOLE POLISHED PICK </div>
     </div>
   </form>
   
 </div>


</div>
<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
</body>
</html>

