<?php
	include 'db/db_connection.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>TOPSIS METHOD - Determination Subject Interest Areas</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css"
		href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="css/style.css" />
</head>

<body class="form-v10">
	<nav class="navbar navbar-expand-lg navbar-light bg-custom">
		<div class="container">
			<a class="navbar-brand h1 mb-0 text-light" href="#">TOPSIS METHOD</a>
			<button class="navbar-toggler bg-custom" type="button" data-toggle="collapse" data-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link text-light" href="view/test.php">Try now <span
								class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active">
						<a class="nav-link text-light" href="view/team.php">Our Team <span
								class="sr-only">(current)</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page-content">
		<div class="form-v10-content p-4">
			<div class="m-4">
				<h5 class="text-center title">Determination Subject Interest Areas</h5>
				<h6 class="text-center sub-title">Penentuan Bidang Minat Mata Kuliah</h6>
				<div class="detail">
					<label class="label-title">Deskripsi :</label>
					<p class="description">Aplkasi untuk membantu mahasiswa  Teknik Informatika UIN Maulana Malik Ibrahim Malang dalam memilih bidang minat pada mahasiswa yang akan memasuki 
						semester 6, diharapkan dengan adanya sistem ini dapat membantu mahasiswa agar tidak merasa kebingungan dalam memilih bidang minat mereka.</p>
				</div>
				<div class="detail">
					<label class="label-title">Metode :</label>
					<p class="description">TOPSIS <span style="font-style: italic;">(Technique for Order of
							Preference by Similarity to Ideal Solution)</span></p>
				</div>
				<div class="detail">
						<label class="label-title">Batasan Masalah :</label>
						<p class="description">Bidang Minat Mata Kuliah Jurusan Teknik Informatika UIN Maulana Malik Ibrahim Malang</p>
					</div>
				<div class="detail">
					<label class="label-title">Source Code :</label>
					<p class="description">Bootstrap dan PHP 7</p>
				</div>

			</div>
			<div class="text-center mb-4">
				<a href="view/test.php" class="btn btn-secondary btn-custom">Cek Minatmu</a>
			</div>
			<div class="text-center">
				<img src="asset/view.JPG" alt="Tampilan Aplikasi" width="75%">
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

</html>