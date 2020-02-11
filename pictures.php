<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<?php 
error_reporting( E_ALL & ~E_NOTICE ^ E_DEPRECATED );
?>

<?php
require 'connection.php';
$sql="SELECT * FROM korisnik WHERE username='".$_SESSION['username']."'";;
$result=mysqli_query($con,$sql);
while($p=mysqli_fetch_array($result))
{
    echo "Logged in as: ".$p['username']."<br>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>Gallery</title>
<div class="nav" >

<a href="home.php">Home</a> 
<a href="comments.php">Comments</a>  
<a href="pictures.php">Gallery</a>
<a href="logout.php">Log out</a>

</div>
</head>
<body>
<form id="slik" action="upload.php" method="post" class="forma" enctype="multipart/form-data">
    <input type="file" name="file">
		<button type="submit" name="button">Add picture</button>
    </form>
    
<?php 

 require('connection.php');
 $upit="SELECT putanja FROM slike";
 $rez=mysqli_query($con,$upit);
 while($y=mysqli_fetch_array($rez)){
     echo "<img height:150 width=150 id='pic' src='pictures/".$y['putanja']."'>";
 }

?>
</body>