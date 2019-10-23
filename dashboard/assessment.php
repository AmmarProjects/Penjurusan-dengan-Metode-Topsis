<?php
include '../db/db_connection.php';
$resQuestion = mysqli_query($mysqli, "SELECT * FROM tabel_soal ORDER BY `id_alternatif`");
$resMatkul = mysqli_query($mysqli, "SELECT * FROM tabel_matkul ORDER BY `id_alternatif`");
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TOPSIS METHOD - Dashboard</title>
    <meta name="description" content="TOPSIS METHOD - Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/form.css" />
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
    </style>
</head>

<body>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li>

                    <li class="menu-title">Components</li><!-- /.menu-title -->
                    <li class="active">
                        <a href="assessment.php"><i class="menu-icon fa fa-pencil-square-o"></i>Assessment </a>
                    </li>
                    <li class="">
                        <a href="alternative.php"><i class="menu-icon fa fa-puzzle-piece"></i>Alternative </a>
                    </li>
                    <li class="">
                        <a href="criteria.php"><i class="menu-icon fa fa-thumbs-up"></i>Criteria </a>
                    </li>
                    <li class="">
                        <a href="weight.php"><i class="menu-icon fa fa-briefcase"></i>Weight </a>
                    </li>

                    <li class="menu-title">VALUE</li><!-- /.menu-title -->
                    <li class="">
                        <a href="questioner.php"><i class="menu-icon fa fa-pencil-square-o"></i>Questioner </a>
                    </li>
                    <li class="">
                        <a href="subject.php"><i class="menu-icon fa fa-puzzle-piece"></i>IP Subject </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">TOPSIS METHOD</a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <div class="card">
                <div class="card-header">
                    <strong>Form Penilaian</strong>
                </div>
                <div class="page-content" width=80%;>
        
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
            </div>   

            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Tabel Penilaian</strong>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table" class="table">
                        <thead>
                            <tr>
                                <th>ID Nilai</th>
                                <th>Alternatif</th>
                                <th>Bobot</th>
                                <th>Nilai</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>$170,750</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );
  </script>   
</body>

</html>