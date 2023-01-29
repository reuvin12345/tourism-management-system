<?php
$con = new mysqli('localhost', 'root', '', 'tourism');

if(isset($_POST['feedback-btn'])){
    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

$sql = "INSERT INTO `feedback8`(`name`, `comment`, `rating`)VALUES('$name','$comment', '$rating')";

$result = mysqli_query($con, $sql);

if($result) {
    header('location:pamwasan.php');
}else {
    echo 'Connection Failed';
}
}
?>