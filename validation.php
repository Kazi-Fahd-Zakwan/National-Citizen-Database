<?php

require_once('dbconnect.php');
if (isset($_POST['login'])) {
	
	session_start();

	$email = $_POST['email'];
	$pass = $_POST['pass'];		

	// user account validation

	$u = "select * from users where email = '$email' && pass = '$pass'";

	$resultu = mysqli_query($conn, $u);

	$numu = mysqli_num_rows($resultu);

	//admin account validation

	$a = "select * from admin where name = '$email' && pass = '$pass'";

	$resulta = mysqli_query($conn, $a);

	$numa = mysqli_num_rows($resulta);

	
	if($numu == 1){
		$_SESSION['email'] = $email;		
			header('location:home.php');
			exit();
		}			

	elseif ($numa == 1) {
		$_SESSION['email'] = $email;
		header('location:admin.php');
	 	exit();
	}
	else{
		header('location:index.php?not_registered');
		exit();
	}
}

	else{
		header("Location: index.php?error");
		exit();
}