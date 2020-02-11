<?php
require 'connection.php';
$picture ="";
$pictureName ="";
$imageNameTemp ="";
$imageSize ="";
$imageError ="";
$imageType = '';
if ($_FILES['file']['size'] > 0) {
$picture = $_FILES['file'];
$imageName= $_FILES['file']['name'];
$imageNameTemp= $_FILES['file']['tmp_name'];
$imageSize = $_FILES['file']['size'];
$imageError = $_FILES['file']['error'];
$imageType = $_FILES['file']['type'];
$imageText = explode('.', $imageName);
$imageText[1];
$allowedEx = ['png','PNG','jpg','JPG','jpeg','JPEG'];
if (in_array($imageText[1],$allowedEx)) {
    if ($imageError === 0) {
        if ($imageSize < 1000000) {
            $newImageName = uniqid('', true).".".$imageText[1];
            $imageDest = 'pictures/'.$newImageName;
            move_uploaded_file($imageNameTemp, $imageDest);
        } 
        else {
            echo 'Image size is too big.';
        }
        }
        else {
            echo 'An error came up while uploading.';
        }
        }
        else {
            echo 'Format not allowed.';
        }
    }
$sql="INSERT INTO `slike`(`putanja`) VALUES ('$newImageName');";
mysqli_query($con, $sql);
header('Location:pictures.php');
?>