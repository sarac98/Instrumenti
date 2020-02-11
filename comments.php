<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}
?>
<?php 
error_reporting( E_ALL & ~E_NOTICE ^ E_DEPRECATED );
session_start();
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
    <title>Comments</title>
<div class="nav">
<a href="home.php">Home</a> 
<a href="comments.php">Comments</a>  
<a href="pictures.php">Gallery</a>
<a href="logout.php">Log out</a>
</div>
</head>
<body>
<form id="polje" method="post" class="forma" action="comm.php">
	<p class="paragraf1">You can leave us a comment here:<br> <textarea name="comment" rows="10" cols="50"></textarea><br>
	<input type="submit" name="comm" value="Post"></p>
    </form>

<?php
require 'connection.php';
$sql="SELECT * FROM komentar";
$result=mysqli_query($con,$sql);
while($y=mysqli_fetch_array($result))
{
    echo "<div id='rec'>Username: ".$y['trkorisnik']."<br>Komentar: ".$y['komentar']."</div><br>";
}
?>

</body>