<?php
session_start();
$con = new mysqli('localhost', 'root', '', 'tourism');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourism Office
    Municipality of Dipaculao</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/register.css">
    <link rel="stylesheet" href="filter1.css">
    <script src="https://kit.fontawesome.com/f97605f981.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <div class="side-nav">
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
	<div class="filter" style="overflow-x: scroll;">
	<?php
		include 'filter.php';
	?>
	</div>
</div>
</body>
</html>