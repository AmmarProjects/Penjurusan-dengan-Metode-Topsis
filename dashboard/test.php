<?php
include '../db/db_connection.php';
$resQuestion = mysqli_query($mysqli, "SELECT * FROM tabel_soal ORDER BY `id_alternatif`");
$resMatkul = mysqli_query($mysqli, "SELECT * FROM tabel_matkul ORDER BY `id_alternatif`");
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>TOPSIS METHOD - Determination Subject Interest Areas</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="../css/montserrat-font.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css"
		href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
	<link rel="stylesheet" href="assets/css/form.css" />
</head>

<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="topsis.php" method="post" id="myform">
				<div class="form-left mb-4">
					<h2>Questioner</h2>
					<div class="form-row">
						<!-- Table  -->
						<table class="table table-bordered">
							<!-- Table head -->
							<thead>
								<tr>
									<th>Pertanyaan</th>
									<th>TS</th>
									<th>B</th>
									<th>S</th>
									<th>SS</th>
								</tr>
							</thead>
							<!-- Table head -->

							<!-- Table body -->
							<tbody>
								<?php
								while($dataRes = mysqli_fetch_array($resQuestion)) {
									echo'
									<tr>
										<th scope="row">
											'.$dataRes['pertanyaan'].'
										</th>
										<td>
											<div class="custom-control custom-radio">
												<input type="radio" id="'.$dataRes['id_soal'].'1" name="num'.$dataRes['id_soal'].'" class="custom-control-input" value="1">
												<label class="custom-control-label" for="'.$dataRes['id_soal'].'1"></label>
											</div>
										</td>
										<td>
											<div class="custom-control custom-radio">
												<input type="radio" id="'.$dataRes['id_soal'].'2" name="num'.$dataRes['id_soal'].'" class="custom-control-input" value="2">
												<label class="custom-control-label" for="'.$dataRes['id_soal'].'2"></label>
											</div>
										</td>
										<td>
											<div class="custom-control custom-radio">
												<input type="radio" id="'.$dataRes['id_soal'].'3" name="num'.$dataRes['id_soal'].'" class="custom-control-input" value="3">
												<label class="custom-control-label" for="'.$dataRes['id_soal'].'3"></label>
											</div>
										</td>
										<td>
											<div class="custom-control custom-radio">
												<input type="radio" id="'.$dataRes['id_soal'].'4" name="num'.$dataRes['id_soal'].'" class="custom-control-input" value="4">
												<label class="custom-control-label" for="'.$dataRes['id_soal'].'4"></label>
											</div>
										</td>
									</tr>
									';
								}?>
							</tbody>
							<!-- Table body -->
						</table>
						<!-- Table  -->
					</div>
				</div>
				<div class="form-right">
					<h2>IP Mata Kuliah Teori</h2>
					<?php
						while($dataRes = mysqli_fetch_array($resMatkul)) {
							echo'
							<div class="form-row">
							<label class="label label-white">'.$dataRes['nama_matkul'].'</label>
							<select name="matkul'.$dataRes['id_matkul'].'">
								<option class="option" selected>-- Masukkan Nilai Mata Kuliah --</option>
								<option class="option" value="4.00">A</option>
								<option class="option" value="3.50">B+</option>
								<option class="option" value="3.00">B</option>
								<option class="option" value="2.50">C+</option>
								<option class="option" value="2.00">C </option>
							</select>
							<span class="select-btn">
								<i class="zmdi zmdi-chevron-down"></i>
							</span>
						</div>';
						}
					?>
					<div class="form-row-last">
						<input type="submit" name="register" class="register" value="Cek Minatmu">
					</div>
				</div>
			</form>
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
<script>
	$('tr.input.form1').on('change', function () {
		$('tr.input.form1').not(this).prop('checked', false);
	});
	
</script>

</html>