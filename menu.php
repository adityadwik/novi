<?php
session_start();
if (!isset($_SESSION["user"])){
	header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Latihan Membuat Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>
<body>
	<div class="alert alert-info">
	<b><a href="code_logout.php" class="btn btn-primary" style="float: right ">Logout</a></b>
	<center><h1 >Welcome in the home<?php echo $_SESSION['user']; ?></h1></center>
	</div>
	<div class="container">
		<center><img src="assets/image/icon.png" style="width: 150px; margin-top: 100px"></center>
	</div>
</body>
</html>