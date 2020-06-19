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
       <button type="submit" name="Epiphone" value="18" > <img src="..\..\ui\images\Strap\35-bm5-summeroflove.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">LOCKIT SUMMER OF LOVE GUITAR STRAP </div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="19" > <img src="..\..\ui\images\Strap\34-bm4-mythicalswords.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">LOCKIT MYTHICAL SWORDS GUITAR STRAP</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="20" > <img src="..\..\ui\images\Strap\31-bm1-bluejourney.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">LOCKIT BLUE JOURNEY GUITAR STRAP</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="21" > <img src="..\..\ui\images\Strap\012-p3-blk.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">LOCKIT BLACK GUITAR STRAP</div>
     </div>
   </form>
 </div>


</div>
<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
</body>
</html>

