<?php
$con = new mysqli('localhost', 'root', '', 'tourism');
session_start();
$message = "";
if(isset($_POST['login'])){

	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "SELECT * FROM tour_reg WHERE user = '$username' && pass = '$password'";
	$result = mysqli_query($con, $sql);

	if($result -> num_rows >= 0){
		$row = mysqli_fetch_assoc($result);

		$user = $row['user'];
		$pass = $row['pass'];
		$usertype = $row['usertype'];

		if($user == $username && $pass == $password){
			$_SESSION['user'] = $row['user'];
			$_SESSION['usertype'] = $row['usertype'];
			if($usertype == "admin"){
				$_SESSION['user'] = $row['user'];
				header('location: admin_homepage/admin-homepage.php');
				exit();
			}else{
				header('location: index.php');
				exit();
			}
		}
		else {
			header('location: index.php');
			exit();
		}
	}
	}
?>