<?php
session_start();
$con = mysqli_connect('localhost', 'root', '', 'tourism');
$id = $_GET['viewid'];
$sql = "SELECT * FROM `account` WHERE user_id = $id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/register.css">
    <link rel="stylesheet" href="qweqwe.css">
    <script src="https://kit.fontawesome.com/f97605f981.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <div class="side-nav">
    <img src="user/images/logo.png" logo="logo-img" style="width: 45%; margin-left: 27%; margin-bottom: 10%;" class="dashboard-logo">
    <center><p style="color: white; font-weight: bold; font-size: 18px; margin-bottom: 6%">Dipaculao Tourism Office</p></center>
</a>
        <ul class="nav-links">
            <li><a href="admin-dashboard.php"><i class="fa-solid fa-house mb-3"></i><p>Dashboard</p></a></li>
            <li><a href="admin-register.php"><i class="fas fa-user-plus mb-3"></i><p>Register</p></a></li>
            <li><a href="admin-account.php"><i class="fas fa-user-alt mb-3"></i><p>Accounts</p></a></li>
            <li><a href="admin-backup.php"><i class="fas fa-database mb-3"></i><p>Backup</p></a></li>
            <li><a href="admin-restore.php"><i class="fa-solid fa-trash mb-3"></i><p>Restore</p></a></li>
            <li><a href="logout.php" class="logout"><i class="fa-solid fa-arrow-right-from-bracket mb-3"></i><p>Log Out</p></a></li>
            <div class="active"></div>
        </ul>
    </div>
        <form method="POST">
            <h1>Staff Account</h1>
            <?php
                $res = "SELECT * FROM `account`";
                $query = mysqli_query($con, $res);
            ?>
            <h2>Username: <?php echo $row['user'];?> </h2>
            <h2>Password: <?php echo $row['pass'];?> </h2>
            <h2>Location: <?php echo $row['usertype']; ?></h2>
            
            <button class="btn btn-primary"><a  href="admin-update.php?updateid=<?php echo $row['user_id'];?>" style="text-decoration: none; color: white;">Edit</button><button class="btn btn-primary" style="margin-left: 5%;"><a  href="admin-account.php" style="text-decoration: none; color: white;">Back</button>
        </form>
</body>
</html>