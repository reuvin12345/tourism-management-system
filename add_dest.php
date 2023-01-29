<?php
    $con = new mysqli('localhost', 'root', '', 'tourism');
    $usertype = $_POST['usertype'];
    $sql = "INSERT INTO `usertype`(`usertype`) VALUES ('$usertype')";
    $query = mysqli_query($con, $sql);

    if($query) {
        header('location: admin-register.php');
    }else{
        echo 'Connection Failed!';
    }
?>