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
       <button type="submit" name="Epiphone" value="14" > <img src="..\..\ui\images\Senar\daddario_daddario-ej36-12-string-80-20-bronze-senar-gitar-akustik_full06.jpg" width="600" height="400"> </button>
       <div class="desc">Epiphone E/Guitar G-400 PRO-EB</div>
     </div>
   </form>
   <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="15" > <img src="..\..\ui\images\Senar\ej38.jpg" width="600" height="400"> </button>
       <div class="desc">Epiphone E/Guitar G-400 PRO-EB</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="16" > <img src="..\..\ui\images\Senar\daddario-eps520.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">Cort Electric Guitar G110X WH</div>
     </div>
   </form>
    <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="17" > <img src="..\..\ui\images\Senar\daddario-exl120-7.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">Cort Classic TC-BIM ELECTRIC GUITAR</div>
     </div>
   </form>
 </div>


</div>
<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
</body>
</html>

