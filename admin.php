<?php
include 'login.php';
if(isset($_SESSION['usertype']) == "admin"){
    $user = $_SESSION['user'];
    $usertype = $_SESSION['usertype'];
    header('location: admin-dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System</title>
    <link rel="stylesheet" href="user/style.css">
</head>
<body>
    <form method="POST" action="login.php">
        <?php
        echo $message
        ?>
        <center><span class="tis">Tourism Information System</span></center>
        <div class="form-marg">
            <div class="user-box">
            <input type="text" name="user" placeholder="Username"><br>
        </div>
        <input type="password" name="pass" placeholder="Password"><br>
        <button type="submit" name="login-btn" class="submit">Submit</button>
        </div>
    </form>
</body>
</html>