<?php
$host = "localhost";
$server_username = "root";
$server_pass = ""; 
$base = "instrumenti";
$con = mysqli_connect($host, $server_username, $server_pass, $base);

if (!$con) {
    die("Failiure to connect: " . mysqli_connect_error());
}
?>