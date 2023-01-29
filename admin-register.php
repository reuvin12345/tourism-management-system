<?php
session_start();
if($_SESSION['usertype'] != "admin"){
    header("location: user-register.php");
}elseif($_SESSION['usertype'] != "admin"){
    header("location: user10-register.php");
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
    <title>Tourism Management System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin/register.css">
    <link rel="stylesheet" href="eee.css">
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
<form method="POST" action="registration.php">
    <h1>Staff Registration Form</h1>
    <?php 
    $conn = new mysqli('localhost', 'root', '', 'tourism');
    $query ="SELECT usertype FROM usertype";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>
    <select name="usertype" id="usertype" class="form-select" aria-label="Default select example" style="width: 30%;" required><br>
  <?php 
  foreach ($options as $option) {
  ?>
    <option><?php echo $option['usertype']; ?> </option>
    <?php 
    }
   ?><br><br>
  <input type="text" placeholder="Username" name="user"><br>
  <input type="password" placeholder="Password" name="pass"></br>
  <button type="submit" class="btn btn-primary" name="sub">Submit</button><button type="reset" class="btn btn-primary mx-4">Reset</submit><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" class="add">
  Add Spot
</button>
</form>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel" >Add Tourist Spot</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="add_dest.php" method="POST">
        <div class="form-input" style="margin-left: -68%; margin-top: -10%;">
            <label for="exampleInputEmail1" class="form-label">New Tourist Spot</label>
            <input type="text" name="usertype" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>