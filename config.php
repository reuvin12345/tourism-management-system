<?php

$con = new mysqli('localhost', 'root', '','tourism');
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}