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
/*ubah jenis tulisan background color warna tulisan*/
body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color: #006666;
  font-color: white;
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
/*tulisan pada logo sekiranya anda menggunakkan tulisan */
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
  }
}
/*table*/
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  color: white;
}

</style>
</head>
<body>
<!--loga-->
<div class="header">
  <a href="#default" class="logo"><img src="img/pascorp1c.png" width="250" height="150"></a>
  <!--navigation bar-->
  <div class="header-right">
    <a href="user.php">Halaman Utama</a>
    <a href="logaduan.php">Aduan</a>
    <a href="print.php">Senarai Aduan</a>
    <a class="active" href="bantuan.php">Bantuan</a>
  </div>
</div>
<br>
<!--table-->
<table align="center" margin-top="100px">
  <tr>
    <th>BIL</th>
	<th>NAMA</th>
	<th>NO.TELEFON</th>
	<!--th>BAHAGIAN Ditugaskan</th-->
	
  </tr>
  <tr>
    <td>1</td>
    <td>SHAFARIN AMAN NEJIS</td>
	<td>012-354 1207</td>
	<!--td>50</td-->
  </tr>
  <tr>
    <td>2</td>
    <td>FATIN NUR NABILA REBUAN</td>
	<td>011-2600 5120</td>
	<!--td>50</td-->
  </tr>
  <tr>
    <td>3</td>
    <td>MUHAMAD AMIRUL FITRI NORMAN</td>
	<td>017-955 9271</td>
	<!--td>50</td-->
  </tr>
</table>

</body>
</html>
