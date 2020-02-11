<?php
session_start();
require 'connection.php';
$git=$_GET['id'];
$id_kor=$_SESSION['username'];
$sql="INSERT INTO `porudzbina`(`trkorisnik`, `id_gitare`) VALUES ('$id_kor','$git')";
mysqli_query($con,$sql);
header('Location: home.php');

?>