	<?php
require_once('dbconnect.php');


session_start();

if (!isset($_SESSION['uname'])) {
	header('location:index.php');
}


?>

<!DOCTYPE html>
<html>
<head>

	<title> Admin Page </title>
	<link rel="shortcut icon" type="image/png" href="image/logo.png"/>
 	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

		<a class="float-right" href="logout.php"> Logout </a>

		<h3> Welcome to Admin Panel ! </h3>	 



		<br>

						<form method="post">

						<h4 align="center">Search Citizen Information</h4><br>

						<center><input type="text" placeholder="Search Here...." name="ser" required></center><br>

						<center><button name="search" class="btn btn-light" type="submit">SEARCH</button></center><br>
						
							
								<table style="width:100%">
									<thead>
										<tr class="row100 head">
											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 1 checked>First Name </label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 2 >Last Name</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 3>Nid<label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 4>Father's Name</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 5>Mother's Name</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 6>Gender</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 7>Date of Birth</label></th>
										</tr>
											<tr class="row100 head">

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 8>Blood Group</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 9>Religion</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 10>Occupation</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 11>Educational Institute</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 12>Phone Number</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 13>Address</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 14>District</label></th>

											<th class="cell100 column5"><label class="radio-inline"><input type="radio" name="rt" value = 15>Division</label></th>

										</tr>
									</thead>
								</table>

				</form>

				<div class="table-responsive">
				<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">National ID</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Mother's Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Religion</th>
      <th scope="col">Occupation</th>
      <th scope="col">Educational Institute</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">Division</th>

    </tr>
</thead>
<tbody>

				<?php
					// Search for Fname
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 1){
								$qu = "select * from citizen where fname = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}
				//Search for Lname
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 2){
								$qu = "select * from citizen where lname = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}
				//Search for NID
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 3){
								$qu = "select * from citizen where nid = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

				//search for Father's Name	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 4){
								$qu = "select * from citizen where father_name = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

		//search for Mother's Name	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 5){
								$qu = "select * from citizen where mother_name = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}
			

			//search for Gender	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 6){
								$qu = "select * from citizen where gender = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}	

		//search for Date of Birth	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 7){
								$qu = "select * from citizen where birthdate = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

		//search for Blood Group	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 8){
								$qu = "select * from citizen where bloodgroup = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

		//search for Religion	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 9){
								$qu = "select * from citizen where rel_name = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

		//search for Occupation	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 10){
								$qu = "select * from citizen where  occ_name = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

		//search for Educational Institute	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 11){
								$qu = "select * from citizen where ei_name = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}
		//search for Phone Number	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 12){
								$qu = "select * from citizen where phone_no = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

		//search for Address	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 13){
								$qu = "select * from citizen where address = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

		//search for District	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 14){
								$qu = "select * from citizen where dis_name = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

		//search for Division	
				$seq = 1;
					if(isset($_POST['search'])){
						@$key = $_POST['ser'];
							if($_POST['rt'] == 15){
								$qu = "select * from citizen where div_name = '$key'";
								$rq = mysqli_query($conn, $qu);
											if(mysqli_num_rows($rq) > 0){
										while($row = mysqli_fetch_assoc($rq)){
											echo "<th scope='row'>".$seq."</th>";
											echo "<td>".$row["fname"]."</td>";
											echo "<td>".$row["lname"]."</td>";
											echo "<td>".$row["nid"]."</td>";
											echo "<td>".$row["father_name"]."</td>";
											echo "<td>".$row["mother_name"]."</td>";
											echo "<td>".$row["gender"]."</td>";
											echo "<td>".$row["birthdate"]."</td>";
											echo "<td>".$row["bloodgroup"]."</td>";
											echo "<td>".$row["rel_name"]."</td>";
											echo "<td>".$row["occ_name"]."</td>";
											echo "<td>".$row["ei_name"]."</td>";
											echo "<td>".$row["phone_no"]."</td>";
											echo "<td>".$row["address"]."</td>";
											echo "<td>".$row["dis_name"]."</td>";
											echo "<td>".$row["div_name"]."</td></tr>";

											$seq +=1;
											}
								
										}
			
			}
		}

			?>
			


</tbody>
</table>

</div><br><br><br>









		<div class="table-responsive">

			<h4 align="center">National Citizen Information</h4><br>
		<table class="table table-bordered table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">National ID</th>
      <th scope="col">Father's Name</th>
      <th scope="col">Mother's Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Blood Group</th>
      <th scope="col">Religion</th>
      <th scope="col">Occupation</th>
      <th scope="col">Educational Institute</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">District</th>
      <th scope="col">Division</th>

    </tr>
</thead>
<tbody>



    <?php
		$a = $_SESSION['uname'];
		$query = "select fname, lname, nid, father_name, mother_name, gender, birthdate, address, bloodgroup, phone_no, ei_name, occ_name, dis_name, div_name, rel_name from citizen";

		$run_query = mysqli_query($conn, $query);

		if(mysqli_num_rows($run_query) > 0){

		$seq = 1;


		while($row = mysqli_fetch_assoc($run_query)){
	

		echo "<th scope='row'>".$seq."</th>";
		echo "<td>".$row["fname"]."</td>";
		echo "<td>".$row["lname"]."</td>";
		echo "<td>".$row["nid"]."</td>";
		echo "<td>".$row["father_name"]."</td>";
		echo "<td>".$row["mother_name"]."</td>";
		echo "<td>".$row["gender"]."</td>";
		echo "<td>".$row["birthdate"]."</td>";
		echo "<td>".$row["bloodgroup"]."</td>";
		echo "<td>".$row["rel_name"]."</td>";
		echo "<td>".$row["occ_name"]."</td>";
		echo "<td>".$row["ei_name"]."</td>";
		echo "<td>".$row["phone_no"]."</td>";
		echo "<td>".$row["address"]."</td>";
		echo "<td>".$row["dis_name"]."</td>";
		echo "<td>".$row["div_name"]."</td></tr>";

		$seq +=1;
		}
}
		else {}
 ?>

  </tbody>
</table>
</div>
<br><br><br>

	<form action="admin_delete.php" method="post">

		<h4 align="center">Delete Citizen Information</h4><br>

		<center><input type="text" name="dele" placeholder="Enter NID to Delete...." required></center>	

		<br>

		<center><button name = "del" type="submit" class="btn btn-light">Delete</button></center>
	</form>

<br><br><br><br><br>

</div>
</body>
</html>