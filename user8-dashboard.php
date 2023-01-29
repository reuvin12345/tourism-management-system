<?php
session_start();
include 'connection.php';
$usertype = $_SESSION['usertype'];
$user = $_SESSION['user'];
if($usertype != "Pamwasan Cove") {
header("location: Errors/error.php");
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
    <link rel="stylesheet" href="Ampere/sidenav4.css">
    <script src="https://kit.fontawesome.com/f97605f981.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header">
    <div class="side-nav">
        <a href="user8-dashboard.php">
            <img src="Ampere/images/logo.png" logo="logo-img" style="width: 55%; margin-left: 27%; margin-bottom: 10%;" class="dashboard-logo">
            <center><p style="color: white; font-weight: bold; font-size: 30px; margin-bottom: 20%">Pamwasan Cove</p></center>
        </a>
        <ul class="nav-links">
            <li><a href="user8-dashboard.php"><i class="fa-solid fa-house mb-3"></i><p>Dashboard</p></a></li>
            <li><a href="Pamwasan/user8-register.php"><i class="fa-regular fa-user mb-3"></i><p>Register</p></a></li>
            <li><a href="Pamwasan/user8-restorepage.php"><i class="fa-solid fa-trash mb-3"></i><p>Restore</p></a></li>
            <li><a href="logout.php" class="logout"><i class="fa-solid fa-arrow-right-from-bracket mb-3"></i><p>Log Out</p></a></li>
            <div class="active"></div>
        </ul>
    </div>
    <div class="cards mt-4" style="margin-left: 24%;">
        <div class="row">
            <?php 
            include 'connection.php';
            $count_male = mysqli_query($con, "SELECT (SELECT SUM(male) FROM pamwasan) as male, 
                (SELECT SUM(other_male) FROM pamwasan) as male2");
            $row_count = mysqli_fetch_assoc($count_male);?>
            <div class="card text-bg-primary mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
            <div class="card-body">
                <center><h5 class="card-title">Male</h5></center>
                <h1><?php echo $gender1 = $row_count["male"] + $row_count['male2'];?></h1>
            </div>
            </div>
            <div class="card text-bg-danger mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
            <?php $count_female = mysqli_query($con, "SELECT (SELECT SUM(female) FROM pamwasan) as female, 
                (SELECT SUM(other_female) FROM pamwasan) as female2");
            $row_count = mysqli_fetch_assoc($count_female);?>
                <div class="card-body">
                <h5 class="card-title">Female</h5>
                <h1><?php echo $gender2 = $row_count["female"] + $row_count["female2"];?></h1>
                <p class="card-text"></p>
            </div>
            </div>
                <div class="card text-bg-success mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
                <?php $count_gender = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM pamwasan");
                $row_count = mysqli_fetch_assoc($count_gender);?>
                <div class="card-body">
                <h5 class="card-title">Foreign Male</h5>
                <h1><?php echo $nationality1 = $row_count["foreign_male"];?></h1>
                <p class="card-text"></p>
            </div>
            </div>
            </div>
            <div class="row">
                <div class="card text-bg-danger mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
                <?php $count_gender = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM pamwasan");
                $row_count = mysqli_fetch_assoc($count_gender);?>
                <div class="card-body">
                <h5 class="card-title">Foreign Female</h5>
                <h1><?php echo $nationality2 = $row_count["foreign_female"];?></h1>
                <p class="card-text"></p>
            </div>
            </div>
            <div class="card text-bg-warning mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
            <?php $count_male = mysqli_query($con, "SELECT (SELECT SUM(male) FROM pamwasan) as male, 
                (SELECT SUM(female) FROM pamwasan) as female,
                (SELECT SUM(other_female) FROM pamwasan) as other_female,
                (SELECT SUM(other_male) FROM pamwasan) as other_male,
                (SELECT SUM(foreign_female) FROM pamwasan) as foreign_female,
                (SELECT SUM(foreign_male) FROM pamwasan) as foreign_male");
                $row_count = mysqli_fetch_assoc($count_male);?>
                <div class="card-body">
                <h5 class="card-title"  style="color: white;">Total Visitors</h5>
                <h1 style="color: white;"><?php echo $row_count['male'] + $row_count['female'] + $row_count['foreign_female'] + $row_count['foreign_male'] + $row_count['other_male'] + $row_count['other_female'];?></h1>
            </div>
            </div>
            <hr class="sidebar-divider" style="color: black; width: 90%">
<div class="table-scroll" style="width: 97%;">
        <table class="table table-responsive table-hover">
        <?php
        $sql = " SELECT * FROM pamwasan";
        $result = mysqli_query($con, $sql);
        ?>
    <thead>
        <tr>
        <tr>
        <th colspan="2">This Municipality</th>
        <th colspan="2">Other Municipality</th>
        </tr>
        <th scope="col">Male</th>
        <th scope="col">Female</th>
        <th scope="col">Male</th>
        <th scope="col">Female</th>
        <th scope="col">Children</th>
        <th scope="col">Youth</th>
        <th scope="col">Adult</th>
        <th scope="col">Old</th>
        <th scope="col">Foreign</th>
        <th scope="col">Contact Number</th>
        <th scope="col">Date</th>
        <th scope="col">No.Visitors</th>
        <th scope="col">Edit/Delete</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
    <?php
        while($rows=$result->fetch_assoc())
        {
        ?>
            <tr>
            <td><?php echo $rows['male'];?></td>
            <td><?php echo $rows['female'];?></td>
            <td><?php echo $rows['other_male'];?></td>
            <td><?php echo $rows['other_female'];?></td>
            <td><?php echo $rows['children'];?></td>
            <td><?php echo $rows['youth'];?></td>
            <td><?php echo $rows['adult'];?></td>
            <td><?php echo $rows['old'];?></td>
            <td><?php echo $rows['foreign_male'] + $rows['foreign_female'];?></td>
            <td><?php echo $rows['contact'];?></td>
            <td><?php echo $rows['month']. " ".$rows['day']. "," .$rows['year'];?></td>
            <td><?php echo $rows['other_male'] + $rows['other_female'] + $rows['male'] + $rows['female'] + $rows['foreign_male'] + $rows['foreign_female'];?></td>
            <td><div class="buttons"><button class="btn btn-primary"><a  href="Pamwasan/user8-update.php?updateid=<?php echo $rows['id'];?>" style="text-decoration: none; color: white;">Edit</button></a>
        <button class="btn btn-danger mx-4"><a  href="Pamwasan/user8-delete.php?deleteid=<?php echo $rows['id'];?>" style="text-decoration: none; color: white;">Delete</a></td></div>
        </tr>
    <?php
        }
    ?>
    </tbody>
    </table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>