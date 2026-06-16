<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
	define('DB_SERVER', 'localhost');
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'aduan');
 
/* Attempt to connect to MySQL database */
	$link = mysqli_connect("localhost", "root", "", "aduan");
 
// Check connection
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
}
//session_start();
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "aduan"; /* Database name */

//to add data
if(isset($_POST['submit']))
{
$tarikhmasa=$_POST['tarikhmasa'];
$namapelapor=$_POST['namapelapor'];
$bahagian=$_POST['bahian'];
$pejsektorunik=$_POST['pejsektorunik'];
$aras=$_POST['aras'];
$blok=$_POST['blok'];
$nophone=$_POST['nophone'];
$email=$_POST['email'];
$JPK=$_POST['JPK'];
$JP=$_POST['JP'];
$jenama=$_POST['jenama'];
$model=$_POST['model'];
$butiran=$_POST['butiran'];
$keterangan=$_POST['keterangan'];

$query="insert into  logpelapor(tarikhmasa,namapelapor,bahagian,pejsektorunik,aras,blok,onphone,email,JPK,JP,jenama,model,butiran,keterangan) values($tarikhmasa,$namapelapor,$bahagian,$pejsektorunik,$aras,$blok,$nophone,$email,$JPK,$JP,$jenama,$model,$butiran,$keterangan)";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('isssssissssss',$tarikhmasa,$namapelapor,$bahagian,$pejsektorunik,$aras,$blok,$nophone,$email,$JPK,$JP,$jenama,$model,$butiran,$keterangan);
$stmt->execute();
echo"<script>alert('Student Succssfully logaduan');</script>";
}
?>