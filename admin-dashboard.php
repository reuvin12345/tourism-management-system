<?php
session_start();
include 'connection.php';
if($_SESSION['usertype'] != "admin"){
    header('location: Errors/error.php');
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
    <div class="cards mt-4" style="margin-left: 24%;" id="cards">
        <div class="row">
            <?php
            $con = new mysqli('localhost', 'root', '', 'tourism');
            $count_male = mysqli_query($con, "SELECT (SELECT SUM(male) FROM aleman) as male, 
            (SELECT SUM(male) FROM dinadiawanview) as male1,
            (SELECT SUM(male) FROM ampere) as male2,
            (SELECT SUM(male) FROM baul_falls) as male3,
            (SELECT SUM(male) FROM blue_bridge) as male4,
            (SELECT SUM(male) FROM diarabasin) as male5,
            (SELECT SUM(male) FROM lipit) as male6,
            (SELECT SUM(male) FROM pamwasan) as male7,
            (SELECT SUM(male) FROM tw) as male8,
            (SELECT SUM(other_male) FROM aleman) as other_male, 
            (SELECT SUM(other_male) FROM dinadiawanview) as other_male1,
            (SELECT SUM(other_male) FROM ampere) as other_male2,
            (SELECT SUM(other_male) FROM baul_falls) as other_male3,
            (SELECT SUM(other_male) FROM blue_bridge) as other_male4,
            (SELECT SUM(other_male) FROM diarabasin) as other_male5,
            (SELECT SUM(other_male) FROM lipit) as other_male6,
            (SELECT SUM(other_male) FROM pamwasan) as other_male7,
            (SELECT SUM(other_male) FROM tw) as other_male8");
            $row_count = mysqli_fetch_assoc($count_male);?>
            <div class="card text-bg-primary mb-3 mx-4" style="max-width: 15rem; height: 7rem;" id="cards-body">
            <div class="card-body">
                <center><h5 class="card-title">Male</h5></center>
                <h1><?php echo $row_count['male'] + 
                $row_count['male1'] + 
                $row_count['male2'] + 
                $row_count['male3'] + 
                $row_count['male4'] + 
                $row_count['male5'] + 
                $row_count['male6'] + 
                $row_count['male7'] + 
                $row_count['male8'] +
                $row_count['other_male'] + 
                $row_count['other_male1'] + 
                $row_count['other_male2'] + 
                $row_count['other_male3'] + 
                $row_count['other_male4'] + 
                $row_count['other_male5'] + 
                $row_count['other_male6'] + 
                $row_count['other_male7'] + 
                $row_count['other_male8'];?></h1>
                <p class="card-text"></p>
            </div>
            </div>
            <div class="card text-bg-danger mb-3 mx-4" style="max-width: 15rem; height: 7rem;"> 
            <?php $count_female = mysqli_query($con, "SELECT (SELECT SUM(female) FROM aleman) as female, 
            (SELECT SUM(female) FROM dinadiawanview) as female1,
            (SELECT SUM(female) FROM ampere) as female2,
            (SELECT SUM(female) FROM baul_falls) as female3,
            (SELECT SUM(female) FROM blue_bridge) as female4,
            (SELECT SUM(female) FROM diarabasin) as female5,
            (SELECT SUM(female) FROM lipit) as female6,
            (SELECT SUM(female) FROM pamwasan) as female7,
            (SELECT SUM(female) FROM tw) as female8,
            (SELECT SUM(other_female) FROM aleman) as other_female, 
            (SELECT SUM(other_female) FROM dinadiawanview) as other_female1,
            (SELECT SUM(other_female) FROM ampere) as other_female2,
            (SELECT SUM(other_female) FROM baul_falls) as other_female3,
            (SELECT SUM(other_female) FROM blue_bridge) as other_female4,
            (SELECT SUM(other_female) FROM diarabasin) as other_female5,
            (SELECT SUM(other_female) FROM lipit) as other_female6,
            (SELECT SUM(other_female) FROM pamwasan) as other_female7,
            (SELECT SUM(other_female) FROM tw) as other_female8");
            $row_count = mysqli_fetch_assoc($count_female);?>
                <div class="card-body">
                <h5 class="card-title">Female</h5>
                <h1><?php echo $row_count['female'] + 
                $row_count['female1']+ 
                $row_count['female2']+ 
                $row_count['female3']+ 
                $row_count['female4']+ 
                $row_count['female5']+ 
                $row_count['female6']+ 
                $row_count['female7']+ 
                $row_count['female8'] +
                $row_count['other_female'] + 
                $row_count['other_female1']+ 
                $row_count['other_female2']+ 
                $row_count['other_female3']+ 
                $row_count['other_female4']+ 
                $row_count['other_female5']+ 
                $row_count['other_female6']+ 
                $row_count['other_female7']+ 
                $row_count['other_female8'];?></h1>
                <p class="card-text"></p>
            </div>
            </div>
                <div class="card text-bg-success mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
                <?php $count_nationality = mysqli_query($con, "SELECT 
                (SELECT SUM(foreign_male) FROM aleman) as foreign_male, 
                (SELECT SUM(foreign_male) FROM dinadiawanview) as foreign_male1, 
                (SELECT SUM(foreign_male) FROM ampere) as foreign_male3, 
                (SELECT SUM(foreign_male) FROM baul_falls) as foreign_male4, 
                (SELECT SUM(foreign_male) FROM blue_bridge) as foreign_male5, 
                (SELECT SUM(foreign_male) FROM diarabasin) as foreign_male6, 
                (SELECT SUM(foreign_male) FROM lipit) as foreign_male7, 
                (SELECT SUM(foreign_male) FROM pamwasan) as foreign_male8, 
                (SELECT SUM(foreign_male) FROM tw) as foreign_male9");
            $row_count = mysqli_fetch_assoc($count_nationality); ?>
                <div class="card-body">
                <h5 class="card-title">Foreign Male</h5>
                <h1><?php echo $row_count['foreign_male'] + 
                $row_count['foreign_male1'] + 
                $row_count['foreign_male3'] + 
                $row_count['foreign_male4'] + 
                $row_count['foreign_male5'] + 
                $row_count['foreign_male6'] + 
                $row_count['foreign_male7'] + 
                $row_count['foreign_male8'] + 
                $row_count['foreign_male9']?></h1>
                <p class="card-text"></p>
            </div>
            </div>
            </div>
            <div class="row">
            <div class="card text-bg-success mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
                <?php $count_nationality = mysqli_query($con, "SELECT 
                (SELECT SUM(foreign_female) FROM aleman) as foreign_female, 
                (SELECT SUM(foreign_female) FROM dinadiawanview) as foreign_female1, 
                (SELECT SUM(foreign_female) FROM ampere) as foreign_female3, 
                (SELECT SUM(foreign_female) FROM baul_falls) as foreign_female4, 
                (SELECT SUM(foreign_female) FROM blue_bridge) as foreign_female5, 
                (SELECT SUM(foreign_female) FROM diarabasin) as foreign_female6, 
                (SELECT SUM(foreign_female) FROM lipit) as foreign_female7, 
                (SELECT SUM(foreign_female) FROM pamwasan) as foreign_female8, 
                (SELECT SUM(foreign_female) FROM tw) as foreign_female9");
            $row_count = mysqli_fetch_assoc($count_nationality); ?>
                <div class="card-body">
                <h5 class="card-title">Foreign Female</h5>
                <h1><?php echo $row_count['foreign_female'] + 
                $row_count['foreign_female1'] + 
                $row_count['foreign_female3'] + 
                $row_count['foreign_female4'] + 
                $row_count['foreign_female5'] + 
                $row_count['foreign_female6'] + 
                $row_count['foreign_female7'] + 
                $row_count['foreign_female8'] + 
                $row_count['foreign_female9']?></h1>
                <p class="card-text"></p>
            </div>
            </div>
                <div class="card text-bg-danger mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
                <?php $count_nationality = mysqli_query($con, "SELECT 
                (SELECT SUM(female) FROM aleman) as female, 
                (SELECT SUM(female) FROM dinadiawanview) as female1, 
                (SELECT SUM(female) FROM ampere) as female3, 
                (SELECT SUM(female) FROM baul_falls) as female4, 
                (SELECT SUM(female) FROM blue_bridge) as female5, 
                (SELECT SUM(female) FROM diarabasin) as female6, 
                (SELECT SUM(female) FROM lipit) as female7, 
                (SELECT SUM(female) FROM pamwasan) as female8, 
                (SELECT SUM(female) FROM tw) as female9,
                (SELECT SUM(male) FROM aleman) as male, 
                (SELECT SUM(male) FROM dinadiawanview) as male1, 
                (SELECT SUM(male) FROM ampere) as male3, 
                (SELECT SUM(male) FROM baul_falls) as male4, 
                (SELECT SUM(male) FROM blue_bridge) as male5, 
                (SELECT SUM(male) FROM diarabasin) as male6, 
                (SELECT SUM(male) FROM lipit) as male7, 
                (SELECT SUM(male) FROM pamwasan) as male8, 
                (SELECT SUM(male) FROM tw) as male9,
                (SELECT SUM(other_male) FROM aleman) as other_male, 
                (SELECT SUM(other_male) FROM dinadiawanview) as other_male1, 
                (SELECT SUM(other_male) FROM ampere) as other_male3, 
                (SELECT SUM(other_male) FROM baul_falls) as other_male4, 
                (SELECT SUM(other_male) FROM blue_bridge) as other_male5, 
                (SELECT SUM(other_male) FROM diarabasin) as other_male6, 
                (SELECT SUM(other_male) FROM lipit) as other_male7, 
                (SELECT SUM(other_male) FROM pamwasan) as other_male8, 
                (SELECT SUM(other_male) FROM tw) as other_male9, 
                (SELECT SUM(other_female) FROM aleman) as other_female, 
                (SELECT SUM(other_female) FROM dinadiawanview) as other_female1, 
                (SELECT SUM(other_female) FROM ampere) as other_female3, 
                (SELECT SUM(other_female) FROM baul_falls) as other_female4, 
                (SELECT SUM(other_female) FROM blue_bridge) as other_female5, 
                (SELECT SUM(other_female) FROM diarabasin) as other_female6, 
                (SELECT SUM(other_female) FROM lipit) as other_female7, 
                (SELECT SUM(other_female) FROM pamwasan) as other_female8, 
                (SELECT SUM(other_female) FROM tw) as other_female9");
            $row_count = mysqli_fetch_assoc($count_nationality); ?>
                <div class="card-body">
                <h5 class="card-title">Local</h5>
                <h1><?php echo $row_count['female'] + 
                $row_count['female1'] + 
                $row_count['female3'] + 
                $row_count['female4'] + 
                $row_count['female5'] + 
                $row_count['female6'] + 
                $row_count['female7'] + 
                $row_count['female8'] + 
                $row_count['female9'] +
                $row_count['male'] +
                $row_count['male1'] + 
                $row_count['male3'] + 
                $row_count['male4'] + 
                $row_count['male5'] + 
                $row_count['male6'] + 
                $row_count['male7'] + 
                $row_count['male8'] + 
                $row_count['male9'] +
                $row_count['other_male'] +
                $row_count['other_male1'] + 
                $row_count['other_male3'] + 
                $row_count['other_male4'] + 
                $row_count['other_male5'] + 
                $row_count['other_male6'] + 
                $row_count['other_male7'] + 
                $row_count['other_male8'] + 
                $row_count['other_male9'] +
                $row_count['other_female'] +
                $row_count['other_female1'] + 
                $row_count['other_female3'] + 
                $row_count['other_female4'] + 
                $row_count['other_female5'] + 
                $row_count['other_female6'] + 
                $row_count['other_female7'] + 
                $row_count['other_female8'] + 
                $row_count['other_female9'];?></h1>
                <p class="card-text"></p>
            </div>
            </div>
            <div class="card text-bg-warning mb-3 mx-4" style="max-width: 15rem; height: 7rem;">
            <?php $count_visitor = mysqli_query($con, "SELECT 
                (SELECT SUM(male) FROM aleman) as visitor, 
                (SELECT SUM(male) FROM dinadiawanview) as visitor1, 
                (SELECT SUM(male) FROM ampere) as visitor2, 
                (SELECT SUM(male) FROM baul_falls) as visitor3, 
                (SELECT SUM(male) FROM blue_bridge) as visitor4, 
                (SELECT SUM(male) FROM diarabasin) as visitor5, 
                (SELECT SUM(male) FROM lipit) as visitor6, 
                (SELECT SUM(male) FROM pamwasan) as visitor7, 
                (SELECT SUM(male) FROM tw) as visitor8, 
                (SELECT SUM(female) FROM aleman) as visitor9, 
                (SELECT SUM(female) FROM dinadiawanview) as visitor10, 
                (SELECT SUM(female) FROM ampere) as visitor11, 
                (SELECT SUM(female) FROM baul_falls) as visitor12, 
                (SELECT SUM(female) FROM blue_bridge) as visitor13, 
                (SELECT SUM(female) FROM diarabasin) as visitor14, 
                (SELECT SUM(female) FROM lipit) as visitor15, 
                (SELECT SUM(female) FROM pamwasan) as visitor16, 
                (SELECT SUM(female) FROM tw) as visitor17, 
                (SELECT SUM(other_female) FROM aleman) as visitor18, 
                (SELECT SUM(other_female) FROM dinadiawanview) as visitor19, 
                (SELECT SUM(other_female) FROM ampere) as visitor20, 
                (SELECT SUM(other_female) FROM baul_falls) as visitor21, 
                (SELECT SUM(other_female) FROM blue_bridge) as visitor22, 
                (SELECT SUM(other_female) FROM diarabasin) as visitor23, 
                (SELECT SUM(other_female) FROM lipit) as visitor24, 
                (SELECT SUM(other_female) FROM pamwasan) as visitor25, 
                (SELECT SUM(other_female) FROM tw) as visitor26, 
                (SELECT SUM(other_male) FROM aleman) as visitor27, 
                (SELECT SUM(other_male) FROM dinadiawanview) as visitor28, 
                (SELECT SUM(other_male) FROM ampere) as visitor29, 
                (SELECT SUM(other_male) FROM baul_falls) as visitor30, 
                (SELECT SUM(other_male) FROM blue_bridge) as visitor31, 
                (SELECT SUM(other_male) FROM diarabasin) as visitor32, 
                (SELECT SUM(other_male) FROM lipit) as visitor33, 
                (SELECT SUM(other_male) FROM pamwasan) as visitor34, 
                (SELECT SUM(other_male) FROM tw) as visitor35,
                (SELECT SUM(foreign_male) FROM aleman) as visitor36, 
                (SELECT SUM(foreign_male) FROM dinadiawanview) as visitor37, 
                (SELECT SUM(foreign_male) FROM ampere) as visitor38, 
                (SELECT SUM(foreign_male) FROM baul_falls) as visitor39, 
                (SELECT SUM(foreign_male) FROM blue_bridge) as visitor40, 
                (SELECT SUM(foreign_male) FROM diarabasin) as visitor41, 
                (SELECT SUM(foreign_male) FROM lipit) as visitor42, 
                (SELECT SUM(foreign_male) FROM pamwasan) as visitor43, 
                (SELECT SUM(foreign_male) FROM tw) as visitor44, 
                (SELECT SUM(foreign_female) FROM aleman) as visitor45, 
                (SELECT SUM(foreign_female) FROM dinadiawanview) as visitor46, 
                (SELECT SUM(foreign_female) FROM ampere) as visitor47, 
                (SELECT SUM(foreign_female) FROM baul_falls) as visitor48, 
                (SELECT SUM(foreign_female) FROM blue_bridge) as visitor49, 
                (SELECT SUM(foreign_female) FROM diarabasin) as visitor50, 
                (SELECT SUM(foreign_female) FROM lipit) as visitor51, 
                (SELECT SUM(foreign_female) FROM pamwasan) as visitor52, 
                (SELECT SUM(foreign_female) FROM tw) as visitor53");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
                <div class="card-body">
                <h5 class="card-title"  style="color: white;">Total Visitors</h5>
                <h1 style="color: white;"><?php echo 
                $row_count['visitor'] +
                 $row_count['visitor1'] +
                 $row_count['visitor2'] +
                 $row_count['visitor3'] +
                 $row_count['visitor4'] +
                 $row_count['visitor5'] +
                 $row_count['visitor6'] +
                 $row_count['visitor7'] +
                 $row_count['visitor8'] +
                 $row_count['visitor9'] +
                 $row_count['visitor10'] +
                 $row_count['visitor11'] +
                 $row_count['visitor12'] +
                 $row_count['visitor13'] +
                 $row_count['visitor14'] +
                 $row_count['visitor15'] +
                 $row_count['visitor16'] +
                 $row_count['visitor17'] +
                 $row_count['visitor18'] +
                 $row_count['visitor19'] +
                 $row_count['visitor20'] +
                 $row_count['visitor21'] +
                 $row_count['visitor22'] +
                 $row_count['visitor23'] +
                 $row_count['visitor24'] +
                 $row_count['visitor25'] +
                 $row_count['visitor26'] +
                 $row_count['visitor27'] +
                 $row_count['visitor28'] +
                 $row_count['visitor29'] +
                 $row_count['visitor30'] +
                 $row_count['visitor31'] +
                 $row_count['visitor32'] +
                 $row_count['visitor33'] +
                 $row_count['visitor34'] +
                 $row_count['visitor35'] +
                 $row_count['visitor36'] +
                 $row_count['visitor37'] +
                 $row_count['visitor38'] +
                 $row_count['visitor39'] +
                 $row_count['visitor40'] +
                 $row_count['visitor41'] +
                 $row_count['visitor42'] +
                 $row_count['visitor43'] +
                 $row_count['visitor44'] +
                 $row_count['visitor45'] + 
                 $row_count['visitor46'] + 
                 $row_count['visitor47'] + 
                 $row_count['visitor48'] + 
                 $row_count['visitor49'] + 
                 $row_count['visitor50'] + 
                 $row_count['visitor51'] + 
                 $row_count['visitor52'] + 
                 $row_count['visitor53'];?></h1>
            </div>
            </div>
            </div>
            <hr class="sidebar-divider" style="color: black; width: 90%">
<div class="table-scroll" style="width: 95%;">
        <table class="table table-responsive table-hover" style=" margin-right: 20%; width: 100%; height: 300px;">
    <thead>
        <tr>
        <th></th>
        <th colspan="2">This Municipality</th>
        <th colspan="2">Other Municipality</th>
        <th></th>
        <th><a href="all_data.php" style="text-decoration:none; color: white;"><button style="padding: 10px; background-color: red; border-radius: 10px; color: white; font-weight: bold;">All Data</button></a></th>
        </tr>
        <tr>
        <th scope="col">Place</th>
        <th scope="col">Male</th>
        <th scope="col">Female</th>
        <th scope="col">Male</th>
        <th scope="col">Female</th>
        <th scope="col">Foreign Male</th>
        <th scope="col">Foreign Female</th>
        <th scope="col">No.Visitors</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
        <td>Aleman Falls</td>
    <?php
        $sql = "SELECT * FROM `aleman`";
        $res = mysqli_query($con, $sql);
        ?>
            <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM aleman");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM aleman");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM aleman");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM aleman");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM aleman");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM aleman");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM aleman) as male, 
            (SELECT SUM(female) FROM aleman) as female,
            (SELECT SUM(other_male) FROM aleman) as other_male,
            (SELECT SUM(other_female) FROM aleman) as other_female,
            (SELECT SUM(foreign_male) FROM aleman) as foreign_male,
            (SELECT SUM(foreign_female) FROM aleman) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    <td>Dinadiawan White Beach</td>
        <?php
        $sql = "SELECT * FROM `dinadiawanview`";
        $result = mysqli_query($con, $sql);
        ?>
            <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM dinadiawanview");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $foreign = $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM dinadiawanview");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $local = $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM dinadiawanview");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $male = $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM dinadiawanview");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $female = $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM dinadiawanview");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM dinadiawanview");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM dinadiawanview) as male, 
            (SELECT SUM(female) FROM dinadiawanview) as female,
            (SELECT SUM(other_male) FROM dinadiawanview) as other_male,
            (SELECT SUM(other_female) FROM dinadiawanview) as other_female,
            (SELECT SUM(foreign_male) FROM dinadiawanview) as foreign_male,
            (SELECT SUM(foreign_female) FROM dinadiawanview) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    <tr>
        <td>Ampere Beach</td>
    <?php
        $sql = "SELECT * FROM `ampere`";
        $res = mysqli_query($con, $sql);
        ?>
            <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM ampere");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM ampere");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM ampere");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM ampere");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM ampere");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM ampere");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM ampere) as male, 
            (SELECT SUM(female) FROM ampere) as female,
            (SELECT SUM(other_male) FROM ampere) as other_male,
            (SELECT SUM(other_female) FROM ampere) as other_female,
            (SELECT SUM(foreign_male) FROM ampere) as foreign_male,
            (SELECT SUM(foreign_female) FROM ampere) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    <tr>
        <td>Baul Falls</td>
    <?php
        $sql = "SELECT * FROM `baul_falls`";
        $res = mysqli_query($con, $sql);
        ?>
            <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM baul_falls");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM baul_falls");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM baul_falls");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM baul_falls");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM baul_falls");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM baul_falls");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM baul_falls) as male, 
            (SELECT SUM(female) FROM baul_falls) as female,
            (SELECT SUM(other_male) FROM baul_falls) as other_male,
            (SELECT SUM(other_female) FROM baul_falls) as other_female,
            (SELECT SUM(foreign_male) FROM baul_falls) as foreign_male,
            (SELECT SUM(foreign_female) FROM baul_falls) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    <tr>
        <td>Blue Bridge</td>
    <?php
        $sql = "SELECT * FROM `blue_bridge`";
        $res = mysqli_query($con, $sql);
        ?>
           <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM blue_bridge");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $foreign = $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM blue_bridge");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $local = $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM blue_bridge");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $male = $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM blue_bridge");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $female = $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM blue_bridge");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM blue_bridge");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM blue_bridge) as male, 
            (SELECT SUM(female) FROM blue_bridge) as female,
            (SELECT SUM(other_male) FROM blue_bridge) as other_male,
            (SELECT SUM(other_female) FROM blue_bridge) as other_female,
            (SELECT SUM(foreign_male) FROM blue_bridge) as foreign_male,
            (SELECT SUM(foreign_female) FROM blue_bridge) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    <tr>
        <td>Diarabasin Islet</td>
    <?php
        $sql = "SELECT * FROM `diarabasin`";
        $res = mysqli_query($con, $sql);
        ?>
           <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM diarabasin");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $foreign = $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM diarabasin");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $local = $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM diarabasin");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $male = $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM diarabasin");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $female = $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM diarabasin");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM diarabasin");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM diarabasin) as male, 
            (SELECT SUM(female) FROM diarabasin) as female,
            (SELECT SUM(other_male) FROM diarabasin) as other_male,
            (SELECT SUM(other_female) FROM diarabasin) as other_female,
            (SELECT SUM(foreign_male) FROM diarabasin) as foreign_male,
            (SELECT SUM(foreign_female) FROM diarabasin) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    <tr>
        <td>Lipit</td>
    <?php
        $sql = "SELECT * FROM `lipit`";
        $res = mysqli_query($con, $sql);
        ?>
            <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM lipit");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $foreign = $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM lipit");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $local = $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM lipit");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $male = $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM lipit");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $female = $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM lipit");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM lipit");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM lipit) as male, 
            (SELECT SUM(female) FROM lipit) as female,
            (SELECT SUM(other_male) FROM lipit) as other_male,
            (SELECT SUM(other_female) FROM lipit) as other_female,
            (SELECT SUM(foreign_male) FROM lipit) as foreign_male,
            (SELECT SUM(foreign_female) FROM lipit) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    <tr>
        <td>Pamsawan Rock Formation</td>
    <?php
        $sql = "SELECT * FROM `pamwasan`";
        $res = mysqli_query($con, $sql);
        ?>
            <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM pamwasan");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $foreign = $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM pamwasan");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $local = $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM pamwasan");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $male = $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM pamwasan");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $female = $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM pamwasan");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM pamwasan");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM pamwasan) as male, 
            (SELECT SUM(female) FROM pamwasan) as female,
            (SELECT SUM(other_male) FROM pamwasan) as other_male,
            (SELECT SUM(other_female) FROM pamwasan) as other_female,
            (SELECT SUM(foreign_male) FROM pamwasan) as foreign_male,
            (SELECT SUM(foreign_female) FROM pamwasan) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    <tr>
        <td>Twin Cave</td>
    <?php
        $sql = "SELECT * FROM `tw`";
        $res = mysqli_query($con, $sql);
        ?>
            <?php $count_foreign = mysqli_query($con, "SELECT SUM(male) as male FROM tw");
            $row_count = mysqli_fetch_assoc($count_foreign);?>
            <td><?php echo $foreign = $row_count['male'];?></td>
            <?php $count_local = mysqli_query($con, "SELECT SUM(female) as female FROM tw");
            $row_count = mysqli_fetch_assoc($count_local);?>
            <td><?php echo $local = $row_count['female'];?></td>
            <?php $count_gender1 = mysqli_query($con, "SELECT SUM(other_male) as other_male FROM tw");
            $row_count = mysqli_fetch_assoc($count_gender1);?>
            <td><?php echo $male = $row_count['other_male'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(other_female) as other_female FROM tw");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $female = $row_count['other_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_female) as foreign_female FROM tw");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_female'];?></td>
            <?php $count_gender2 = mysqli_query($con, "SELECT SUM(foreign_male) as foreign_male FROM tw");
            $row_count = mysqli_fetch_assoc($count_gender2);?>
            <td><?php echo $row_count['foreign_male'];?></td>
            <?php $count_visitor = mysqli_query($con, "SELECT (SELECT SUM(male) FROM tw) as male, 
            (SELECT SUM(female) FROM tw) as female,
            (SELECT SUM(other_male) FROM tw) as other_male,
            (SELECT SUM(other_female) FROM tw) as other_female,
            (SELECT SUM(foreign_male) FROM tw) as foreign_male,
            (SELECT SUM(foreign_female) FROM tw) as foreign_female");
            $row_count = mysqli_fetch_assoc($count_visitor);?>
            <td><?php echo $row_count['male'] + $row_count['female'] + $row_count['other_male'] + $row_count['other_female'] + $row_count['foreign_male'] + $row_count['foreign_female'];?></td>
        </tr>
    <?php
    ?>
    </tbody>
    </table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php