<?php
require "connection.php";
$git=$_GET['id'];
$sql="DELETE FROM `gitare` WHERE id_gitare='$git'";
mysqli_query($con,$sql);
header('Location: home.php');

?>