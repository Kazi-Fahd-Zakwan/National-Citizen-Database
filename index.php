<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">


	<title> National Citizen Database </title>
	<link rel="shortcut icon" type="image/png" href="image/logo.png"/>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-6 login-left">
				<h2> Login Here </h2>
				<form action="validation.php" method="post">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter username" required>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="pass" class="form-control" placeholder="***********" autocomplete="off" required>
				</div>	
				<button type="submit" name="login" class="btn btn-primary"> Login </button>
				</form>
				
			</div>
			<div class="col-md-6 login-right">
				<h2> Register Here </h2>
				<form action="registration.php" method="post">
				<div class="form-group">
					<label>Full Name</label>
					<input type="text" name="name" class="form-control"  placeholder="Enter your name" autocomplete="off" required>
				</div>
				
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" placeholder="Enter username" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label>E-mail</label>
					<input type="E-mail" name="email" class="form-control" placeholder="sample@gmail.com" autocomplete="off" required>
				</div>
				

				<div class="form-group">
					<label>Password</label>
					<input type="Password" name="pass" class="form-control" placeholder="***********" autocomplete="off" required>
				</div>

				<div class="form-group">
					<label>Confirm Password</label>
					<input type="Password" name="passConfirm" class="form-control" placeholder="***********" autocomplete="off" required>
				</div> 


					<button type="submit" name="register" class="btn btn-primary"> Register </button>
				</form>
			
			
		</div>

	</div>

</body>
</html>
