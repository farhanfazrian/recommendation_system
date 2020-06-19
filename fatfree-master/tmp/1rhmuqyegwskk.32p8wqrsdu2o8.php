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
    overflow-y:hidden; 
    height : 250px;
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
    <?php foreach (($sp?:[]) as $produk): ?>

      <a href="/detail_produk/<?= $produk['idproduk'] ?>">
       <div class="gallery">
         <button type="submit" name="Epiphone" value="<?= $produk['idproduk'] ?>" > <img src="<?= $produk['gambar'] ?>"   alt="Northern Lights" width="600" height="400"> 
         <div class="desc"><?= $produk['nama'] ?></div>
       </div> 
     </a>

   <?php endforeach; ?>
   <!--<form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="2" > <img src="..\..\ui\images\Elektrik_Guitar\cort-g110x.jpg"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">Cort Electric Guitar G110X WH</div>
     </div>
   </form>
   <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="3" > <img src="..\..\ui\images\Elektrik_Guitar\classic-tc_bim_.png"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">Cort Classic TC-BIM ELECTRIC GUITAR</div>
     </div>
   </form>
   <form  method="POST" action="/detail_produk">
     <div class="gallery">
       <button type="submit" name="Epiphone" value="4" > <img src="..\..\ui\images\Elektrik_Guitar\classic-tc_sbn_.png"   alt="Northern Lights" width="600" height="400"> </button>
       <div class="desc">Cort Classic TC-SBN ELECTRIC GUITAR</div>
     </div>
   </form>-->
 </div>



 <?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
</body>
</html>

