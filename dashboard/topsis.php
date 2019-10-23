<?php
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

include '../db/db_connection.php';
$resNilai = mysqli_query($mysqli, "SELECT * FROM `tabel_penilaian` GROUP BY id_uji");
$newVal = mysqli_num_rows($resNilai) + 1;
echo $newVal;

//INSERT IP
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (1,1,$C1_CS,3)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (2,1,$C1_SE,3)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (3,1,$C1_IS,3)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (4,1,$C1_MM,3)");

//ANGKET
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (1,2,$C2_CS,3)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (2,2,$C2_SE,3)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (3,2,$C2_IS,3)");
$resTopsis = mysqli_query($mysqli, "INSERT INTO `tabel_penilaian`(`id_alternatif`, `id_bobot`, `nilai`, `id_uji`) VALUES (4,2,$C2_MM,3)");


$resTopsis = mysqli_query($mysqli, "SELECT hasil_akhir.id_uji, tabel_alternatif.nm_alternatif, hasil_akhir.hasil_akhir FROM hasil_akhir, tabel_alternatif WHERE hasil_akhir.id_alternatif = tabel_alternatif.id_alternatif AND hasil_akhir.id_uji = $newVal ORDER BY hasil_akhir DESC");
?>