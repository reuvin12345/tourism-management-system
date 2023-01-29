<?php   
$con = new mysqli('localhost', 'root', '', 'tourism');
if (isset($_GET['restoreid'])) {  
      $id = $_GET['restoreid'];  
      $query = "INSERT INTO account (user, pass, usertype, user_id) 
      SELECT user, pass, usertype,user_id  
      FROM trash WHERE user_id = '$id'";
      $query2 = "DELETE FROM trash WHERE user_id = '$id'";
      $run = mysqli_query($con,$query);  
      $run2 = mysqli_query($con,$query2);
      if ($run) {
           header('location: admin-restore.php');  
     }else{  
           header('location: admin-account.php');  
      }  
     }


 ?>  