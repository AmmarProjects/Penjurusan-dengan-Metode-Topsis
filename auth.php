<?php
    include 'db/db_connection.php';
    
    $user = $_POST['user'];
    $pass = md5($_POST['pass']);

    $resUser = mysqli_query($mysqli, "SELECT * FROM tabel_user WHERE username='$user' AND password ='$pass'");
    $auth = mysqli_num_rows($resUser);

    if($auth > 0){
	session_start();
	$_SESSION['username'] = $user;
	$_SESSION['status'] = "login";
	    header("location:dashboard/index.php");
    }else{
	    header("location:dashboard/index.php");	
    }
?>