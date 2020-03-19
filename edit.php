<?php
session_start();
require_once('dbconnect.php');

?>

<!DOCTYPE html>
<html>
<head>

	<title> Home Page </title>
	<link rel="shortcut icon" type="image/png" href="image/logo.png"/>
 	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

	<a class="float-right" href="logout.php"> Logout </a>

	<h3> Welcome <?php echo $_SESSION['uname']; ?> ! </h3>	 


	
	<div class="login-box-2">
		<div class="row">
			<div class="col-md-12 login">
				<h2 align="center"> Ultra-poor Graduation Programme </h2> <br>
				<form action="edit.php" method="post">
					

					<div class="form-group">
						<label>First Name</label>
						<input type="text" name="fname" class="form-control" placeholder="Enter First Name...." required>
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input type="text" name="lname" class="form-control" placeholder="Enter Last Name...." required>
					</div>
					
					<div class="form-group">
						<label>National ID</label>
						<input type="text" name="nid" class="form-control" placeholder="Enter National ID...." required>
					</div>

					<div class="form-group">
						<label>Father's Name</label>
						<input type="text" name="fathername" class="form-control" placeholder="Enter Father's Name...." required>
					</div>

					<div class="form-group">
						<label>Mother's Name</label>
						<input type="text" name="mothername" class="form-control" placeholder="Enter Mother's Name...." required>
					</div>
					
					<div class="form-group">
						<label>Gender</label>
						<input type="text" name="gender" class="form-control" placeholder="Male/Female...." required>
					</div>

					<div class="form-group">
						<label>Date of Birth</label>
						<input type="text" name="bd" class="form-control" placeholder="Enter Date of Birth...." required>
					</div>


					<div class="form-group">
						<label>Blood Group</label>
						<input type="text" name="bg" class="form-control" placeholder="Enter Blood Group...." required>
					</div>
					

					<div class="form-group">
						<label>Religion</label>
						<input type="text" name="religion" class="form-control" placeholder="Enter Religion...." required>
					</div>
					
					<div class="form-group">
						<label>Occupation</label>
						<input type="text" name="occupation" class="form-control" placeholder="Enter Occupation Name...." required>
					</div>

					<div class="form-group">
						<label>Phone Number</label>
						<input type="text" name="phoneno" class="form-control" placeholder="Enter Phone Number...." required>
					</div>


					<div class="form-group">
						<label>Educational Institute</label>
						<input type="text" name="uniname" class="form-control" placeholder="Enter School/College/University Name...." required>
					</div>

					

					<div class="form-group">
						<label>Address</label>
						<input type="text" name="address" class="form-control" placeholder="Enter Address...." required>
					</div>

					<div class="form-group">
						<label>District</label>
						<input type="text" name="district" class="form-control" placeholder="Enter District...." required>
					</div>					

					<div class="form-group">
						<label>Division</label>
						<input type="text" name="division" class="form-control" placeholder="Enter Division...." required>						
					</div>

					<br>
					<div>
						<button type="submit" name="save" class="btn btn-light"> Save </button>
					</div>


				</form>

				</div>

			</div>
		</div>

	<?php
		 if(isset($_POST['save'])){
		 	
		 
			
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
			 
			 $query = "update citizen set fname = '$fname', lname = '$lname', nid = '$nid', father_name = '$fathername', mother_name = '$mothername', gender = '$gender', birthdate = '$bd', address = '$address', bloodgroup = '$bg', ei_name = '$edu_ins', occ_name = '$occupation', dis_name = '$district', div_name = '$division', rel_name = '$religion', phone_no = '$phoneno' where userid = '$userid'";
			 
			 $run_query = mysqli_query($conn, $query);
			 
			 if($run_query){
			 	header("location:home2.php?edit_successful");

			 } 
			 else {
				header("location:edit.php?edit_unsuccessful");			 	
			 }
		
		}	 
		?>


</body>
</html>