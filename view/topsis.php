<?php
// Variabel Bobot IP
include '../db/db_connection.php';
$resNilai = mysqli_query($mysqli, "SELECT coba_dulu.id_uji, coba_dulu.hasil_akhir, coba_dulu.id_alternatif, tabel_alternatif.nm_alternatif FROM coba_dulu, tabel_uji, tabel_alternatif WHERE  coba_dulu.id_alternatif = tabel_alternatif.id_alternatif AND coba_dulu.id_uji IN (
    SELECT coba_dulu.nilai
    FROM coba_dulu, tabel_uji
    WHERE  coba_dulu.nilai = tabel_uji.nilai
    GROUP by coba_dulu.id_uji ) GROUP BY coba_dulu.id_alternatif ORDER by coba_dulu.hasil_akhir DESC");
$resMax = mysqli_query($mysqli, "SELECT coba_dulu.id_uji, coba_dulu.hasil_akhir, coba_dulu.id_alternatif, tabel_alternatif.nm_alternatif FROM coba_dulu, tabel_uji, tabel_alternatif WHERE  coba_dulu.id_alternatif = tabel_alternatif.id_alternatif AND coba_dulu.id_uji IN (
    SELECT coba_dulu.nilai
    FROM coba_dulu, tabel_uji
    WHERE  coba_dulu.nilai = tabel_uji.nilai
    GROUP by coba_dulu.id_uji ) GROUP BY coba_dulu.id_alternatif ORDER by coba_dulu.hasil_akhir DESC LIMIT 1");
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
    <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom">
        <div class="container">
            <a class="navbar-brand h1 mb-0 text-light" href="../index.php">TOPSIS METHOD</a>
            <button class="navbar-toggler bg-custom" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="test.php">Try now <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-light" href="team.php">Our Team <span
                                class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-content">
        <div class="form-v10-content">
            <div class="form-detail" action="#" method="post" id="myform">
                <div class="form-left mb-4">
                    <div class="form-row mt-4">
                        <div class="container align-center mt-4">
                            <div class="card">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <h2>Hasil Peminatan</h2>
                    <div class="form-row">
                        <!-- Table  -->
                        <table class="table table-bordered text-white">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th>Peminatan</th>
                                    <th>Hasil</th>
                                </tr>
                            </thead>
                            <!-- Table head -->
                            <?php
						    while($dataRes = mysqli_fetch_array($resNilai)) {
                                echo'
							<tr>
							    <td>'.$dataRes['nm_alternatif'].'</td>
                                <td>'.$dataRes['hasil_akhir'].'</td>
                            </tr';
						    }
					       ?>
                            <!-- Table body -->
                        </table>
                        <p class="text-white"> Rekomendasi : 
                            <?php
						    while($dataRes = mysqli_fetch_array($resMax)) {
                                echo $dataRes['nm_alternatif'];
						    }
					       ?></p>
                        <!-- Table  -->
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: ['Computer Sciense', 'Software Engineering', 'Information System', 'Multimedia'],
        datasets: [{
            label: '# of Votes',
            data: [300,300,200,100],
            backgroundColor: [
                'rgba(255, 99, 132, 0.7)',
                'rgba(54, 162, 235, 0.7)',
                'rgba(255, 206, 86, 0.7)',
                'rgba(20, 2, 192, 0.7)',
                'rgba(153, 102, 255, 0.7)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(20, 2, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
</html>