<?php 
  $con = mysqli_connect('localhost', 'root', '', 'tourism');
  $user = "";
  if (isset($_POST['reg-btn'])) {
  	$user = $_POST['user'];
  	$usertype = $_POST['usertype'];
  	$pass = $_POST['pass'];

  	$sql_u = "SELECT * FROM `account` WHERE user='$user'";
  	$res_u = mysqli_query($con, $sql_u);

  	if (mysqli_num_rows($res_u) > 0) {
        header('location: admin-register.php');
  	  $error = "Sorry... username already taken";
  	}else{
           $query = "INSERT INTO `account` (`user`,`pass`, `usertype`) 
      	    	  VALUES ('$user', '$pass', '$usertype')";
			$query2 = "INSERT INTO `trash` (`user`,`pass`, `usertype`) 
			VALUES ('$user', '$pass', '$usertype')";
			$result = mysqli_query($con, $query2);
           $results = mysqli_query($con, $query);
           header('location: admin-dashboard.php');
  	}
  }
?>