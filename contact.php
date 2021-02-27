<?php 

	include'koneksi.php';

	if(isset($_POST["submit"])){

		$nama =$_POST["nama"];
		$email =$_POST["email"];
		$pesan =$_POST["pesan"];
		$succes = "contact.php";

		// Menginputkan data ke database
		$query =mysqli_query($conn,"insert into tbl_coments values('$nama','$email','$pesan')");

		// Mengalihkan Kembali ke contact us
		echo "<script type='text/javascript'>alert('Sukses Mengirim Komentar ^_^');window.location='$succes'</script>";
	}

 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<title>COMPANY - PPTIK ITB</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="asset/css/Bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, intia-scale=1">
	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
	<!-- Iconify -->
	<script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
</head>
<body>

	<!-- Navbar -->

	<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
		<div class="container">
		  <a class="navbar-brand text-white" href="index.php" style="font-family: 'Caveat', cursive;"><strong>PPTIK - ITB</strong></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse ml-5" id="navbarNav" style="font-family: 'Play', sans-serif;">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link ml-3 text-white" href="index.php">BERANDA</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link ml-3 text-white" href="about.html">TENTANG KAMI</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link ml-3 text-white" href="product.php">PRODUK</a>
		      </li>
		       <li class="nav-item">
		        <a class="nav-link ml-3 text-white" href="#">HUBUNGI KAMI</a>
		      </li>
		    </ul>
		  </div>
	  </div>
	</nav><br/>

	<style>
		body{
			background-image: url('img/bohlam.jpg');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100%;
		}
	</style>

	<!-- Contact Us -->
	<div class="continer">
	<h3 class="mt-5 mb-3 text-center text-white" style="font-family: 'Cinzel', serif;">HUBUNGI KAMI</h3>
	<hr>

	<form method="post" action="">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<div class="shadow-lg p-3 mb-5 rounded">
						<div class="form-group">
							<label class="text-white"><strong>Nama Lengkap</strong></label>
							<input type="text" class="form-control" name="nama" placeholder="Nama">
						</div>
						<div class="form-group">
							<label  class="text-white"><strong>Email</strong></label>
							<input id="myemail" type="email" class="form-control" name="email" placeholder="Email">
						</div>
						<div class="form-group">
							<label class="text-white"><strong>Pesan</strong></label>
							<textarea type="text" class="form-control" rows="5" name="pesan" placeholder="Pesan"></textarea>
						</div>
						<button type="submit" class="btn btn-primary rounded-pill" name="submit">Submit <i class="far fa-paper-plane"></i></button> 
						<button type="reset" class="btn btn-primary rounded-pill">Reset <i class="fas fa-reply"></i></button>
					</div>
				</div>	
				<div class="col-md-3">
					<img src="img/contact.png" width="400px">
				</div>
			</div>
		</div>
	</form>

	<div class="container mt-3">
	<h3 class="mt-5 mb-3 text-center text-white" style="font-family: 'Cinzel', serif;">LOKASI KAMI</h3>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.017938327542!2d107.60773131434719!3d-6.888454369319718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7c955317869%3A0xf405a0b0b9eb15a!2sPPTIK%20ITB!5e0!3m2!1sid!2sid!4v1613004803455!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

	<!-- Footer -->
	<footer class="mt-5 bg-dark">
            <div class="container">
                <div class="row text-white p-4 text-justify">
                    <div class="col-md-4 mt-1"><br>
                        <h3 style="font-family: 'Montserrat', sans-serif;">PPTIK ITB</h3>
                        <p class="mt-3">Setiap warga negara Indonesia harus dapat memanfaatkan TIK untuk kemajuan perikehidupannya.</p>
                    </div>
                    <div class="col-md-4"><br>
                        <h3 style="font-family: 'Montserrat', sans-serif;">PPTIK SERVICE</h3>
                        <div class="form-group">
                            <p class="mt-3"><i class="fas fa-phone-alt"></i> +62-22-4254034   / 0811 2298 086</p>
                        </div>
                        <div class="form-group">
                            <p class="mt-3"><i class="far fa-envelope"></i><a href="https://mail.google.com/mail/u/0/#inbox?compose=DmwnWtDkwghCjjpSXlspVFMCwRDnXTBbKgCxsCzggkgQVXzdPwxMJWbxGpNJBkjmdcPKcGsfRncV" target="_blank"> yuliawati.pptik@gmail.com </a></p>
                        </div>
                        <div class="form-group">
                            <p class="mt-3"><i class="fas fa-fax"></i>  +62-22-2508763</p>
                        </div>
                        <div class="form-group">
                            <p class="mt-3"><span class="iconify" data-icon="whh:website" data-inline="false"></span> <a href="https://pptik.id/" target="_blank">pptik.id</a></p>
                        </div>
                    </div>
                        <div class="col-md-4 mt-3">
                            <form method="post" action="">
                                <h3 style="font-family: 'Montserrat', sans-serif;">JAM KERJA</h3>
                                <div class="form-group">
                                   Senin - Jumat : 10:00 - 17:00
                                </div>
                                <div class="form-group">
                                   Sabtu - Minggu : Tutup
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </footer>

	<script src="https://cdn.rawgit.com/PascaleBeier/bootstrap-validate/v2.2.0/dist/bootstrap-validate.js" ></script>
	<script>
		bootstrapValidate('#myemail', 'email:Masukkan alamat email yang valid')
		bootstrapValidate('#myemail1', 'email:Masukkan alamat email yang valid')
		bootstrapValidate('#mynum', 'numeric:Harap hanya masukkan karakter numerik')
	</script>

</body>
</html>