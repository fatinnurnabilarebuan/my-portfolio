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
#data{
	height:474px;
	background : #47a56a;
	color: black;
	font-size: 24px;
	font-family: arial;
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
/*logo*/
#adminlogo{
	width: 250px;
	height: 150px;
}
/*btn*/
.container{
	text-align: center;
	margin-top: 100px;
	float: left;
	padding-left: 10px;
}
.btn{									/*design button Masalah saya tidak boleh melayari internet, Masalah komputer loading mengambil masa yang lama untuk siap loading sesuatu page atau website*/
	border: 1px solid #3498db;
	background: none;
	padding: 10px 20px;
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
.btn1:hover,.btn2:hover{
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
	<li><a href="">Kemaskina Jenis Bantuan</a>
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
<div id="data"><br>
<center><h3>Virus</h3></center>
<div class="container">
	<form action="mvirus_admin.php" method="post">
	<button class="btn btn1" type="submit" name="button">Masalah komputer sering di serang virus</button>
	</form>
	</div>
</div>
			
</body>
</html>