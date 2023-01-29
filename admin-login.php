<?php
session_start();
DATE_DEFAULT_TIMEZONE_SET('ASIA/MANILA');
require_once('activity_log/dbconnect.php');
if($_SERVER['REQUEST_METHOD']=='POST')
	{
if(isset($_POST['login']))
{
$user=trim($_POST['user']);
$user=htmlspecialchars($_POST['user']);
$password=trim($_POST['pass']);
$password=htmlspecialchars($_POST['pass']);

$sth=$conn->prepare("SELECT * FROM account WHERE user=:user");
$sth->execute(array(':user'=>htmlspecialchars($_POST['user'])));
$row=$sth->fetch(PDO::FETCH_ASSOC);
$count=$sth->rowCount();
if($count==1){

		$user = $row['user'];
		$pass = $row['pass'];
		$usertype = $row['usertype'];
    if($user == $user && $pass == $password){
    $_SESSION['user'] = $row['user_id'];
	$_SESSION['usertype'] = $row['usertype'];
	if($usertype == "admin"){
		$_SESSION['user'] = $row['user'];
		header('location: admin-dashboard.php');
	}
	elseif($usertype == "Aleman Falls") {
		header("location: user-dashboard.php");
	}elseif($usertype == "Ampere Beach") {
		header("location: user2-dashboard.php");
	}
	elseif($usertype == "Baul Falls") {
		header("location: user3-dashboard.php");
	}elseif($usertype == "Blue Bridge") {
		header("location: user4-dashboard.php");
	}elseif($usertype == "Diarabasin Beach") {
		header("location: user5-dashboard.php");
	}elseif($usertype == "Lipit Beach") {
		header("location: user7-dashboard.php");
	}elseif($usertype == "Pamwasan Cove") {
		header("location: user8-dashboard.php");
	}elseif($usertype == "Twin Cave") {
		header("location: user9-dashboard.php");
	}elseif($usertype == "Dinadiawan White Beach") {
		header("location: user10-dashboard.php");
	}
	else{
		header('location: index.php');
		exit();
	}

$user_status="online";
$stmt =$conn->prepare('UPDATE account SET
user_status=:user_status WHERE user_id=:user_id');
$stmt->bindParam(':user_status',$user_status);
$stmt->bindParam(':user_id',$_SESSION['user']);
$stmt->execute();	
	$time_logged =date("Y-m-d H:i:s",strtotime("now"));
	$stmt=$conn->prepare('INSERT into activity(time_logged,user_id)VALUES(?,?)');
	$stmt->bindparam(1,$time_logged);
	$stmt->bindparam(2,$_SESSION['user']);
	$stmt->execute();
		}
		}
	else
	{
		$_SESSION['msg']='something went wrong';
		}
	}
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>WOW Dipaculao</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        <?php
            include 'css/index.css';
        ?>
        </style>
  </head>
  <body>
    <div class="container">
        <div class="row main mt-5">
<div class="col-md-6 p-5" id="SignUp">
    <h1 class="display-4 text-center">Sign up</h1>
</div>
<div class="col-md-6 p-5" id="login">
<h1 class="display-4 text-center">Login</h1>
<form class="d-flex justify-content-center mt-4" method="POST">
<div class="w-75">
<div class="form-group">
    <h3><?php $message; ?></h3>
<label for="">Username</label>
<input type="text" name="user">
</div>
<div class="form-group my-4">
    <label for="">Password</label>
    <input type="password" name="pass">
</div>
    <button type="submit" name="login">Login</button>
    <div class="d-flex justify-content-between mt-5">
<a class="links" href="index.php" id="registerLink">Back to Home</a>
    </div>
</div>
</form>
</div>
<div id="overlay"></div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/login.js"></script>
  </body>
</html>