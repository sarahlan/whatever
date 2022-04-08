<?php

$servername = "datadev.devcatalyst.com";
$dBUsername = "root";
$dBPassword = "";
$dBName = "mahs_slancaster";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if(!$conn) {
    die("connection failed: ".mysqli_connect_error());
}