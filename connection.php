<!--berhubung dengan phpmyadmin-->
<?php

$conn = mysqli_connect("localhost","root","","aduan");

if(!$conn)
{
	echo "connection is not successfull"; 
}
 
?>