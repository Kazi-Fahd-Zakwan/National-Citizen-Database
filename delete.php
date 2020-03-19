<?php
	session_start();
require_once('dbconnect.php');


if (isset($_POST['del'])) {
	
	
	$d = $_SESSION['uname']; 
	 $query = "delete from citizen where userid = '$d'";
	 $run_query = mysqli_query($conn, $query);
	 if($run_query){
	 		header('location:home.php?delete_successful');
	 		exit();
	 } 
	 else {
	 		header('location:home.php?delete_unsuccessful');
	 		exit();

	 }

}
else{header('location:home.php?error');
	 		exit();
	 	}












