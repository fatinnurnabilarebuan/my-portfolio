<?php
	include('server.php'); 
?>

<?php
	if (isset($_GET['edit'])){
		$tarikh = $_GET['edit'];
		$array 	= "";
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM logpelapor WHERE tarikh=$tarikh");

		if ($array && array_count_values($array) == 1){
			$n 					= mysqli_fetch_array($record);
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
	<title>PASCORP PAPER INDUSTRIES BERHAD BENTONG</title>
</head>
<body>
<div class="header">
  <a href="#default" class="logo"><img src="img/pascorp1c.png" width="250" height="150"><!--BR>PASCORD PAPER <BR>INDUSTRIAN BERHAD--></a>
  <div class="header-right">
    <a href="user.php">Halaman Utama</a>
    <a class="active" href="logaduan.php">Aduan</a>
    <a href="print.php">Senarai Aduan</a>
    <a href="bantuan.php">Bantuan</a>
  </div>
</div>
<br><br>


<!--div id="printableTable"-->
<!--isi borang-->
	<div id="section">
	<div class="container1">
	<div id="printableTable"><!--function print-->
		<form method="post" action="server.php"><h3></h3>
<h2>Maklumat Pelapor</h2>
<b>Tarikh :</b> <input type="date" id="tarikh" name="tarikh" required><br><br>
<b>Masa :</b> <input type="time" id="masa" name="masa" required><br><br>
<b>Nama Pelapor :</b> <input type="text" id="namapelapor" name="namapelapor" required><br><br>
<b>Bahagian :</b> 
<select id="bahagian" name="bahagian" required><br><br>
<option value="---Pilih Bahagian---" >---Pilih Bahagian---</option>
<option value="Kilang" >Kilang</option>
<option value="Mawai" >Mawai</option>
<option value="IGA" >IGA</option>
</select><br><br>
<b>Pej/Sektor/Unik :</b>
<select id="pejsektorunik" name="pejsektorunik" required><br><br>
<option value="-----Pilih Pej/Sektor/Unik-----" >-----Pilih Pej/Sektor/Unik-----</option>
<option value="Pejabat/HR/HR" >Pejabat/HR/HR</option>
<option value="Kilang/Mesin/Melkinikal" >Kilang/Mesin/Melkinikal</option>
<option value="Mawail/Roll/Pemandu" >Mawail/Roll/Pemandu</option>
</select><br><br>
<b>Aras :<b/>
<select id="aras" name="aras" required>
<option value="---Pilih Aras---" >---Pilih Aras---</option>
<option value="1" >1</option>
<option value="2" >2</option>
<option value="Tiada" >Tiada</option>
</select><br><br>
<b>Tempat :</b>
<select id="blok" name="blok" required>
<option value="---Pilih Tempat---" >---Pilih Tempat---</option>
<option value="PM1" >PM1</option>
<option value="PM2" >PM2</option>
<option value="PM3" >PM3</option>
<option value="Mawai" >Mawal</option>
<option value="IGA" >IGA</option>
</select><br><br>
<b>No Telefon :</b> <input type="text" id="nophone" name="nophone" required><br><br> 
<b>Email :</b> <input type="text" id="email" name="email" required><br><br>


<div class="container1">
<h2>Jenis Kerosakan / Perkhidmatan</h2>
  <form action="print.php" method="post" id="nameform">
<b>Jenis Kerosakan / Perkhidmatan :</b>
<select id="JKP" name="JKP" required>
<option value="----Pilih Jenis Kerosakan / Perkhimatan----" >----Pilih Jenis Kerosakan / Perkhimatan----</option>
<option value="Pencetek" >Pencetak</option> 
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
</select><br><br>
<b>Jenis Peralatan :</b>
<select id="JP" name="JP" required>
<option value="----Pilih Jenis Peralatan----" >----Pilih Jenis Peralatan----</option>
<option value="Mouse" >mouse</option>
<option value="Keybroad" >Keybroad</option>
<option value="Monitor" >Monitor</option>
</select><br><br>
<b>jenis Jenama :</b>
<select id="jenama" name="jenama" required>
<option value="----Pilih Jenama----" >----Pilih Jenama----</option>
<option value="Lenovo" >Lenovo</option>
<option value="HP" >HP</option>
</select><br><br>
<b>Model Perisian :</b>
<select id="model" name="model" required>
<option value="----Pilih Model Perisian----" >----Pilih Model Perisian----</option>
<option value="AP123" >AP123</option>
<option value="HP001" >HP001</option>
</select><br><br>
<b>Butiran Kerosakan / No Siri</b> <input type="text" id="butiran" name="butiran" required><br><br>
<b>Keterangan Tambahan Butiran</b> <input type="text" id="keterangan" name="keterangan" required><br><br>
 
</div>

			<div class="input-group">
			<?php if ($update == true): ?>
				<button class="btn" type="submit" name="update" style="background: #556B2F;" />Kemaskini</button>
			<?php else: ?>
				<button class="btn" type="submit" name="save" value="Get Selected Values"/>Simpan</button>
			<?php endif ?>
			</div>
			<button class="print_btn" onclick="printDiv()">print</button>
		</form>
	</div>
	</div>
	<script>
		   function printDiv() {
			 	
			var sTable = document.getElementById('printableTable').innerHTML;
			

			var style = "<style>";
			style = style + "table {width: 100%;font: 17px Times New Roman;}";
			style = style + "table, th, td {border: solid 1px #000000; border-collapse: collapse;";
			style = style + "padding: 2px 3px;text-align: center;}";
			style = style + "#clockbox { color: #000000;}";
			style = style + "</style>";

			// CREATE A WINDOW OBJECT.
			var win = window.open('', '', 'height=700,width=1950');

			win.document.write('<html><head>');
			win.document.write('<title>Maklumat Aduan</title>');   // <title> FOR PDF HEADER.
			win.document.write(style);          // ADD STYLE INSIDE THE HEAD TAG.
			win.document.write('</head>');
			win.document.write('<center><img src="img/LOGO.jpg" width="250" height="150"></center>');
			win.document.write('<body>');
			win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
			win.document.write('</body></html>');

			win.document.close(); 	// CLOSE THE CURRENT WINDOW.

			win.print();    // PRINT THE CONTENTS. 
			}
	</script>
</body>

<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
/*logo*/
.header {
  overflow: hidden;
  background-color: white;
  padding: 20px 30px;
}
/*link*/
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}
/*tulisan pada logo sekiranya anda menggunakkan tulisan*/
.header a.logo {
  font-size: 25px;
  font-weight: bold;
}
/*navigation bar*/
.header a:hover {
  background-color: #ddd;
  color: black;
}
/*navigation bar*/
.header a.active {
  background-color: #00008b;
  color: white;
}
/*navigation bar*/
.header-right {
  float: right;
  padding: 40px;
}
/*logo*/
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #228B22; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #7b68ee;
}

/* Add a background color and some padding around the form */
.container1 {
  border-radius: 500px;
  background-color: #ffffff;
  padding: 20px;
}
* {box-sizing: border-box;}
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  text-align: center;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #ffffff;
}

/* Add a background color and some padding around the form */
.container1 {
  border-radius: 60px;
  background-color: #006666;
  color: black;
  padding: 30px;
}

	
body {	
	background-color: #ffffff;
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