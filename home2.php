<?php
session_start();
require_once('dbconnect.php');


if (!isset($_SESSION['uname'])) {
	header('location:index.php');
}

	$z =  $_SESSION['uname'];
	$check = "select * from citizen where userid = '$z'";

	$result = mysqli_query($conn, $check);

	$num = mysqli_num_rows($result);
	if($num <= 0){
		header('location:home.php');
}

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


	 <?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							while($row = mysqli_fetch_assoc($run_query))
							 if(!$run_query){
							 	header('location:home.php?error');

							 }

?>
	<div class="login-box-2">
		<div class="row">
			<div class="col-md-12 login">
				<h2 align="center"> National Citizen Database </h2> <br>
				<form action="edit.php" method="post">
					<div class="form-group">
						<h6 align="center">First Name</h6>
						
						 <h5 align="center"><?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["fname"] ;
								}
							}
						?>
						</h5>	 
					</div>

					<br>
					<div class="form-group">
						<h6 align="center">Last Name</h6>
					
						<h5 align="center"><?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){
								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["lname"] ;
								}
							}
						?>
						</h5>
					</div>
					<br>
					<div class="form-group">
						<h6 align="center">National ID</h6>
					
						<h5 align="center"><?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["nid"] ;
								}
							}
						?>
						</h5>
					</div>
					<br>
					<div class="form-group">
						<h6 align="center">Father's Name</h6>
					
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["father_name"] ;
								}
							}
						?>
							
						</h5>
					</div>
					<br>
					<div class="form-group">
						<h6 align="center">Mother's Name</h6>
						
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["mother_name"] ;
								}
							}
						?>
							
						</h5>
					</div>
					<br>
					
					
					<div class="form-group">
						<h6 align="center">Gender</h6>
						
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["gender"] ;
								}
							}
						?>
							
						</h5>
					</div>
					<br>
					<div class="form-group">
						<h6 align="center">Date of Birth</h6>
						
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["birthdate"] ;
								}
							}
						?>
							
						</h5>
					</div>
					<br>

					<div class="form-group">
						<h6 align="center">Blood Group</h6>
						
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["bloodgroup"] ;
								}
							}
						?>
							
						</h5>
					</div>
					<br>

					<div class="form-group">
						<h6 align="center">Religion</h6>
						
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["rel_name"] ;
								}
							}
						?>
							
						</h5>
					</div>
					<br>
					<div class="form-group">
						<h6 align="center">Occupation</h6>
						
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["occ_name"] ;
								}
							}
						?>
							
						</h5>
					</div>

					<br>


					<div class="form-group">
						<h6 align="center">Educational Institute</h6>
						
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["ei_name"] ;
								}
							}
						?>
							
						</h5>
					</div>

					<br>
					<div class="form-group">
						<h6 align="center">Phone Number</h6>
					
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["phone_no"] ;
								}
							}
						?>
							
						</h5>
					</div>					

					<br>
					<div class="form-group">
						<h6 align="center">Address</h6>
					
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["address"] ;
								}
							}
						?>
							
						</h5>
					</div>
					<br>
					<div class="form-group">
						<h6 align="center">District</h6>
						
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["dis_name"] ;
								}
							}
						?>
							
						</h5>
					</div>	

					<br>				

					<div class="form-group">
						<h6 align="center">Division</h6>
					
						<h5 align="center">
							<?php
							$a = $_SESSION['uname'];
							$query = "select * from citizen where userid = '$a'";
							$run_query = mysqli_query($conn, $query);
							if(mysqli_num_rows($run_query) > 0){

								while($row = mysqli_fetch_assoc($run_query)){
									echo $row["div_name"] ;
								}
							}
						?>
							
						</h5>
					</div>
					<br>
					<div>
						<button type="submit" name="edit" class="btn btn-light"> Edit </button>
					</div>
					<br>
					
				</form>

					<form action="delete.php" method="post">
						
					<button type="submit" name="del" class="btn btn-light"> Delete </button>
					</form>

				</div>
			

			</div>
		</div>
</body>
</html>