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
    echo "Logged in as: ".$p['username']." <input id='upPr' type='button' value='Update profile'onclick='show()'><br>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="home.css">
    <title>Home</title>
</head>
<body>

<div class="nav">

<a href="home.php">Home</a> 
<a href="comments.php">Comments</a>  
<a href="pictures.php">Gallery</a>
<a href="logout.php">Log out</a>

</div>

<form id="srch" action="home.php" method="post">
    <input type="text" name="search">
    <input type="submit" value="Search...">

</form>
    <?php
        require 'connection.php';
        $s=$_POST['search'];
        $sql = "SELECT id_gitare,naziv, model, vrsta FROM gitare WHERE naziv LIKE'%$s%'";
        $result = mysqli_query($con, $sql);
        echo '<table class="tb">';
        echo "<thead><tr><th>Name</th><th>Model</th><th>Type</th><th>Delete</th><th>Order</th></thead><tbody>";

        while($y=mysqli_fetch_array($result)){
    $naziv=$y['naziv']; 
	$model=$y['model'];
    $vrsta=$y['vrsta'];
    echo "<tr><td>".$y['naziv']."</td><td>".$y['model']."
    </td><td>".$y['vrsta']."</td><td><form id='as' action='delete.php?id=".$y['id_gitare']."' 
    method='POST'><input id='f'type='submit' value='Delete'><br>
    </form></td><td><form id='as' action='order.php?id=".$y['id_gitare']."' 
    method='POST'><input id='b'type='submit' value='Order'></td></form><br></td>";
}
echo "</tbody></table>";

    ?>
<form id="apdejt" action="update.php" method="POST">
    Change username: <input type="text" name="username" class="nesto"><br>
    Change password: <input type="text" name="password" class="nesto"><br>
    Change email: <input type="text" name="email" class="nesto"><br>
    <input type="submit" value="Update">
</form>
<script src='home.js'></script> 
</body>
</html>