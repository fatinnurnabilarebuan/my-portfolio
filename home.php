<?php
require_once "config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: white;
  padding: 20px 30px;
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

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

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
  padding: 40px;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
}
.div2 {
  margin: auto;
  width: 300px;
  height: 300px;  
  padding: 50px;
  border: 1px solid #00008b;
  color: white;
}
.footer{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: red;
   color: white;
   text-align: center;
}

</style>
</head>
<body>

<div class="header">
  <a href="#default" class="logo"><img src="img/LOGO.jpg" width="250" height="150"><!--BR>PASCORD PAPER <BR>INDUSTRIAN BERHAD--></a>
  <div class="header-right">
    <a class="active" href="home.php">Halaman Utama</a>
    <a href="logaduan.php">Aduan</a>
    <a href="print.php">List Aduan</a>
    <a href="bantuan.php">Bantuan</a>
  </div>
</div>
<div class="div2">
	<a href="logaduan.php"><i class="fa fa-file fa-2x"></i> Log Aduan Kerosakan</a><br><br>
	<a href="semak.php"><i class="fa fa-file fa-2x"></i> Semak Status Aduan</a><br><br>
	<a href="bantuan.php"><i class="fa fa-file fa-2x"></i> Bantuan Teknikal</a><br><br>
</div>
<div class="footer">
	<p>Copy@right PASCORD PAPER INDUSTRIAN BERHAD (2020)</p>
</div>

</body>
</html>
