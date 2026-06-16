<!--Berhubung dengan page server.php-->
<?php 
include('server.php');
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM logpelapor WHERE id=$id");

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
	<?php if (isset($_SESSION['message'])): ?>
		<div class="msg">
			<?php 
				echo $_SESSION['message']; 
				unset($_SESSION['message']);
			?>
		</div>
	<?php endif ?>
	<div id="page"><h3></h3>
		<br />
			<center>
			<button class="print_btn" onclick="printDiv()"><img src="img/Print.jpg" width="35" height="30"></button><!--print_btn-->
			<button><a href="admin.php"><img src="img/back.png" width="35" height="30"></a></button>
			</center>
			<!--iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe-->
			<div id="printableTable"><h3>ADUAN PELAPOR</h3>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<div id="clockbox"></div>
				
			<script type="text/javascript">
				var tday=["AHAD","ISNIN","SELASA","RABU","KHAMIS","JUMAAT","SABTU"];
				var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

				function GetClock(){
				var d=new Date();
				var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
				var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

				if(nhour==0){ap=" AM";nhour=12;}
				else if(nhour<12){ap=" AM";}
				else if(nhour==12){ap=" PM";}
				else if(nhour>12){ap=" PM";nhour-=12;}

				if(nmin<=9) nmin="0"+nmin;
				if(nsec<=9) nsec="0"+nsec;

				var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
				document.getElementById('clockbox').style.color= '#FFFFFF';
				document.getElementById('clockbox').style.float= 'Right';
				document.getElementById('clockbox').style.padding= '0 0 15 15px';
				document.getElementById('clockbox').style.margin= '0 75px';
				document.getElementById('clockbox').innerHTML=clocktext;
				}

				GetClock();
				setInterval(GetClock,1000);
			</script>
<!--memaparkan maklumat-->
<?php $results = mysqli_query($db, "SELECT * FROM logpelapor"); ?>

<table>
	<thead>
		<tr>
			<th>Tarikh</th>
			<th>Masa</th>
			<th>Nama Pelapor</th>
			<th>Bahagian</th>
			<th>Pejabat/Sektor/Unit</th>
			<th>Aras</th>
			<th>Blok</th>
			<th>No Tel</th>
			<th>Emel</th>
			<th>Jenis Kerosakan / Perkhidmatan</th>
			<th>Jenis Peralatan</th>
			<th>Jenis Jenama</th>
			<th>Model Perisian</th>
			<th>Butiran Kerosakan / No Siri</th>
			<th>Keterangan Tambahan Butiran</th>
			<th colspan="2">TINDAKAN</th>
		</tr>
	</thead>
	
	<?php  while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['tarikh']; ?></td>
			<td><?php echo $row['masa']; ?></td>
			<td><?php echo $row['namapelapor']; ?></td>
			<td><?php echo $row['bahagian']; ?></td>
			<td><?php echo $row['pejsektorunik']; ?></td>
			<td><?php echo $row['aras']; ?></td>
			<td><?php echo $row['blok']; ?></td>
			<td><?php echo $row['nophone']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['JKP']; ?></td>
			<td><?php echo $row['JP']; ?></td>
			<td><?php echo $row['jenama']; ?></td>
			<td><?php echo $row['model']; ?></td>
			<td><?php echo $row['butiran']; ?></td>
			<td><?php echo $row['keterangan']; ?></td>
			<td>
				<a href="editaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Kemaskini</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Buang</a>
			</td>
		</tr>
	<?php  } ?>
</table>
</div>
	<!--admin boleh edit data, buang data, dan tambah data pelapor-->
<form method="post" action="server.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label><b>Tarikh :</b></label>
		<input type="date" name="tarikh" value="<?php echo $tarikh; ?>">
	</div>
	<div class="input-group">
		<label><b>Masa :</b></label>
		<input type="time" name="masa" value="<?php echo $masa; ?>">
	</div>
	<div class="input-group">
		<label><b>Nama Pelapor :</b></label>
		<input type="text" name="namapelapor" value="<?php echo $namapelapor; ?>">
	</div>
	<div class="input-group">
		<label><b>Bahagian :</b></label>
		<select id="bahagian" name="bahagian" value="<?php echo $bahagian; ?>">
		<option value="---Pilih Bahagian---">---Pilih Bahagian---</option>
		<option value="Kilang">Kilang</option>
		<option value="Mawai">Mawai</option>
		<option value="IGA">IGA</option>
		</select>
	</div>
	<div class="input-group">
		<label><b>Pej/Sektor/Unik :</b></label>
		<select id="pejsektorunik" name="pejsektorunik" value="<?php echo $pejsektorunik; ?>">
		<option value="-----Pilih Pej/Sektor/Unik-----" >-----Pilih Pej/Sektor/Unik-----</option>
		<option value="Pejabat/HR/HR" >Pejabat/HR/HR</option>
		<option value="Kilang/Mesin/Melkinikal" >Kilang/Mesin/Melkinikal</option>
		<option value="Mawail/Roll/Pemandu" >Mawail/Roll/Pemandu</option>
		</select>
	</div>
	<div class="input-group">
		<label><b>Aras :<b/></label>
		<select id="aras" name="aras" value="<?php echo $aras; ?>"required>
		<option value="---Pilih Aras---" >---Pilih Aras---</option>
		<option value="1" >1</option>
		<option value="2" >2</option>
		<option value="tiada" >Tiada</option>
		</select>
	</div>
	<div class="input-group">
		<label><b>Tempat :</b></label>
		<select id="blok" name="blok" value="<?php echo $blok; ?>"required>
		<option value="---Pilih Tempat---" >---Pilih Tempat---</option>
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
		<option value="----Pilih Jenis Kerosakan / Perkhimatan----" >----Pilih Jenis Kerosakan / Perkhimatan----</option>
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
		<option value="----Pilih Jenis Peralatan----" >----Pilih Jenis Peralatan----</option>
		<option value="Mouse" >mouse</option>
		<option value="Keybroad" >Keybroad</option>
		<option value="Monitor" >Monitor</option>
		</select>
	</div>
	<div class="input-group">
		<label><b>jenis Jenama :</b></label>
		<select id="jenama" name="jenama" value="<?php echo $jenama; ?>"required>
		<option value="----Pilih Jenama----" >----Pilih Jenama----</option>
		<option value="Lenovo" >Lenovo</option>
		<option value="HP" >HP</option>
		</select>
	</div>
	<div class="input-group">
		<label><b>Model Perisian :</b></label>
		<select id="model" name="model" value="<?php echo $model; ?>"required>
		<option value="----Pilih Model Perisian----" >----Pilih Model Perisian----</option>
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
			<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
		<?php else: ?>
			<button class="btn" type="submit" name="save" >Save</button>
		<?php endif ?>
	</div>
</form>
<!--proses print-->
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
			win.document.write('<body>');
			win.document.write('<center><img src="img/LOGO.jpg" width="250" height="150"></center>');
			win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
			win.document.write('</body></html>');

			win.document.close(); 	// CLOSE THE CURRENT WINDOW.

			win.print();    // PRINT THE CONTENTS.
			}
	</script>
</body>
<style>
/*background*/
body {
    font-size: 19px;
	background-color: #006666;
}
/*boleh ubah lebar, kedudukan tulisan, background color*/
table{
    width: 30%;
    margin: 10px auto;
    border-collapse: collapse;
    text-align: left;
	background-color: white;
}
/*boleh ubah ketebalan garisan*/
tr {
    border-bottom: 1px solid #cbcbcb;
}
/*boleh ubah line pada table, tinggi table, kedudukan tulisan*/
th, td{
    border: none;
    height: 30px;
    padding: 2px;
	text-align: center;
}
/*color background bertukar apabila anak panah sentuh pada baris*/
tr:hover {
    background: #F5F5F5;
}
/*boleh ubah lebah dan kedudukan tulisan dan lain-lain*/
form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}
/*menentukan jarak antara label dan input type*/
.input-group {
    margin: 10px 0px 10px 0px;
}
/*kedudukan tulisan <!--label-->*/
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
/*ubah kedudukan input */
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
/*update button save button update*/
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
/*button update pada table*/
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}
/*button buang pada table*/
.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
/*apabila selesai buang data atau update data msg akan keluar*/
.msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
select{
	width:97%;
	border: 1px solid gray;
	border-radius:05px;
	padding: 10px 15px 10px 15px;
}
</style>
</html>