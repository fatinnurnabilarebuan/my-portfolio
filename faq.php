<!--berhubung dengan page cinfig.php-->
<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>PASCORP PAPER INDUSTRIES BERHAD BENTONG</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
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
  /*navigation bar*/
  .header-right {
    float: none;
	padding: 40px;
  }
}
/*menentukan kedudukan tulisan dan kedudukan button*/
.container{
	text-align: center;
	margin-top: 100px;
	float: left;
	padding-left: 50px;
}
body{
	background-color: #006666;
}
/*ubah button*/
.btn{
	border: 1px solid #3498db;
	background: none;
	padding: 10px 60px;
	font-size: 20px;
	font-family: "montserrat";
	cursor: pointer;
	margin: 10px;
	transition: 0.8s;
	position: relative;
	overflow: hidden;
}
.btn1,.btn2{
	color: black;
}
.btn3,.btn4{
	color: black;
}
.btn5,.btn6{
	color:black;
}
.btn1:hover,.btn2:hover{				/*bahagian ini menentukan warna pada button dan juga size tulisan kedudukan tulisan*/
	color: #fff;
}
.btn3:hover,.btn4:hover{
	color: #fff;
}
.btn5:hover,.btn6:hover{
	color: #fff;
}
.btn::before{
	content:"";
	position: absolute;
	left: 0;
	width: 100%;
	height: 0%;
	background: #3498db;
	z-index: -1;
	transition: 0.8s;
}
.btn1::before,.btn3::before{
	top:0;
	border-radius:0 0 50% 50%;
}
.btn2::before,.btn5::before{
	top:0;
	border-radius:0 0 50% 50%;
}
.btn4::before,.btn6::before{
	top:0;
	border-radius:0 0 50% 50%;
}
.btn5::before,.btn6::before{
	height: 180%;
}
.btn1:hover::before,.btn2:hover::before{
	height: 180%;
}
.btn3:hover::before,.btn4:hover::before{
	height: 180%;
}
.btn5:hover::before,.btn6:hover::before{
	height: 180%;
}
</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo"><img src="img/pascorp1c.png" width="250" height="150"></a>
  <div class="header-right">
    <a href="user.php">Halaman Utama</a>
    <a href="logaduan.php">Aduan</a>
    <a href="print.php">Senarai Aduan</a>
    <a class="active" href="bantuan.php">Bantuan</a>
  </div>
</div>
<div class="container">
	<form action="peralatan.php" method="post">
	<button class="btn btn1" type="submit" name="button">Peralatan</button>
	</form>
	</div>
	<div class="container">
	<form action="perisian.php" method="post">
	<button class="btn btn2" type="submit" name="button">Perisian</button>
	</form>
	</div>
	<div class="container">
	<form action="virus.php" method="post">
	<button class="btn btn3" type="submit" name="button">Virus</button>
	</form>
	</div>
	<div class="container">
	<form action="emel.php" method="post">
	<button class="btn btn4" type="submit" name="button">Emel</button>
	</form>
	</div>
	<div class="container">
	<form action="rangkaian.php" method="post">
	<button class="btn btn5" type="submit" name="button">Rangkaian</button>
	</form>
	</div>

</body>
</html>
