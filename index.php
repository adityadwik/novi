<?php
session_start();
ini_set('display_errors', 0);
if($_SESSION["salah"] >= 3){
echo "<script>alert('Anda Diblokir'); window.location = ('error.php')</script>";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="icon" href="assets/image/company.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	</head>
		<body>
			<div class="container">
				<center><img src="assets/image/icon.png" style="width: 150px; margin-top: 15px"></center>
				<center><b><h1 style="color: #1E789A; margin-top: 10px;font-weight: bold">Login</h1></b></center>
				<center><div class="card" style="margin-top: 15px; width: 350px">
					<div class="card-header" style="background-color: #1E789A">
						<div class="row">
							<div class="col-md-6">
								<div class="card-title" style="color:white ;font-weight:bold;float: left"><a href="#" style="color: white">Login Disini</a></div>	
							</div>
							<div class="col-md-6">
								<div class="card-title" style="color: white; float: right;"><a href="#" style="color: white">Forgot Password?</a></div>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="post" action="login.php" id="loginbox">
							<div class="form-group">
									<label style="float:left">Username</label>
									<input type="text" name="usr" class="form-control" value placeholder="Username or Email">
							</div>
							<div class="form-group">
								<label style="float:left">Password</label>
									<input type="password" name="pass" class="form-control" value placeholder="Password">
							</div>
							<div class="form-check" style="margin-top: 20px">
								<label class="form-check-label" style="float: left">
									<input type="checkbox" name="cexbox" class="form-check-input"> Remember Me</label>
							</div>
							<br>
							<div class="row" style="margin-top: 10px">
								<div class="col-md-12">
									<button href="#" id="btnlogin" class="btn btn-primary btn-block" style="margin-bottom: 5px">Login</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</center>
			<script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/popper.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
		</body>
		</html>