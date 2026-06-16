<?php
	include('bantuan_admin.php'); 
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="box1">
<?php

function test(){
	echo "<p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>";
	echo "<p>Soalan : Masalah tidak boleh buka attachment</p>";
	echo "<p>Jawapan</p>";
	echo "<p>i)Buka tools, option, security dan untick allow menu, kemudian tutup outlook express dan buka semula</p>";
}

test();
?>
<p>Cara Terkini Menyelesaikan Masalah</p>
<div id="page"><h3></h3>
<?php $results = mysqli_query($db, "SELECT * FROM editbattachment"); ?>
				<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>

					<?php while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $row['id']; ?></td>
							<td><?php echo $row['pilihan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php } ?>
				</table><form>
</div>
</div>
<div class="btn_back">
<button><a href="emel.php"><img src="img/back.png" width="35" height="30"></a></button>
</body>
<style>
body {
	font-family: calibri;
	font-size: 25px;
	color: #000000;
	background-color: #f2ccff;
	text-align: center;
}

.box1 {
	margin: auto; 
  padding: 40px;
  border: 5px solid white;
  color: #000000;;
  text-align: left;
  box-shadow:20px 20px 10px #df80ff;
  width: 50%;
}
#ct4{
	padding: 25px;
	border: 2px solid white;
	margin: 0 75px;
}

</style>
</html>