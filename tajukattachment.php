<?php 
include('tajuk_admin.php');

		if (isset($_GET['edit'])){
		$id = $_GET['edit'];
		$array 	= "";
		$update = true;
		$rec = mysqli_query($db, "SELECT * FROM tajukattachment1 WHERE id=$id");
		$record = mysqli_fetch_array($rec);
		$soalan = $record['soalan'];
		$id = $record['id'];
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>PASCORP PAPER INDUSTRIES BERHAD BENTONG</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<style>
/*header*/
body{
	margin:0px;
	border:0px;
	font-family: Arial;
	font-size: 24px;
	background-color: #47a56a;
}
.header{
	width:100%;
	height:150px;
	background: #00e0d2;
	color: white;
}
/*sidbar*/
.manu{
	width: 400px;
	height: 300px;
	background:  #47a56a;
	float: left;
}
/*data*/
.data{
	height:474px;
	background-color: #47a56a;
	color: black;
	text-align: center;
	font-size: 24px;
	font-family: arial;
}
body {
    font-size: 19px;
}
/*link*/
.manu ul{
	list-style: none;
	margin: 0;
}
.manu ul li{
	padding: 15px;
	position: relative;
	width: 300px;
	background:#47a56a;
	border-top: 1px solid #47a56a;
	color: white;
}
.manu ul ul{
	transition: all 0.3s;
	opacity: 0;
	position: absolute;
	visibility: hidden;
	left: 90%;
	top: -2%;
}
.manu ul li:hover > ul{
	opacity: 1;
	visibility: visible;
}
.manu ul li a{
	color: #fff;
	text-decoration: none;
}
body {
    font-size: 19px;
}
table{
    width: 50%;
    margin: 30px auto;
    border-collapse: collapse;
    text-align: left;
}
tr {
    border-bottom: 1px solid #cbcbcb;
}
th, td{
    border: none;
    height: 30px;
    padding: 2px;
}
tr:hover {
    background: #F5F5F5;
}

form {
    width: 45%;
    margin: 30px 30px 30px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.btn {
    padding: 10px;
    font-size: 15px;
    color: white;
    background: #5F9EA0;
    border: none;
    border-radius: 5px;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}

.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
}
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
/*logo*/
#adminlogo{
	width: 250px;
	height: 150px;
}
.btn_back{
	position: fixed;
  bottom: 0;
  right: 0;
}
</style>
<body>
<!--logo-->
<div class="header">
<center><img src="img/pascorp1c.png" alt="adminlogo" id="adminlogo"></center>
</div>
<!--sidebar-->
<div class="manu">
<ul>
	<li><a href="admin.php">Halaman Utama</a></li>
	<li><a href="editaduan.php">Kemaskini Aduan</a></li>
	<li><a href="">Kemaskini Jenis Bantuan</a>
		<ul>
			<li><a href="peralatan_admin.php">Peralatan</a></li>
			<li><a href="perisian_admin.php">Perisian</a></li>
			<li><a href="virus_admin.php">Virus</a></li>
			<li><a href="emel_admin.php">Emel</a></li>
			<li><a href="rangkaian_admin.php">Rangkaian</a></li>
		</ul>
	</li>
	<li><a href="index.php"> Log Keluar</a></li>
</ul>
</div>
<!--data-->
<div class="data"><br>
<!---------------Edit masalah baru-------------->
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
<p><b>Fail yang diterima daripada attachment hilang selepas di simpan</b></p>

<?php $results = mysqli_query($db, "SELECT * FROM tajukattachment1"); ?>
<table>
	<thead>
		<tr>
			<th><center>Cara Terbaru Menyelesaian Masalah</center></th>
		</tr>
	</thead>
	
	<?php  while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['soalan']; ?></td>
			<td>
				<a href="tajukattachment.php?edit=<?php echo $row['id']; ?>" class="edit_btn" >Ubah Suai</a>
			</td>
			<td>
				<a href="tajuk_admin.php?del8=<?php echo $row['id']; ?>" class="del_btn">Buang</a>
			</td>
		</tr>
	<?php  } ?>
</table>
	


<form method="post" action="tajuk_admin.php" >

	<input type="hidden" name="id" value="<?php echo $id; ?>">

	<div class="input-group">
		<label>Soalan Terkini</label>
		<input type="text" name="soalan" value="<?php echo $soalan; ?>">
	</div>
	<div class="input-group">

		<?php if ($update == false): ?>
			<button class="btn" type="submit" name="save8" style="background: #556B2F;" >Simpan</button>
		<?php else: ?>
			<button class="btn" type="submit" name="update8" >Kemaskini</button>
		<?php endif ?>
	</div>
</form>
<div class="btn_back">
		<button><a href="attachment_admin.php"><img src="img/back.png" width="35" height="30" align="right"></a></button>
	</div>
</div>
</body>
</html>