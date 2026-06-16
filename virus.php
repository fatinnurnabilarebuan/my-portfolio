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
									<!-----masalah virus----->
<!-- Trigger/Open The Modal -->
<button id="myBtn">Masalah komputer sering di serang virus</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
	<div class="modal-header">
		<span class="close">&times;</span>
		<p>Soalan-Soalan Yang Sering Ditanya <br>(FAQ)</p>
		<p>Soalan : Masalah komputer sering di serang virus.</p>
		<p>Soalan lebih kurang sama</p>
	<?php $results = mysqli_query($db, "SELECT * FROM tajukmvirus"); ?>
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
		<p>i)Pastikan tiada disket dalam floppy drive.</p>
		<p>ii)Jangan memuat turun (download) data daripada internet tanpa kebenaran.</p>
		<p>iii)Jangan melayari laman web yang tidak dibenarkan.</p>
		<p>iv)Jangan buka email yang tidak dikenali.</p>
	</div>
	<div id="page"><h3></h3>
	<div class="modal-footer">
	<p>Cara Terkini Menyelesaikan Masalah</p>
<?php $results = mysqli_query($db, "SELECT * FROM editmvirus"); ?>
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
							<!-----masalah virus----->
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
									/*masalah virus*/
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
  background-color: #5cb85c;
  color: white;
  height: 400px;
}
</style>
</html>