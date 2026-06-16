<?php
	include('server.php'); 
?>

<!DOCTYPE html>
<html>
<head><title>ADUAN PELAPOR</title>
		<!--ul-->
			<!--center><a href="record.php" class="home"><img src="images/back.png" width="50" height="50"></a></center-->
			<!--br /-->
			<div class="hello">
			<form class="example" action="listinventory.php" method="post">
			<!--input type="text" placeholder="Search.." name="search"-->
			
			<!--meta  http-equiv="Content-Type" content="text/html;  charset=iso-8859-1"> 
			<form  method="post" action="search.php?go"  id="searchform"><button type="submit"><img src="images/search.png" width="40" height="40"></button> 
			<input  type="text" name="NO">
			<!--input  type="submit" name="submit" value="Search"--> 
			</form>
			</div>
		<!--/ul-->
		</div>
</head>
<body>

		<div id="page"><h3></h3>
		<br />
			<center>
			<button class="print_btn" onclick="printDiv()"><img src="img/print.jpg" width="35" height="30"></button>
			<button><a href="admin.php"><img src="img/back.png" width="35" height="30"></a></button>
			</center>
			<!--iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe-->
			<div id="printableTable"><h3>ADUAN PELAPOR</h3>
			&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
			<div id="clockbox"></div>
				
			<script type="text/javascript">
				var tday=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
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
				
			<?php $results = mysqli_query($db, "SELECT * FROM logpelapor"); ?>
				<table bgcolor="white" table-layout="fixed" width="100%" method="post" action="print.php">
					<thead>
						<tr><th>id</th>
							<th>Tarihk</th>
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

					<?php while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $row['id']; ?></td>
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

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							<td><input type="checkbox" name="update" value="selesai">Selesai</td>
							<td><input type="checkbox" name="update" value="dalam pemerhatian">Dalam Pemerhatian</td>
							</tr>
						<?php } ?>
				</table><form>
			</div>
			<input type="submit" name="submit" Value="Submit"/>
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
			win.document.write('<body>');
			win.document.write(sTable);         // THE TABLE CONTENTS INSIDE THE BODY TAG.
			win.document.write('</body></html>');

			win.document.close(); 	// CLOSE THE CURRENT WINDOW.

			win.print();    // PRINT THE CONTENTS.
			}
	</script>


<style>

body {
	background-color: #00008b;
}

h3{
	font-family: "Times New Roman", sans-serif;
	font-size: 24px;
	padding: 0 75px;
	color: #FFFFFF;
}

#ct4{
	padding: 25px;
	border: 2px solid white;
	margin: 0 75px;
}



table {
	width: 100%; 
	margin:10px auto;
	border-collapse: collapse;
	border-color: 2px solid black;
	font-family: "Times New Roman", sans-serif;
	font-size: 14px;
	font-weight: normal;
	padding: 0 75px;
	color: #000000;
	box-shadow: 0px 0px 15px #000000;
	border-radius: 8px;
	
}

tr {
	border-bottom: 1px solid #000000;
	font-weight: bold;
	font-family: "Candara", sans-serif;
}

th {
	border: 1px solid #000000;
	padding: 0 10px;
	font-size: 14px;
	font-weight: bold;
	font-family: "Times New Roman", sans-serif;
	text-align: center;
}

td {
	border: 1px solid #000000;
	font-size: 14px;
	font-weight: normal;
	font-family: "Times New Roman", sans-serif;
	text-align: center;
	
}

td a{
	text-decoration: none;
	color: blue;
}

.edit_btn {
	text-decoration: none;
	padding:2px 5px;
	color: blue;
	border-radius: 3px;
}

.del_btn {
	text-decoration: none;
	padding:2px 5px;
	color: blue;
	border-radius: 3px;
}

.add_btn {
	text-decoration: none;
	padding: 2px 15px;
	background-color: transparent;
	color: white;
	border-radius: 3px;
	font-family: "Arial Light", sans-serif;
	font-size: 20px;
	font-weight: normal;
	margin: 10 10 10 10px;

}

.print_btn {
	text-decoration: none;
	padding:2px 5px;
	background-color: transparent;
	color: white;
	border-radius: 3px;
	font-family: "Arial Light", sans-serif;
	font-size: 16px;
	font-weight: normal;
	margin: 0 0 25 25px;
}
.back_btn{
	text-decoration: none;
	padding:2px 5px;
	background-color: transparent;
	color: white;
	border-radius: 3px;
	font-family: "Arial Light", sans-serif;
	font-size: 16px;
	font-weight: normal;
	margin: 0 0 25 25px;
}
}

.home{
	padding: 0 25px;
}



<!------SEARCH button------>
* {
  box-sizing: border-box;
}

form.example input[type=text] {
  padding: 18px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 30%;
  background: #f1f1f1;
  border-radius: 5px;
  text-align: left;
}

form.example button {
  padding: 12px;
  background: transparent;
  color: white;
  border: none;
  border-left: none;
  cursor: pointer;
  border-radius: 5px;
}

form.example button:hover {
  background: transparent;
  border-radius: 5px;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
  border-radius: 5px;
}

.hello form{
	padding: 0 38px;
}

</style>
</body></html>
