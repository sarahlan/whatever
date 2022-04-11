<?php

$servername = "localhost:3306";
$dBUsername = "mahs_slancaster";
$dBPassword = "mustangs";
$dBName = "mahs_slancaster";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("connection failed: ".mysqli_connect_error());
}
?>