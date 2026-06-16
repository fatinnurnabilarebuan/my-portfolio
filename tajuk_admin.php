<?php
	//berhubung dengan database
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'aduan');
	
	//initialize variables
	$soalan 				= "";
	$id 				= 0;
	//$namapelapor 		= "";
	//$bahagian 			= "";
	//$pejsektorunik 				= "";
	//$aras 			= "";
	//$blok 			= "";
	//$nophone 			= "";
	//$email 	= "";
	//$JKP 			= "";
	//$JP 			= "";
	//$jenama 				= "";
	//$model 				= "";
	//$butiran 				= "";
	//$keterangan 				= "";
	$update 			= false;
	//$id               = "";
	//$con              = "";
	
	/*----------------------------------------------------------------to ADD data editprinter--------------------------------------------------------------------------*/
	if (isset($_POST['save'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukprinter (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukprinter.php');
	}
	/*----------------------------------------------------------------to DELETE data editprinter--------------------------------------------------------------------------*/
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		
		mysqli_query($db, "DELETE FROM tajukprinter WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukprinter.php');}
	/*----------------------------------------------------------------to update data editprinter--------------------------------------------------------------------------*/
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukprinter SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukprinter.php');}
	/*----------------------------------------------------------------to ADD data editkomputer--------------------------------------------------------------------------*/
	if (isset($_POST['save1'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukkomputer (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukkomputer.php');
	}
	/*----------------------------------------------------------------to DELETE data editkomputer--------------------------------------------------------------------------*/
	if(isset($_GET['del1'])){
		$id = $_GET['del1'];
		
		mysqli_query($db, "DELETE FROM tajukkomputer WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukkomputer.php');}
	/*----------------------------------------------------------------to update data editkomputer--------------------------------------------------------------------------*/
	if (isset($_POST['update1'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukkomputer SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukkomputer.php');}
	/*----------------------------------------------------------------to ADD data editharddrive--------------------------------------------------------------------------*/
	if (isset($_POST['save2'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukharddrive (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukharddrive.php');
	}
	/*----------------------------------------------------------------to DELETE data editharddrive--------------------------------------------------------------------------*/
	if(isset($_GET['del2'])){
		$id = $_GET['del2'];
		
		mysqli_query($db, "DELETE FROM tajukharddrive WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukharddrive.php');}
	/*----------------------------------------------------------------to update data editharddrive--------------------------------------------------------------------------*/
	if (isset($_POST['update2'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukharddrive SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukharddrive.php');}
	/*----------------------------------------------------------------to ADD data editcdrom--------------------------------------------------------------------------*/
	if (isset($_POST['save3'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukcdrom (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukcdrom.php');
	}
	/*----------------------------------------------------------------to DELETE data editcdrom--------------------------------------------------------------------------*/
	if(isset($_GET['del3'])){
		$id = $_GET['del3'];
		
		mysqli_query($db, "DELETE FROM tajukcdrom WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukcdrom.php');}
	/*----------------------------------------------------------------to update data editcdrom--------------------------------------------------------------------------*/
	if (isset($_POST['update3'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukcdrom SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukcdrom.php');}
	/*----------------------------------------------------------------to ADD data editusb--------------------------------------------------------------------------*/
	if (isset($_POST['save4'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukusb (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukusb.php');
	}
	/*----------------------------------------------------------------to DELETE data editusb--------------------------------------------------------------------------*/
	if(isset($_GET['del4'])){
		$id = $_GET['del4'];
		
		mysqli_query($db, "DELETE FROM tajukusb WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukusb.php');}
	/*----------------------------------------------------------------to update data editcdrom--------------------------------------------------------------------------*/
	if (isset($_POST['update4'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukusb SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukusb.php');}
	/*----------------------------------------------------------------to ADD data editautoshutdown--------------------------------------------------------------------------*/
	if (isset($_POST['save5'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukautoshutdown (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukautoshutdown.php');
	}
	/*----------------------------------------------------------------to DELETE data editautoshutdown--------------------------------------------------------------------------*/
	if(isset($_GET['del5'])){
		$id = $_GET['del5'];
		
		mysqli_query($db, "DELETE FROM tajukautoshutdown WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukautoshutdown.php');}
	/*----------------------------------------------------------------to update data editautoshutdown--------------------------------------------------------------------------*/
	if (isset($_POST['update5'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukautoshutdown SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukautoshutdown.php');}
	/*----------------------------------------------------------------to ADD data editwindow--------------------------------------------------------------------------*/
	if (isset($_POST['save6'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukwindow (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukwindow.php');
	}
	/*----------------------------------------------------------------to DELETE data editautoshutdown--------------------------------------------------------------------------*/
	if(isset($_GET['del6'])){
		$id = $_GET['del6'];
		
		mysqli_query($db, "DELETE FROM tajukwindow WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukwindow.php');}
	/*----------------------------------------------------------------to update data editautoshutdown--------------------------------------------------------------------------*/
	if (isset($_POST['update6'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukwindow SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukwindow.php');}
	/*----------------------------------------------------------------to ADD data editmvirus--------------------------------------------------------------------------*/
	if (isset($_POST['save7'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukmvirus (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukmvirus.php');
	}
	/*----------------------------------------------------------------to DELETE data editmvirus--------------------------------------------------------------------------*/
	if(isset($_GET['del7'])){
		$id = $_GET['del7'];
		
		mysqli_query($db, "DELETE FROM tajukmvirus WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukmvirus.php');}
	/*----------------------------------------------------------------to update data editmvirus--------------------------------------------------------------------------*/
	if (isset($_POST['update7'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukmvirus SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukmvirus.php');}
	/*----------------------------------------------------------------to ADD data editattachment--------------------------------------------------------------------------*/
	if (isset($_POST['save8'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukattachment1 (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukattachment.php');
	}
	/*----------------------------------------------------------------to DELETE data editattachment--------------------------------------------------------------------------*/
	if(isset($_GET['del8'])){
		$id = $_GET['del8'];
		
		mysqli_query($db, "DELETE FROM tajukattachment1 WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukattachment.php');}
	/*----------------------------------------------------------------to update data editattachment--------------------------------------------------------------------------*/
	if (isset($_POST['update8'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukattachment1 SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukattachment.php');}
	/*----------------------------------------------------------------to ADD data editbattachment--------------------------------------------------------------------------*/
	if (isset($_POST['save9'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukbattachment (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukbattachment.php');
	}
	/*----------------------------------------------------------------to DELETE data editbattachment--------------------------------------------------------------------------*/
	if(isset($_GET['del9'])){
		$id = $_GET['del9'];
		
		mysqli_query($db, "DELETE FROM tajukbattachment WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukbattachment.php');}
	/*----------------------------------------------------------------to update data editbattachment--------------------------------------------------------------------------*/
	if (isset($_POST['update9'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukbattachment SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukbattachment.php');}
	/*----------------------------------------------------------------to ADD data editinternet--------------------------------------------------------------------------*/
	if (isset($_POST['save10'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukinternet (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukinternet.php');
	}
	/*----------------------------------------------------------------to DELETE data editinternet--------------------------------------------------------------------------*/
	if(isset($_GET['del10'])){
		$id = $_GET['del10'];
		
		mysqli_query($db, "DELETE FROM tajukinternet WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukinternet.php');}
	/*----------------------------------------------------------------to update data editinternet--------------------------------------------------------------------------*/
	if (isset($_POST['update10'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukinternet SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukinternet.php');}
	/*----------------------------------------------------------------to ADD data editloading--------------------------------------------------------------------------*/
	if (isset($_POST['save11'])) {
		$soalan = $_POST['soalan'];
		mysqli_query($db, "INSERT INTO tajukloading (soalan) VALUES ('$soalan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: tajukloading.php');
	}
	/*----------------------------------------------------------------to DELETE data editloading--------------------------------------------------------------------------*/
	if(isset($_GET['del11'])){
		$id = $_GET['del11'];
		
		mysqli_query($db, "DELETE FROM tajukloading WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: tajukloading.php');}
	/*----------------------------------------------------------------to update data editloading--------------------------------------------------------------------------*/
	if (isset($_POST['update11'])) {
	$id = $_POST['id'];
	$soalan =$_POST['soalan'];

	mysqli_query($db, "UPDATE tajukloading SET soalan='$soalan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: tajukloading.php');}
?>