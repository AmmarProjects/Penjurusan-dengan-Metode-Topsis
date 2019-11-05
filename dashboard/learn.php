<?php
include '../db/db_connection.php';
// ID UJI
$ID = $_POST['idUji'];

// Variabel Bobot IP
$C1_CS = ($_POST['matkul3']+$_POST['matkul4'])/2;
$C1_SE = ($_POST['matkul5']+$_POST['matkul6'])/2;
$C1_IS = ($_POST['matkul7']+$_POST['matkul8'])/2;
$C1_MM = ($_POST['matkul1']+$_POST['matkul2'])/2;

// Variabel Bobot Angket
$C2_CS = ($_POST['num5']+$_POST['num6']+$_POST['num7']+$_POST['num8'])/4;
$C2_SE = ($_POST['num13']+$_POST['num14']+$_POST['num15']+$_POST['num16'])/4;
$C2_IS = ($_POST['num9']+$_POST['num10']+$_POST['num11']+$_POST['num12'])/4;
$C2_MM = ($_POST['num1']+$_POST['num2']+$_POST['num3']+$_POST['num4'])/4;


//INSERT IP
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (1,1,$C1_CS,$ID)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (2,1,$C1_SE,$ID)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (3,1,$C1_IS,$ID)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (4,1,$C1_MM,$ID)");

//ANGKET
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (1,2,$C2_CS,$ID)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (2,2,$C2_SE,$ID)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (3,2,$C2_IS,$ID)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (4,2,$C2_MM,$ID)");

header("location:topsis.php?id=$ID");
?>