<?php
session_start();
    require 'connection.php';
    $kor=$_SESSION['username'];
    $komentar=$_POST['comment'];
    $sql="INSERT INTO komentar(trkorisnik,komentar) VALUES('$kor','$komentar')";
    mysqli_query($con,$sql);
    header('Location: comments.php');
	
	
    
	?>