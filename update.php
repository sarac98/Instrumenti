<?php
require 'connection.php';
session_start();

$newusername=$_POST['username'];
$newpassword=$_POST['password'];
$newemail=$_POST['email'];

if($newusername=="")
$newusername=$_SESSION['username'];
if($newpassword=="")
$newpassword=$_SESSION['pass'];
if($newemail=="")
$newemail=$_SESSION['email'];

$sql="UPDATE korisnik SET pass='$newpassword',username='$newusername',email='$newemail' WHERE username='".$_SESSION['username']."'";

$result=mysqli_query($con,$sql);
session_destroy();
header('Location:login.php');
?>