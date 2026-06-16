<?php
	//berhubung dengan database
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'aduan');
	
	//initialize variables
	$count 				= "";
	$soalan 				= "";
	$update 			= false;
?>