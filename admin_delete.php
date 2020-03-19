<?php
	session_start();
	require_once('dbconnect.php');


if (isset($_POST['del'])) {
		
	
	$d = $_POST['dele']; 
	 $query = "delete from citizen where nid = '$d'";
	 $run_query = mysqli_query($conn, $query);
	 if($run_query){
	 		header('location:adminhome.php?delete_successful');
	 		exit();
	 } 
	 else {
	 		header('location:adminhome.php?delete_unsuccessful');
	 		exit();

	 }

}
else{header('location:adminhome.php?error');
	 		exit();
	 	}












