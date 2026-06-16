<?php
	include('bantuan_admin.php'); 
?>
<!DOCTYPE html>
<html>
<head>
<title>PASCORP PAPER INDUSTRIES BERHAD BENTONG</title>
</head>
<body>
<div class="box1">
<center><h2>Penyelesaian Masalah Yang Sering Berlaku
(FAQ)</h2></center>
									<!-----masalah printer----->
<!-- Trigger/Open The Modal -->
<button id="myBtn">Printer gagal berfungsi dengan sempurna 
(tidak boleh print)</button><br>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <div class="modal-header">
    <span class="close">&times;</span>
    <p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>
	<p>Soalan : Printer gagal berfungsi dengan sempurna. (tidak boleh print)</p>
	<p>Soalan lebih kurang sama</p>
	<?php $results = mysqli_query($db, "SELECT * FROM tajukprinter"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td>Soalan : <?php echo $row['soalan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
	</div>
	<div class="modal-body">
	<p>Jawapan</p>
	<p>i)Check cable power dan usb</p>
	<p>ii)Check toner, kertas.</p>
	<p>iii)Check error mesej</p>
	</div>
	<div id="page"><h3></h3>
	<div class="modal-footer">
	 <p>Cara Terkini Menyelesaikan Masalah</p>
<?php $results = mysqli_query($db, "SELECT * FROM editprinter"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td><?php echo $row['pilihan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
	</div>
</div>
	
  </div>
</div>
                                    <!-----masalah komputer----->
<!-- Trigger/Open The Modal -->
<button id="komputer">Masalah komputer menjadi 
Blue Screen</button><br>

<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
  <div class="modal-header">
    <span class="close1">&times;</span>
    <p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>
	<p>Soalan : Masalah komputer menjadi Blue Screen.</p>
	<p>Soalan lebih kurang sama</p>
	<?php $results = mysqli_query($db, "SELECT * FROM tajukkomputer"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td>Soalan : <?php echo $row['soalan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
	</div>
	<div class="modal-body">
	<p>Jawapan</p>
	<p>i)Matikan computer tersebut selama 10 minit supaya ia dapat reset atau sejukkan perkakasan dalaman computer</p>
	<p>ii) Lihat berdasarkan kepada error keluar, hubungi help desk untuk tindakan selanjutnya</p>
	</div>
	<div id="page"><h3></h3>
	<div class="modal-footer">
	<p>Cara Terkini Menyelesaikan Masalah</p>
<?php $results = mysqli_query($db, "SELECT * FROM editkomputer"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td><?php echo $row['pilihan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
		</div>
</div>
  </div>

</div>
					<!-- hard drive -->
<!-- Trigger/Open The Modal -->
<button id="hard">Masalah hard drive 
failure</button><br>

<!-- The Modal -->
<div id="myModal2" class="modal2">

  <!-- Modal content -->
  <div class="modal-content2">
  <div class="modal-header">
    <span class="close2">&times;</span>
    <p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>
	<p>Soalan : Masalah hard drive failure.</p>
	<p>Soalan lebih kurang sama</p>
	<?php $results = mysqli_query($db, "SELECT * FROM tajukharddrive"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td>Soalan : <?php echo $row['soalan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
	</div>
	<div class="modal-body">
	<p>Jawapan</p>
	<p>i)Pastikan komputer di shutdown dengan cara yang betul.</p>
	</div>
<div id="page">
<div class="modal-footer">
<p>Cara Terkini Menyelesaikan Masalah</p>
<?php $results = mysqli_query($db, "SELECT * FROM editharddrive"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td><?php echo $row['pilihan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
		</div>
</div>
  </div>

</div>
									<!-- cdrom -->
<!-- Trigger/Open The Modal -->
<button id="cdrom">Masalah CD Rom tidak berfungsi (tidak dapat membaca cd)</button>

<!-- The Modal -->
<div id="myModal3" class="modal3">

  <!-- Modal content -->
  <div class="modal-content3">
  <div class="modal-header">
    <span class="close3">&times;</span>
    <p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>
	<p>Soalan : Masalah CD ROM tidak berfungsi (tidak dapat membaca cd)</p>
	<p>Soalan lebih kurang sama</p>
	<?php $results = mysqli_query($db, "SELECT * FROM tajukcdrom"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td>Soalan : <?php echo $row['soalan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
	</div>
	<p>Jawapan</p>
	<div class="modal-body">
	<p>i)Pastikan cd tidak rosak/bercalar.</p>
	<p>ii)Pastikan CD yang digunakan adalah drive CD, bukan DVD</p>
	</div>
	<div id="page"><h3></h3>
	<div class="modal-footer">
	<p>Cara Terkini Menyelesaikan Masalah</p>
<?php $results = mysqli_query($db, "SELECT * FROM editcdrom"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td><?php echo $row['pilihan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
		</div>
</div>
  </div>

</div>
									<!-- masalah usb -->
<!-- Trigger/Open The Modal -->
<button id="usb">Masalah USB tidak dapat 
berfungsi</button>

<!-- The Modal -->
<div id="myModal4" class="modal4">

  <!-- Modal content -->
  <div class="modal-content4">
  <div class="modal-header">
    <span class="close4">&times;</span>
    <p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>
	<p>Soalan : Masalah USB tidak dapat berfungsi.</p>
	<p>Soalan lebih kurang sama</p>
	<?php $results = mysqli_query($db, "SELECT * FROM tajukcdrom"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td>Soalan : <?php echo $row['soalan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
	</div>
	<div class="modal-body">
	<p>Jawapan</p>
	<p>i)Restart komputer, gunakan port lain</p>
	</div>
<div id="page"><h3></h3>
<div class="modal-footer">
<p>Cara Terkini Menyelesaikan Masalah</p>
<?php $results = mysqli_query($db, "SELECT * FROM editusb"); ?>
					<table table-layout="fixed" width="90%">
					<thead>
						<tr><th></th>
							<th></th>
							<!--th>PILIHAN1</th-->
					</thead>
					<?php 
					$no=1;
					while ($row = mysqli_fetch_array($results)) { ?>
						<tr><td><?php echo $no; ?></td>
							<td><?php echo $row['pilihan']; ?></td>
							<!--td><!--?php echo $row['pilihan1']; ?></td-->

							<!--<td><a href="updatelogaduan.php?edit=<?php echo $row['id']; ?>" class="edit_btn">EDIT</a></td>-->
							<!--<td><a href="print.php?del=<?php echo $row['id'];?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close">delete</i></a></td></td>-->
							</tr>
						<?php 
						$no++;
						} ?>
						</table>
		</div>
</div>
  </div>

</div>
</div>
									<!-----masalah printer----->
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
								<!-----masalah komputer----->
<script>
// Get the modal
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var komputer = document.getElementById("komputer");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal 
komputer.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>
						<!-- hard drive -->
<script>
// Get the modal
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var hard = document.getElementById("hard");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal 
hard.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>
											<!-- cdrom -->
<script>
// Get the modal
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal
var cdrom = document.getElementById("cdrom");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal 
cdrom.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
</script>
										<!-- masalah usb -->
<script>
// Get the modal
var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var usb = document.getElementById("usb");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close4")[0];

// When the user clicks the button, open the modal 
usb.onclick = function() {
  modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}
</script>


<div class="btn_back">
<button><a href="faq.php"><img src="img/back.png" width="35" height="30"></a></button>
</div>
</body>
<style>
body {
	font-family: calibri;
	font-size: 25px;
	background-color: #80b3ff;
	text-align: center;
}

.box1 {
	margin: auto;
  width: 550px;
  height: 470px;  
  padding: 40px;
  border: 5px solid white;
  color: #000000;;
  text-align: left;
  box-shadow:20px 20px 10px #1a75ff;
}
									/*masalah printer*/
/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
  height: 400px;
}
									/*masalah komputer*/
/* The Modal (background) */
.modal1 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content1 {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
/* The Close Button */
.close1 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close1:hover,
.close1:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
  height: 400px;
}
									/* hard drive */
/* The Modal (background) */
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content2 {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
/* The Close Button */
.close2 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close2:hover,
.close2:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
  height: 400px;
}
											/* cdrom */
/* The Modal (background) */
.modal3 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content3 {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
/* The Close Button */
.close3 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close3:hover,
.close3:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
  height: 400px;
}
										/* usb */
/* The Modal (background) */
.modal4 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content4 {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}
/* The Close Button */
.close4 {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close4:hover,
.close4:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
  height: 400px;
}
</style>
</html>