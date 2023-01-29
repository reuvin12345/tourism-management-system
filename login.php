<?php
$con = new mysqli('localhost', 'root', '', 'tourism');
session_start();
$message = "";
if(isset($_POST['login-btn'])){

	$username = $_POST['user'];
	$password = $_POST['pass'];

	$sql = "SELECT * FROM account WHERE user = '$username' && pass = '$password'";
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
				header('location: admin-dashboard.php');
				exit();
			}
			elseif($usertype == "Aleman Falls") {
				header("location: user-dashboard.php");
				exit();
			}elseif($usertype == "Ampere Beach") {
				header("location: user2-dashboard.php");
				exit();
			}
			elseif($usertype == "Baul Falls") {
				header("location: user3-dashboard.php");
				exit();
			}
			elseif($usertype == "Blue Bridge") {
				header("location: user4-dashboard.php");
				exit();
			}elseif($usertype == "Diarabasin Beach") {
				header("location: user5-dashboard.php");
				exit();
			}elseif($usertype == "Lipit Beach") {
				header("location: user7-dashboard.php");
				exit();
			}elseif($usertype == "Pamwasan Cove") {
				header("location: user8-dashboard.php");
				exit();
			}elseif($usertype == "Twin Cave") {
				header("location: user9-dashboard.php");
				exit();
			}elseif($usertype == "Dinadiawan White Beach") {
				header("location: user10-dashboard.php");
				exit();
			}
			else{
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