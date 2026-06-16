<!--berhubung dengan page index.php-->
<?php
session_start();
require_once "connection.php";
//login user dan admin
$message =""; 
$role ="";
if(isset($_POST["btnlogin"]))
{
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	$query = "SELECT * FROM tbluser WHERE Username='$username' AND Password='$password'";
	$result = mysqli_query($conn,$query);
	//page admin atau page user
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			if($row["Role"] == "Admin")
			{
				$_SESSION['LoginUser'] = $row["Username"];
				$_SESSION['role'] = $row["Role"];
				header('Location:admin.php');
			}
			else
			{
				$_SESSION['LoginUser'] = $row["Username"];
				$_SESSION['role'] = $row["Role"];
				header('Location:user.php');
			}
		}
	}
	else
	{
		header("Location : index.php");
	}
}
?>