<?php
session_start();
    require 'connection.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql= "SELECT * FROM korisnik WHERE username='".$username."' AND pass='".$password."'";

    $result = mysqli_query($con, $sql); 
    if(mysqli_num_rows($result) == 1){
        
    header('Location: home.php');   
    $_SESSION['username']=$username;
    $_SESSION['pass']=$password;
    $_SESSION['email']=$email;
    } 
    else echo "<script>alert('Not registered!')</script>";
    echo "<script>window.location.href='login.php'</script>";
?>
