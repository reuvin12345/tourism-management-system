<?php
DATE_DEFAULT_TIMEZONE_SET('ASIA/MANILA');
require('activity_log/dbconnect.php');

session_start();
$sth=$conn->prepare("SELECT * FROM account WHERE user_id= ?");
$sth->execute(array(
$_SESSION['user'])
);
$row=$sth->fetch(PDO::FETCH_ASSOC);
$count=$sth->rowCount();
$user_id=$row['user_id'];

$user_status="offline";
		$stmt=$conn->prepare('UPDATE account SET user_status=:tt where user_id=:uid');
		$stmt->bindparam(':tt',$user_status);
		$stmt->bindparam(':uid',$user_id);
		$stmt->execute();
		
unset($_SESSION['user']);
	
	if(session_destroy())
	{
		header("Location: index.php");
		
	}
?>






