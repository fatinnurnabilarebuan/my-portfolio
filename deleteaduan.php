<?php
	include('server.php'); 
?>

<?php
	if (isset($_GET['id'])){
		$id = $_GET['id'];
		$array 	= "";
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM logpelapor WHERE tarikh=$tarikh");

		//$record && array_count_values($record)

		if ($array && array_count_values($array) == 1){
			$n 					= mysqli_fetch_array($array);
			$id = $n['id'];
			$tarikh 				= $n['tarikh'];
			$masa 		= $n['masa'];
			$namapelapor 		= $n['namapelapor'];
			$bahagian 			= $n['bahagian'];
			$pejsektorunik 				= $n['pejsektorunik'];
			$aras 			= $n['aras'];
			$blok 			= $n['blok'];
			$nophone 			= $n['nophone'];
			$email	= $n['email'];
			$JKP 			= $n['JKP'];
			$JP			= $n['JP'];
			$jenama 				= $n['jenama'];
			$model 				= $n['model'];
			$butiran 				= $n['butiran'];
			$keterangan 				= $n['keterangan'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PPIB - Adding List of Computers</title>
</head>
<body>
<center>
<a class="active" href="editaduan.php"><img src="images/back.png" width="50" height="50"></a></center>

<!---------------PHP code-------------->
<?php if(isset($_SESSION['message'])):?>
<div class="msg">
<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
?>
</div>
<?php endif ?>
<!-----------end of PHP code----------->







</body>
<style>
	
body {	
	background-color: #006666;
	font-size: 19px; 
}

form {	
	width: 65%;
	margin: 50px auto;
	text-align: center;
	padding: 15px;
	border: 1px solid #bbbbbb;
	border-radius: 5px;
	box-shadow: 0 0 15px;
	font-family: 'Fauna One', serif;
}

h3{
	text-align: center;
	font-size: 24px;
}

.input-group {
	margin: 20px 0px 20px 0px;	
}

.input-group label{
	font-weight: bold;
	display: block;
	text-align: left;
	margin: 5px;
	padding: 0px 85px;
}

.input-group input{
	height: 30px;
	width: 80%;
	padding: 5px 10px;
	font-size: 16px;
	border-radius: 5px;
	border: 1px solid gray;
}

.btn {
	padding: 10px;
	font-size: 15px;
	border-radius: 5px;
	border: none;
	color: white;
	background: #000066;
}

.edit_btn{
	text-decoration: none;
	padding: 2px 5px;
	background: #2E8B57;
	color: white;
	border-radius: 3px;
}

.msg{
	margin: 30px auto;
	padding: 10px;
	border-radius: 5px;
	color: #3C763D;
	background-color: #DFF0D8;
	border: 1px solid #3C763D;
	width: 50%;
	text-align: center;
	font-family: "Arial Light", sans-serif;
}

</style>
</html>