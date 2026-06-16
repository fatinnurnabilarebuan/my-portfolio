<?php

include('code.php');
require_once "config.php";
?>

<!DOCTYPE html>
<html>
<head>
<title>PASCORP PAPER INDUSTRIES BERHAD BENTONG</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
</head>
<style>
/* login */
.contain{
	margin:auto;
	width:400px;
	border:1px solid gray;
	padding: 10px;
	margin-top:150px;
	background-color: silver;
}
</style>
<body>
<!--login-->
<div class="contain ">
	<div class="com-md-6">
		<h2 class="text-center">LOGIN</h2>
		<center><img src="img/pascorp1c.png" width="250" height="120"></center>
		<form action="code.php" method="POST">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" placeholder="Username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<p class="text-center" style="color:red;">
				<?php echo $message; ?>
			</p>
			<div class="form-group">
				<input type="submit" name="btnlogin" class="btn btn-primary" value="Login">
			</div>
		</form>
	</div>
</div>
			<script type="text/javascript" src="js.jquery.min.js"></script>
			<script type="text/javascript" src="js.bootstrap.min.js"></script>
			<script type="text/javascript" src="js.popper.min.js"></script>
			
</body>
</html>