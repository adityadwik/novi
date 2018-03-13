<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.min.css">
	
	<script src="assets/sweetalert2/dist/sweetalert2.js"></script>
	<link rel="stylesheet" href="assets/sweetalert2/dist/sweetalert2.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<link rel="icon" href="assets/image/company.png">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<script>
		function myfunction() {
			if ((document.getElementById('usr').value == "ilam")||(document.getElementById('pass').value == "ilam")) {
				swal({
					title: "Login Sukses",
					text: "Login as "+document.getElementById("usr").value,
					icon: "success",
					button: "Continue"
				}).then(function() {
					window.location.href = "index.php";
				});
				return true;
			}
			else{
				swal({
					title: "Login Gagal",
					text: "Try again!",
					icon: "error",
					button: "Retry",
				});
				return false;
			}
		}
			</script>

		</head>
		<body>
			<div class="container">
				<center><img src="assets/image/icon.png" style="width: 150px; margin-top: 30px"></center>
				<center><b><h1 style="color: #1E789A; margin-top: 10px;font-weight: bold">Login</h1></b></center>
				<center><div class="card" style="margin-top: 20px; width: 500px">
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
						<form method="post" id="loginbox">
							<div class="form-group">
									<label style="float:left">Username</label>
									<input type="text" name="usr" id="usr" class="form-control" value placeholder="Username or Email">
							</div>
							<div class="form-group">
								<label style="float:left">Password</label>
									<input type="password" name="pass" id="pass" class="form-control" value placeholder="Password">
							</div>
							<div class="form-check" style="margin-top: 20px">
								<label class="form-check-label" style="float: left">
									<input type="checkbox" name="cexbox" class="form-check-input"> Remember Me
								</label>
							</div>
							<br>
							<div class="row" style="margin-top: 10px">
								<div class="col-md-12">
									<a href="#" id="btnlogin" class="btn btn-primary btn-block" style="margin-bottom: 5px" onclick="myfunction()">Login</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</center>
		</body>
		</html>