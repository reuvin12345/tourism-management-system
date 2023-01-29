<?php
DATE_DEFAULT_TIMEZONE_SET('ASIA/MANILA');
require("activity_log/dbconnect.php");
error_reporting(~E_NOTICE);
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
if(isset($_POST['sub']))
{
$user=trim($_POST['user']);
$user=htmlspecialchars($_POST['user']);
$pass=trim($_POST['pass']);
$pass=htmlspecialchars($_POST['pass']);
$usertype = $_POST['usertype'];
$user_status='offline';
$time_joined =date("Y-m-d H:i:s",strtotime("now"));
$date_joined =date("Y-m-d", strtotime("now"));

$sth=$conn->prepare("INSERT into  account(user,pass,usertype,user_status,time_joined,date_joined)VALUES(?,?,?,?,?,?)");
$sth->bindparam(1,$user,PDO::PARAM_STR);
$sth->bindparam(2,$pass,PDO::PARAM_STR);
$sth->bindparam(3,$usertype,PDO::PARAM_STR);
$sth->bindparam(4,$user_status,PDO::PARAM_STR);
$sth->bindparam(5,$time_joined,PDO::PARAM_STR);
$sth->bindparam(6,$date_joined,PDO::PARAM_STR);
if($sth->execute())
{
header("refresh:1;admin-dashboard.php");
                                }
                     }
          }
?>