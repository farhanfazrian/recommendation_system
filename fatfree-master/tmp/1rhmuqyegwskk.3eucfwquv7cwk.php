<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	input.inputRating[type=text] {
		width: 100%;
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		box-sizing: border-box;
	}
	div.mainProduct{
		width:750px;
		height: 410px;
		background-color: white;
		border :1px solid #c0c8c8;
		padding: 10px;
		margin : auto;
		margin-top: 20px;
		margin-bottom: 20px;
	}
	div.productContent{
		border :1px solid #c0c8c8;
		width: 400px;
		height: 400px;
		margin: 0px;
		display: inline-block;
	}
	div.deskripsiProd{
		width:325px;
		height:300px;
		margin: auto;
		margin-top: 50px;
		float:right;
	}
	input.textIncrement{
		width: 12%;

	}
	input.buttonIncrement{
		margin-bottom: 20px;
		background-color: #d05b5b;
		color: white;
		border: none;
		cursor: pointer;
		width: 25px;
		height: 25px;
	}
	#addtoChart{
		background-color: #d05b5b;
		color: white;
		border: none;
		cursor: pointer;
		width: 50%;
		height: 15%;
	}
	
	.tab {
		overflow: hidden;
		border: 1px solid #ccc;
		background-color: #f1f1f1;
		width: 50%;
		margin:auto;
		margin-bottom: 20px;

	}

	/* Style the buttons inside the tab */
	.tab button {
		background-color: inherit;
		float: left;
		border: none;
		outline: none;
		cursor: pointer;
		padding: 14px 16px;
		transition: 0.3s;
		font-size: 17px;


	}

	/*Ganti warna button saat hover */
	.tab button:hover {
		background-color: #ddd;
	}

	/* Menandakan button mana yang sedang aktif */
	.tab button.active {
		background-color: #ccc;
	}

	
	.tabcontent {
		display: none;

		padding: 6px 12px;
		border: 1px solid #ccc;

		width: 48.55%;
		margin:auto;
		margin-bottom: 50px;
	}
	.inputRating button{
		background-color: #d05b5b;
		color: white;
		border: none;
		cursor: pointer;
		width: 25%;
		height: 50%;
	}
</style>
</head>
<body>
	<?php echo $this->render('HeaderUser.htm',NULL,get_defined_vars(),0); ?>
	<div class ="mainProduct">
		<div class = "productContent">
			<img src=<?= $prd['gambar'] ?> alt="Trolltunga Norway" width="400" height="400">

		</div>
		<div class="deskripsiProd">
			<h2> <?= $prd['nama'] ?> </h2>
			<h3>
			<?= $prd['harga'] ?></h3>
			<form>
				<input class="textIncrement" type="text" id="number" value="0"/>
				<input class="buttonIncrement" type="button" onclick="incrementValue()" value="+" />
				<input class="buttonIncrement" type="button" onclick="decrementValue()" value="-" />
			</form>
			<button id="addtoChart">ADD TO CHART</button>
		</div>

	</div>

	
	<div class="tab">
		<button class="tablinks" onclick="openCity(event, 'Details')">Details</button>
		<button class="tablinks" onclick="openCity(event, 'Reviews')">Reviews</button>

	</div>

	<!-- Tab content -->
	<div id="Details" class="tabcontent">
		<h3>Details</h3>
		<p>Since Epiphone introduced the G-400 over 15 years ago, it has been the go-to instrument for those wanting real SG tone and styling at an economical price. Every serious player wants an SG, and here's a real one that sounds as good as it looks. The original SG not only rivaled guitars of its own era for sonic variety, but also proved to be a sign of things to come. Hard rock, metal, and scores of rockers embraced the original SG and made it a classic. The G-400 gives you the sound and look of a real SG without the vintage price tag.
		</p>
	</div>

	<div id="Reviews" class="tabcontent">
		<h3>Reviews
		</h3>
		<h5>You're Reviewing</h5>
		<h5>Your Rating</h5>
		<div class="slidecontainer">
			<input type="range" min="0" max="5" value="0" class="slider" id="sliderHarga">
			<p>Rating: <span id="nilai"></span></p>
		</div>
		<form method="POST" class="inputRating">

			<label for="rvw"><b>Review</b></label>
			
			<input class="inputRating" type="text" placeholder="Enter Review" name="review">

			<button name="nilaiRating" class="inputRating" >Submit</button>
		</form>
	</div>

	<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
	<script type="text/javascript">
		function incrementValue()
		{
			var value = parseInt(document.getElementById('number').value, 10);
			value = isNaN(value) ? 0 : value;
			value++;
			document.getElementById('number').value = value;
		}
		function decrementValue()
		{
			var value = parseInt(document.getElementById('number').value, 10);
			if(value!=0){
				value = isNaN(value) ? 0 : value;
				value--;
				document.getElementById('number').value = value;
			}
		}
		function openCity(evt, tabname) {
			var i, tabcontent, tablinks;
			tabcontent = document.getElementsByClassName("tabcontent");
			for (i = 0; i < tabcontent.length; i++) {
				tabcontent[i].style.display = "none";
			}
			tablinks = document.getElementsByClassName("tablinks");
			for (i = 0; i < tablinks.length; i++) {
				tablinks[i].className = tablinks[i].className.replace(" active", "");
			}
			document.getElementById(tabname).style.display = "block";

			evt.currentTarget.className += " active";
		}
		function myFunction() {
			var x = document.getElementById("myDIV");

			if (x.style.display === 'block') {
				x.style.display = 'none';
			} else {
				x.style.display = 'block';
			}
		}
		var slider = document.getElementById("sliderHarga");
		var output = document.getElementById("nilai");
		output.innerHTML = slider.value;

		slider.oninput = function() {
			output.innerHTML = this.value;
		}
	</script>
</body>
</html>