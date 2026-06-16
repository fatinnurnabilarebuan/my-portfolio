<?php
	//berhubung dengan database
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'aduan');
	
	//initialize variables
	$pilihan 				= "";
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
		$pilihan = $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editprinter (pilihan) VALUES ('$pilihan')"); 
		$_SESSION['message'] = "Data Disimpan"; 
		header('location: printer_admin.php');
	}
	/*----------------------------------------------------------------to DELETE data editprinter--------------------------------------------------------------------------*/
	if(isset($_GET['del'])){
		$id = $_GET['del'];
		
		mysqli_query($db, "DELETE FROM editprinter WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: printer_admin.php');}
	/*----------------------------------------------------------------to update data editprinter--------------------------------------------------------------------------*/
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editprinter SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: printer_admin.php');}
	/*----------------------------------------------------------------to ADD data editkomputer--------------------------------------------------------------------------*/
	if(isset($_POST['save1'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editkomputer (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: komputer_admin.php");}
	/*----------------------------------------------------------------to DELETE data editkomputer--------------------------------------------------------------------------*/
	if(isset($_GET['del1'])){
		$id = $_GET['del1'];
		
		mysqli_query($db, "DELETE FROM editkomputer WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: komputer_admin.php');}
	/*----------------------------------------------------------------to update data editkomputer--------------------------------------------------------------------------*/
	if (isset($_POST['update1'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editkomputer SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: komputer_admin.php');}
		/*----------------------------------------------------------------to ADD data editharddrive--------------------------------------------------------------------------*/
	if(isset($_POST['save2'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editharddrive (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: harddrive_admin.php");}
		/*----------------------------------------------------------------to DELETE data editharddrive--------------------------------------------------------------------------*/
	if(isset($_GET['del2'])){
		$id = $_GET['del2'];
		
		mysqli_query($db, "DELETE FROM editharddrive WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: harddrive_admin.php');}
	/*----------------------------------------------------------------to update data editharddrive--------------------------------------------------------------------------*/
	if (isset($_POST['update2'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editharddrive SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: harddrive_admin.php');}
		/*----------------------------------------------------------------to ADD data editcdrom--------------------------------------------------------------------------*/
	if(isset($_POST['save3'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editcdrom (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: cdrom_admin.php");}
		/*----------------------------------------------------------------to DELETE data editcdrom--------------------------------------------------------------------------*/
	if(isset($_GET['del3'])){
		$id = $_GET['del3'];
		
		mysqli_query($db, "DELETE FROM editcdrom WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: cdrom_admin.php');}
		/*----------------------------------------------------------------to update data editcdrom--------------------------------------------------------------------------*/
	if (isset($_POST['update3'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editcdrom SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: cdrom_admin.php');}
		/*----------------------------------------------------------------to ADD data editusb--------------------------------------------------------------------------*/
	if(isset($_POST['save4'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editusb (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: usb_admin.php");}
		/*----------------------------------------------------------------to DELETE data editusb--------------------------------------------------------------------------*/
	if(isset($_GET['del4'])){
		$id = $_GET['del4'];
		
		mysqli_query($db, "DELETE FROM editusb WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: usb_admin.php');}
		/*----------------------------------------------------------------to update data editusb--------------------------------------------------------------------------*/
	if (isset($_POST['update4'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editusb SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: usb_admin.php');}
		/*----------------------------------------------------------------to ADD data editautoshutdown--------------------------------------------------------------------------*/
	if(isset($_POST['save5'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editautoshutdown (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: autoshutdown_admin.php");}
		/*----------------------------------------------------------------to DELETE data editautoshutdown--------------------------------------------------------------------------*/
	if(isset($_GET['del5'])){
		$id = $_GET['del5'];
		
		mysqli_query($db, "DELETE FROM editautoshutdown WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: autoshutdown_admin.php');}
		/*----------------------------------------------------------------to update data editautoshutdown--------------------------------------------------------------------------*/
	if (isset($_POST['update5'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editautoshutdown SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: autoshutdown_admin.php');}
		/*----------------------------------------------------------------to ADD data editwindow--------------------------------------------------------------------------*/
	if(isset($_POST['save6'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editwindow (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: window_admin.php");}
		/*----------------------------------------------------------------to DELETE data editwindow--------------------------------------------------------------------------*/
	if(isset($_GET['del6'])){
		$id = $_GET['del6'];
		
		mysqli_query($db, "DELETE FROM editwindow WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: window_admin.php');}
		/*----------------------------------------------------------------to update data editautoshutdown--------------------------------------------------------------------------*/
	if (isset($_POST['update6'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editwindow SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: window_admin.php');}
		/*----------------------------------------------------------------to ADD data editmvirus--------------------------------------------------------------------------*/
	if(isset($_POST['save7'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editmvirus (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: mvirus_admin.php");}
		/*----------------------------------------------------------------to DELETE data editmvirus--------------------------------------------------------------------------*/
	if(isset($_GET['del7'])){
		$id = $_GET['del7'];
		
		mysqli_query($db, "DELETE FROM editmvirus WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: mvirus_admin.php');}
		/*----------------------------------------------------------------to update data editmvirus--------------------------------------------------------------------------*/
	if (isset($_POST['update7'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editmvirus SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: mvirus_admin.php');}
		/*----------------------------------------------------------------to ADD data editattachment--------------------------------------------------------------------------*/
	if(isset($_POST['save8'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editattachment1 (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: attachment_admin.php");}
		/*----------------------------------------------------------------to DELETE data editattachment--------------------------------------------------------------------------*/
	if(isset($_GET['del8'])){
		$id = $_GET['del8'];
		
		mysqli_query($db, "DELETE FROM editattachment1 WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: attachment_admin.php');}
		/*----------------------------------------------------------------to update data editattachment--------------------------------------------------------------------------*/
	if (isset($_POST['update8'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editattachment1 SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: attachment_admin.php');}
		/*----------------------------------------------------------------to ADD data editbattachment--------------------------------------------------------------------------*/
	if(isset($_POST['save9'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editbattachment (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: battachment_admin.php");}
		/*----------------------------------------------------------------to DELETE data editbattachment--------------------------------------------------------------------------*/
	if(isset($_GET['del9'])){
		$id = $_GET['del9'];
		
		mysqli_query($db, "DELETE FROM editbattachment WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: battachment_admin.php');}
		/*----------------------------------------------------------------to update data editbattachment--------------------------------------------------------------------------*/
	if (isset($_POST['update9'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editbattachment SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: battachment_admin.php');}
		/*----------------------------------------------------------------to ADD data editinternet--------------------------------------------------------------------------*/
	if(isset($_POST['save10'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editinternet (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: internet_admin.php");}
		/*----------------------------------------------------------------to DELETE data editinternet--------------------------------------------------------------------------*/
	if(isset($_GET['del10'])){
		$id = $_GET['del10'];
		
		mysqli_query($db, "DELETE FROM editinternet WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: internet_admin.php');}
		/*----------------------------------------------------------------to update data editinternet--------------------------------------------------------------------------*/
	if (isset($_POST['update10'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editinternet SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: internet_admin.php');}
		/*----------------------------------------------------------------to ADD data editloading--------------------------------------------------------------------------*/
	if(isset($_POST['save11'])){
		$pilihan 				= $_POST['pilihan'];
		mysqli_query($db, "INSERT INTO editloading (pilihan) VALUES ('$pilihan')");
		$_SESSION['message'] = "Data Disimpan";
		header("location: loading_admin.php");}
		/*----------------------------------------------------------------to DELETE data editloading--------------------------------------------------------------------------*/
	if(isset($_GET['del11'])){
		$id = $_GET['del11'];
		
		mysqli_query($db, "DELETE FROM editloading WHERE id=$id");
		$_SESSION['message'] = "Maklumat Telah Dibuang!";
		header('location: loading_admin.php');}
		/*----------------------------------------------------------------to update data editloading--------------------------------------------------------------------------*/
	if (isset($_POST['update11'])) {
	$id = $_POST['id'];
	$pilihan =$_POST['pilihan'];

	mysqli_query($db, "UPDATE editloading SET pilihan='$pilihan' WHERE id=$id");
	$_SESSION['message'] = "Data Dikemaskini!"; 
	header('location: loading_admin.php');}
?>