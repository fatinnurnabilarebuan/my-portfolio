<?php
require_once "config.php";
?>
<?php

session_start();

if(isset($_SESSION['role']))
{
	if($_SESSION['role'] != 'User')
	{
		header('Location: user.php');
	}
}
else
{
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>PASCORP PAPER INDUSTRIES BERHAD BENTONG</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
/*notifications*/
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #006666;
}

.header {
  overflow: hidden;
  background-color: white;
  padding: 20px 30px;
  background-color:white;
}

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
/*logo*/
.header a.logo {
  font-size: 25px;
  font-weight: bold;
  padding:10px;
  padding-right: 30px;
}
/*notifications*/
.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: #00008b;
  color: white;
}

.header-right {
  float: right;
  padding: 60px;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
}
/*box*/

.div2 {
  margin: auto;
  width: 300px;
  height: 300px;  
  padding: 50px;
  border: 1px solid #00008b;
  background-color: #006666;

  box-radius: 8px;
}

.div2 a{
		color: white;
}

/*footer*/
.footer{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
   background-color: #006666;
}

</style>
<body>
<!--notifications-->
<div class="header">
  <a href="#default" class="logo"><img src="img/pascorp1c.png" width="250" height="150"><!--BR>PASCORD PAPER <BR>INDUSTRIAN BERHAD--></a>
  <div class="header-right">
    <a class="active" href="user.php">Halaman Utama</a>
    <a href="logaduan.php">Aduan</a>
    <a href="print.php">Senarai Aduan</a>
    <a href="bantuan.php">Bantuan</a>
	<a href="index.php"> Log Keluar</a>
  </div>
</div>
<!--box-->

<div class="div2">
	<a href="logaduan.php"><i class="fa fa-file fa-2x"></i> Log Aduan Kerosakan</a><br><br>
	<a href="print.php"><i class="fa fa-file fa-2x"></i> Senarai Aduan</a><br><br>
	<a href="bantuan.php"><i class="fa fa-file fa-2x"></i> Bantuan Teknikal</a><br><br>
</div>
<!--footer-->
<div class="footer">
	<p>Copy@right PASCORD PAPER INDUSTRIAN BERHAD (2020)</p>
</div>
			<script type="text/javascript" src="js.jquery.min.js"></script>
			<script type="text/javascript" src="js.bootstrap.min.js"></script>
			<script type="text/javascript" src="js.popper .min.js"></script>
			
</body>
</html>