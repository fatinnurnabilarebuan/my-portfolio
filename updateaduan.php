<!--berhubung dengan page server.php-->
<?php
	include('server.php'); 
	
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM info WHERE id=$id");
		
		if (isset($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$tarikh 				= $n['tarikh'];
			$masa 		= $n['masa'];
			$namapelapor 		= $n['namapelapor'];
			$bahagian 			= $n['bahagian'];
			$pejsektorunik 				= $n['pejsektorunik'];
			$aras 			= $n['aras'];
			$blok 			= $n['blok'];
			$nophone 			= $n['nophone'];
			$email 	= $n['email'];
			$JKP 			= $n['JKP'];
			$JP 			= $n['JP'];
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
	<title>PASCORP PAPER INDUSTRIES BERHAD BENTONG</title>
</head>
<body>
<center>
<a class="active" href="editaduan.php"><img src="img/back.png" width="50" height="50"></a></center>

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


	<div id="section">
	<div class="container1">
		<form method="post" action="server.php">
			<div class="input-group">
				<label><b>Tarikh :</b></label>
				<input type="date" name="tarikh" value="<?php echo $tarikh; ?>"required> 
			</div>
			<div class="input-group">
				<label><b>MASA :</b></label>
				<input type="time" name="masa" value="<?php echo $masa; ?>"required>
			</div>
			<div class="input-group">
				<label><b>Nama Pelapor :</b></label>
				<input type="text" name="namapelapor" value="<?php echo $namapelapor; ?>"required>
			</div>
			<div class="input-group">
				<label><b>Bahagian :</b></label>
				<select id="bahagian" name="bahagian" value="<?php echo $bahagian; ?>"required>
				<option value="0" >---Pilih Bahagian---</option>
				<option value="Kilang" >Kilang</option>
				<option value="Mawai" >Mawai</option>
				<option value="IGA" >IGA</option>
				</select>
			</div>
			<div class="input-group">
				<label><b>Pej/Sektor/Unik :</b></label>
				<select id="pejsektorunik" name="pejsektorunik" value="<?php echo $bahagian; ?>"required>
				<option value="sub0" >-----Pilih Pej/Sektor/Unik-----</option>
				<option value="Pejabat/HR/HR" >Pejabat/HR/HR</option>
				<option value="Kilang/Mesin/Melkinikal" >Kilang/Mesin/Melkinikal</option>
				<option value="Mawail/Roll/Pemandu" >Mawail/Roll/Pemandu</option>
				</select>
			</div>
			<div class="input-group">
				<label><b>Aras :<b/></label>
				<select id="aras" name="aras" value="<?php echo $aras; ?>"required>
				<option value="0" >---Pilih Aras---</option>
				<option value="1" >1</option>
				<option value="2" >2</option>
				</select>
			</div>
			<div class="input-group">
				<label><b>Tempat :</b></label>
				<select id="blok" name="blok" value="<?php echo $blok; ?>"required>
				<option value="1" >---Pilih Tempat---</option>
				<option value="PM1" >PM1</option>
				<option value="PM2" >PM2</option>
				<option value="PM3" >PM3</option>
				<option value="Mawai" >Mawal</option>
				<option value="IGA" >IGA</option>
				</select>
			</div>
			<div class="input-group">
				<label><b>No Telefon :</b></label>
				<input type="text" name="nophone" value="<?php echo $nophone; ?>"required>
			</div>
			<div class="input-group">
				<label><b>Email :</b></label>
				<input type="text" name="email" value="<?php echo $email; ?>"required>
			</div>
			
			<h2>Jenis Kerosakan / Perkhidmatan</h2>
			<div class="input-group">
				<label><b>Jenis Kerosakan / Perkhidmatan :</b></label><br>
				<select id="JKP" name="JKP" value="<?php echo $JKP; ?>" required>
				<option value="1" >----Pilih Jenis Kerosakan / Perkhimatan----</option>
				<option value="Pencetak" >Pencetak</option> 
				<option value="Perisian" >Perisian</option> 
				<option value="Serangan Virus">Serangan Virus</option> 
				<option value="Paparan Vidoe_wall" >Paparan Vidoe Wall</option> 
				<option value="Emel 1GOVUC" >Emel 1GOVUC</option> 
				<option value="Kata Laluan" >Kata Laluan</option> 
				<option value="LCD Projector" >LCD Projector</option> 
				<option value="Toner" >Toner</option> 
				<option value="Peralatan Notebook" >Peralatan Notebook</option> 
				<option value="Rangkaian & Capaian Internet">Rangkaian & Capaian Internet</option>  
				<option value="Kabel (Power, VGA, USB)">Kabel (Power, VGA, USB)</option>  
				<option value="Server" >Server</option>  
				<option value="Telefon VOIP" >Telefon VOIP</option>  
				<option value="Domain / Profile JPA" >Domain / Profile JPA</option>  
				<option value="Masalah Berkaitan Antivirus" >Masalah Berkaitan Antivirus</option>  
				<option value="Sharing / Link (Printer / Folder)">Sharing / Link (Printer / Folder)</option>  <br><br>
				</select>
			</div>
			<div class="input-group">
				<label><b>Jenis Peralatan :</b></label>
				<select id="JP" name="JP" value="<?php echo $JP; ?>"required>
				<option value="AP123" >----Pilih Jenis Peralatan----</option>
				<option value="Mouse" >mouse</option>
				<option value="Keybroad" >Keybroad</option>
				<option value="Monitor" >Monitor</option>
				</select>
			</div>
			<div class="input-group">
				<label><b>jenis Jenama :</b></label>
				<select id="jenama" name="jenama" value="<?php echo $jenama; ?>"required>
				<option value="AP123" >----Pilih Jenama----</option>
				<option value="Lenovo" >Lenovo</option>
				<option value="HP" >HP</option>
				</select>
			</div>
			<div class="input-group">
				<label><b>Model Perisian :</b></label>
				<select id="model" name="model" value="<?php echo $model; ?>"required>
				<option value="3" >----Pilih Model Perisian----</option>
				<option value="AP123" >AP123</option>
				<option value="HP001" >HP001</option>
				</select>
			</div>
			<div class="input-group">
				<label><b>Butiran Kerosakan / No Siri</b></label>
				<input type="text" name="butiran" value="<?php echo $butiran; ?>"required> 
			</div>
			<div class="input-group">
				<label><b>Keterangan Tambahan Butiran</b></label>
				<input type="text" name="keterangan" value="<?php echo $keterangan; ?>"required> 
			</div>
			<div class="input-group">
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" style="background: #556B2F;" />Kemaskini</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save" />SAVE</button>
			<?php endif ?>
			</div>
		</form>
	</div>



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
	width:100%;	
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