<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'aduan');

	// initialize variables
	$tarikh 				= "";
	$masa= "";
	$namapelapor 		= "";
	$bahagian 			= "";
	$pejsektorunik 				= "";
	$aras 			= "";
	$blok 			= "";
	$nophone 			= "";
	$email 	= "";
	$JKP 			= "";
	$JP 			= "";
	$jenama 				= "";
	$model 				= "";
	$butiran 				= "";
	$keterangan 				= "";
	$id = 0;
	$update 			= false;
													//simpan maklumat dalam database
	if (isset($_POST['save'])) {
		$tarikh 				= $_POST['tarikh'];
		$masa 		= $_POST['masa'];
		$namapelapor 		= $_POST['namapelapor'];
		$bahagian 			= $_POST['bahagian'];
		$pejsektorunik 				= $_POST['pejsektorunik'];
		$aras 			= $_POST['aras'];
		$blok 			= $_POST['blok'];
		$nophone 			= $_POST['nophone'];
		$email 	= $_POST['email'];
		$JKP 			= $_POST['JKP'];
		$JP 			= $_POST['JP'];
		$jenama 				= $_POST['jenama'];
		$model 				= $_POST['model'];
		$butiran 				= $_POST['butiran'];
		$keterangan 				= $_POST['keterangan'];

		mysqli_query($db, "INSERT INTO logpelapor (tarikh, masa, namapelapor, bahagian, pejsektorunik, aras, blok, nophone, email, JKP, JP, jenama, model, butiran, keterangan) VALUES ('$tarikh', '$masa', '$namapelapor', '$bahagian', '$pejsektorunik', '$aras', '$blok', '$nophone', '$email', '$JKP', '$JP', '$jenama', '$model', '$butiran', '$keterangan')");
		$_SESSION['message'] = "Address saved"; 
		header('location: print.php');
	}
							//simpan maklumat dalam database
	if (isset($_POST['save1'])) {
		$tarikh 				= $_POST['tarikh'];
		$masa 		= $_POST['masa'];
		$namapelapor 		= $_POST['namapelapor'];
		$bahagian 			= $_POST['bahagian'];
		$pejsektorunik 				= $_POST['pejsektorunik'];
		$aras 			= $_POST['aras'];
		$blok 			= $_POST['blok'];
		$nophone 			= $_POST['nophone'];
		$email 	= $_POST['email'];
		$JKP 			= $_POST['JKP'];
		$JP 			= $_POST['JP'];
		$jenama 				= $_POST['jenama'];
		$model 				= $_POST['model'];
		$butiran 				= $_POST['butiran'];
		$keterangan 				= $_POST['keterangan'];

		mysqli_query($db, "INSERT INTO logpelapor (tarikh, masa, namapelapor, bahagian, pejsektorunik, aras, blok, nophone, email, JKP, JP, jenama, model, butiran, keterangan) VALUES ('$tarikh', '$masa', '$namapelapor', '$bahagian', '$pejsektorunik', '$aras', '$blok', '$nophone', '$email', '$JKP', '$JP', '$jenama', '$model', '$butiran', '$keterangan')");
		$_SESSION['message'] = "Address saved"; 
	header('location: editaduan.php');}

															//update data baru 
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$tarikh 				= $_POST['tarikh'];
		$masa 		= $_POST['masa'];
		$namapelapor 		= $_POST['namapelapor'];
		$bahagian 			= $_POST['bahagian'];
		$pejsektorunik 				= $_POST['pejsektorunik'];
		$aras 			= $_POST['aras'];
		$blok 			= $_POST['blok'];
		$nophone 			= $_POST['nophone'];
		$email 	= $_POST['email'];
		$JKP 			= $_POST['JKP'];
		$JP 			= $_POST['JP'];
		$jenama 				= $_POST['jenama'];
		$model 				= $_POST['model'];
		$butiran 				= $_POST['butiran'];
		$keterangan 				= $_POST['keterangan'];

		mysqli_query($db, "UPDATE logpelapor SET tarikh='$tarikh', masa='$masa', namapelapor='$namapelapor', bahagian='$bahagian', pejsektorunik='$pejsektorunik', aras='$aras', blok='$blok', nophone='$nophone', email='$email', JKP='$JKP', JP='$JP', jenama='$jenama', model='$model', butiran='$butiran', keterangan='$keterangan' WHERE id=$id");
		$_SESSION['message'] = "Address updated!"; 
		header('location: editaduan.php');
	}
																	//buang data 
if(isset($_GET['del'])){
		$id = $_GET['del'];
		//$id = $_POST['id'];
		//$tarikh 				= $_POST['tarikh'];
		//$masa 		= $_POST['masa'];
		//$namapelapor 		= $_POST['namapelapor'];
		//$bahagian 			= $_POST['bahagian'];
		//$pejsektorunik 				= $_POST['pejsektorunik'];
		//$aras 			= $_POST['aras'];
		//$blok 			= $_POST['blok'];
		//$nophone 			= $_POST['nophone'];
		//$email 	= $_POST['email'];
		//$JKP 			= $_POST['JKP'];
		//$JP 			= $_PO
		
		
		//$jenama 				= $_POST['jenama'];
		//$model 				= $_POST['model'];
		//$butiran 				= $_POST['butiran'];
		//$keterangan 				= $_POST['keterangan'];
		mysqli_query($db, "DELETE FROM logpelapor WHERE id=$id");
		$_SESSION['message'] = "Data has been Deleted!";
		header('location: editaduan.php');}


	$results = mysqli_query($db, "SELECT * FROM logaduan");


?>