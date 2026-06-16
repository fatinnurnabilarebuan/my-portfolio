<?php
require_once "config.php";
?>
<?php

session_start();

if(isset($_SESSION['role']))
{
	if($_SESSION['role'] != 'Admin')
	{
		header('Location: admin.php');
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
	text-align: center;
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
<p><i>SELAMAT DATANG</i></p>
<div id="clockbox"></div>
				
			<script type="text/javascript">
				var tday=["AHAD","ISNIN","SELASE","RABU","KHAMIS","JUMAAT","SABTU"];
				var tmonth=["January","February","March","April","May","June","July","August","September","October","November","December"];

				function GetClock(){
				var d=new Date();
				var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
				var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

				if(nhour==0){ap=" AM";nhour=12;}
				else if(nhour<12){ap=" AM";}
				else if(nhour==12){ap=" PM";}
				else if(nhour>12){ap=" PM";nhour-=12;}

				if(nmin<=9) nmin="0"+nmin;
				if(nsec<=9) nsec="0"+nsec;

				var clocktext=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
				document.getElementById('clockbox').style.color= '#000000';
				document.getElementById('clockbox').style.float= 'center';
				document.getElementById('clockbox').style.padding= '0 0 15 15px';
				document.getElementById('clockbox').style.margin= '0 75px';
				document.getElementById('clockbox').innerHTML=clocktext;
				}

				GetClock();
				setInterval(GetClock,1000);
			</script><br>
			<p align="left">Sistem ini digunakan untuk mengetahui masalah yang dihadapi oleh pengguna. Contoh masalah seperti masalah yang berkaitan dengan komputer seperti masalah papan kekunci, tetikus, internet dan lain-lain lagi</p>
			<p align="left">Selain itu, sistem ini dapat merekodkan data, kemaskini data, dan buang data.</p>
</div>
			
</body>
</html>