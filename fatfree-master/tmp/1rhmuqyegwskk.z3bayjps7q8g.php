<!DOCTYPE html>
<html>
<head>
	<title>Skripsi Scalability</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style type="text/css">

	body{
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		margin: 0px !important;
		height: 100vh;

	}
	.wrapper{
		display: flex;
		flex-wrap: wrap;
		justify-content: center;

	}
	.boxBesar{
		margin-top: 100px;
		
		display: flex;
		width: 1200px;
		height: 530px;
		box-sizing: border-box;
		flex-wrap: wrap;
		justify-content: center;
	}

	.wrapperBox{
		display: flex;
		flex-wrap: wrap;
		width: 1200px;
	}
	
	.penjelasan{
		width: 880px;
		height: 530px;
		box-sizing: border-box;
		border : 1px solid #ddd;
		
	}
	.penjelasan p{
		padding: 10px;
		padding-top: 150px;

	}
	.gambar img{
		display: flex;
		flex-wrap: wrap;
		
		padding:10px;
		padding-top: 75px;
		width: 300px;
		height: 300px;			
	}
	.boxGambar{
		width: 320px;
		height: 530px;
		box-sizing: border-box;
		border : 1px solid #ddd;	
	}

</style>
</head>
<body>
	
	<!-- Buat Include Header -->	
	<div class="wrapper">
		<?php echo $this->render('HeaderGuest.htm',NULL,get_defined_vars(),0); ?>
		<div class="wrapperBox">	
			<div class="boxBesar">
				<div class="boxGambar">
					<div class="gambar" >
						<img src ="..\..\ui\images\UNPAR.jpg" >
					</div>
				</div>
				<div class="penjelasan">
					<h3>Website ini merupakan website e-commerce penjualan alat musik gitar dan juga aksesoris gitar yang dibangun oleh Farhan Fariz Fazrian mahasiswa Teknik Informatika Universitas Katolik Parahyangan. Maksud pembangungan website ini adalah untuk menjawab rumusan masalah yang terdapat pada tujuan penulisan skripsi. </h3>
				</div>

			</div>
		</div>

		
	</div>
	
	<?php echo $this->render('footer.htm',NULL,get_defined_vars(),0); ?>
	
</body>

</html>