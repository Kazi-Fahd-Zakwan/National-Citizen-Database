<?php

require_once('dbconnect.php');
if (isset($_POST['register'])) {
	

	session_start();	
	header('location:index.php');


	$name = $_POST['name'];
	$user = $_POST['username'];
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$passConfirm = $_POST['passConfirm'];

	$u = "select * from usertable where username = '$user'";

	$resultu = mysqli_query($conn, $u);

	$numu = mysqli_num_rows($resultu);

	$a = "select * from admin where username = '$user'";

	$resulta = mysqli_query($conn, $a);

	$numa = mysqli_num_rows($resulta);

	if($numu == 1){
	header("Location: index.php?username_already_taken");
	exit();
	}

	elseif($numa == 1){
	header("Location: index.php?username_already_taken");
	exit();
	}

	else{
		if ($pass != $passConfirm) {
		header("location: index.php?password_mismatch");
			exit();
	}
	else{
		$reg = "insert into usertable (name, username, email, password, passwordConfirm) values ('$name','$user', '$email', '$pass', '$passConfirm')";
		
		mysqli_query($conn, $reg);
		header("Location: index.php?registration_successful");
		}
	}
}
else{
	header("Location: index.php?error");
	exit();
}

?>