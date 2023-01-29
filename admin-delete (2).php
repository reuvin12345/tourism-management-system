<?php   
$con = new mysqli('localhost', 'root', '', 'tourism');
 if (isset($_GET['deleteid'])) { 
     $id = $_GET['deleteid'];
      $query = "DELETE FROM  `account` WHERE user_id = '$id'";
      $run = mysqli_query($con,$query);  
      if ($run) {  
           header('location:admin-account.php');  
      }else{  
           echo "Error: ".mysqli_error($con);  
      }  
 }  
 ?>  