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
									<!-----masalah attachment----->
<!-- Trigger/Open The Modal -->
<button id="myBtn">Fail yang diterima daripada attachment hilang selepas di simpan</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
  <!--model header-->
  <div class="modal-header">
    <span class="close">&times;</span>
	<p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>
	<p>Soalan : Fail yang diterima daripada attachment, hilang selepas di simpan.</p>
	<p>Soalan lebih kurang sama</p>
	<?php $results = mysqli_query($db, "SELECT * FROM tajukattachment1"); ?>
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
	<!--modal body-->
	<div class="modal-body">
	<p>Jawapan</p>
	<p>i)Pastikan fail yang diterima disimpan (save) dalam cakera keras (desktop) terlebih dahulu sebelum membuat pindaan (edit)</p>
	</div>
	<div id="page"><h3></h3>
	<!--modal footer-->
	<div class="modal-footer">
	<p>Cara Terkini Menyelesaikan Masalah</p>
<?php $results = mysqli_query($db, "SELECT * FROM editattachment1"); ?>
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
                                    <!-----masalah buka attachment----->
<!-- Trigger/Open The Modal -->
<button id="komputer">Masalah tidak boleh buka attachment</button>

<!-- The Modal -->
<div id="myModal1" class="modal1">

  <!-- Modal content -->
  <div class="modal-content1">
  <!--modal header-->
  <div class="modal-header">
    <span class="close1">&times;</span>
    <p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>
	<p>Soalan : Fail yang diterima daripada attachment, hilang selepas di simpan.</p>
	<p>Soalan lebih kurang sama</p>
	<?php $results = mysqli_query($db, "SELECT * FROM tajukbattachment"); ?>
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
	<!--modal body-->
	<div class="modal-body">
	<p>Jawapan</p>
	<p>i)Pastikan fail yang diterima disimpan (save) dalam cakera keras (desktop) terlebih dahulu sebelum membuat pindaan (edit)</p>
	</div>
	<div id="page">
	<!--modal footer-->
	<div class="modal-footer">
	<p>Cara Terkini Menyelesaikan Masalah</p>
<?php $results = mysqli_query($db, "SELECT * FROM editbattachment"); ?>
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
									<!-----masalah attachment----->
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
								<!-----masalah buka attachment----->
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
<!--btn back img-->
<div class="btn_back">
<button><a href="faq.php"><img src="img/back.png" width="35" height="30"></a></button>
</div>
</body>
<style>
/*full background color, font size*/
body {
	font-family: calibri;
	font-size: 25px;
	background-color: #80b3ff;
	text-align: center;
}
/*box1*/
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
									/*masalah attachment*/
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
									/*masalah buka attachment*/
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
</style>
</html>