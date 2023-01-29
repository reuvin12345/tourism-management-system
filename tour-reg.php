<?php 
  $con = mysqli_connect('localhost', 'root', '', 'tourism');
  $user = "";
  if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
  	$user = $_POST['user'];
  	$pass = $_POST['pass'];

  	$sql_u = "SELECT * FROM `tour_reg` WHERE user='$user'";
  	$res_u = mysqli_query($con, $sql_u);
  	if (mysqli_num_rows($res_u) >=1) {
        header('location: login-user.php');
  	  $error = "Sorry... username already taken"; 	 	
  	}else{
           $query = "INSERT INTO `tour_reg` (`fname`,`user`, `pass`) 
      	    	  VALUES ('$fname', '$user', '$pass')";
           $results = mysqli_query($con, $query);
           header('location: login-user.php');
           exit();
  	}
  }
?>