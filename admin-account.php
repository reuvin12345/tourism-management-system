<?php
session_start();
include 'connection.php';
if($_SESSION['usertype'] != "admin"){
    header("location: user-dashboard.php");
}
if(isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $usertype = $_SESSION['usertype'];
}else {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Information System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="eee.css">
    <script src="https://kit.fontawesome.com/f97605f981.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <div class="side-nav">
        <a href="admin-dashboard.php">
            <img src="admin/images/logo.png" logo="logo-img" style="width: 45%; margin-left: 27%; margin-bottom: 10%;" class="dashboard-logo">
            <center><p style="color: white; font-weight: bold; font-size: 18px; margin-bottom: 6%">Dipaculao Tourism Office</p></center>
        </a>
        <ul class="nav-links">
            <li><a href="admin-dashboard.php"><i class="fa-solid fa-house mb-3"></i><p>Dashboard</p></a></li>
            <li><a href="admin_homepage/admin-homepage.php"><i class="fa-solid fa-globe mb-3"></i><p>Homepage</p></a></li>
            <li><a href="activity.php"><i class="fas fa-user-alt mb-3"></i><p>Activity Log</p></a></li>
            <li><a href="admin-restore.php"><i class="fas fa-database mb-3"></i><p>Backup & Restore</p></a></li>
            <li><a href="admin-register.php"><i class="fas fa-user-plus mb-3"></i><p>Register</p></a></li>
            <li><a href="admin-account.php"><i class="fas fa-user-alt mb-3"></i><p>Accounts</p></a></li>
            <li><a href="logout.php" class="logout"><i class="fa-solid fa-arrow-right-from-bracket mb-3"></i><p>Log Out</p></a></li>
            <div class="active"></div>
        </ul>
    </div>
    <center><div class="table-account" style="width:50%; margin-left: 10%;" >
        <h3>Staff Account</h3>
        <table class="table table-responsive table-hover">
    <thead>
        <tr>
        <th scope="col">UserName</th>
        <th scope="col">Password</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <?php 
        $sql = mysqli_query($con, "SELECT * FROM `account`");
                while ($row = mysqli_fetch_assoc($sql)) { 
        ?>
        <tr>   
            <td><?php echo $row['user'];?></td>
            <td><?php echo $row['pass'];?></td>
            <td><div class="buttons"><button class="btn btn-primary"><a  href="view.php?viewid=<?php echo $row['user_id'];?>" style="text-decoration: none; color: white;">View</button></a>
            <button class="btn btn-danger mx-4"><a  href="admin-delete (2).php?deleteid=<?php echo $row['user_id'];?>" style="text-decoration: none; color: white;" name="delete">Delete</a></td></div>
        </td>
        </tr>
        <?php }
        ?>
    </tbody>
    </table></center>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>