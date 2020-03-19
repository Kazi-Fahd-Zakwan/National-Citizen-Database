<?php

require_once('dbconnect.php');
	
if (isset($_POST['save'])) {

	session_start();	
	header('location:home.php');

	

 	$fname = $_POST['fname'];
 	$lname = $_POST['lname'];
 	$nid = $_POST['nid'];
 	$fathername = $_POST['fathername'];
 	$mothername = $_POST['mothername'];
 	$gender = $_POST['gender'];
 	$bd = $_POST['bd'];
 	$address = $_POST['address'];
 	$bg = $_POST['bg'];
 	$edu_ins = $_POST['uniname'];
 	$occupation = $_POST['occupation'];
 	$district = $_POST['district'];
 	$division = $_POST['division'];
 	$religion = $_POST['religion'];
 	$phoneno = $_POST['phoneno'];
	$userid = $_SESSION['uname'];	


	$query1 = "insert into citizen(fname, lname, nid, father_name, mother_name, gender, birthdate, address, bloodgroup, phone_no, ei_name, occ_name, dis_name, div_name, rel_name, userid) values ('$fname', '$lname', '$nid', '$fathername', '$mothername', '$gender', '$bd', '$address', '$bg', '$phoneno', '$edu_ins', '$occupation','$district', '$division', '$religion', '$userid')"; 	
	
	
 	
 	$run_query1 = mysqli_query($conn, $query1);
 	
 	

 	if ($run_query1) {
 		header('location:home2.php?successful'); 		
 		exit();
 	}
 	else{
 		header('location:home.php?unsuccessful');
 		exit();
 	}
 	
 }


 ?>