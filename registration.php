<?php
session_start();
    require 'connection.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password2 = $_POST["password2"];
    $passlength = strlen($password);

    if($username == "" || $email == "" || $password == ""){
        echo "<script>alert('You must fill in all required fields.')</script>"; 
        echo "<script>window.location.href='index.php'</script>";
    }
    else if (!preg_match("/^[0-9a-zA-Z ]*$/",$username)) {
        echo "<script>alert('Allowed caracters are numbers and letters.')</script>";
        echo "<script>window.location.href='index.php'</script>";
}

else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('E-mail is not valid.')</script>";
        echo "<script>window.location.href='index.php'</script>";
}

else if($password!==$password2){
 echo "<script>alert('Passwords do not match.')</script>";
 echo "<script>window.location.href='index.php'</script>";
}
else if($passlength<6){
 echo "<script>alert('Password is not long enough.')</script>";
 echo "<script>window.location.href='index.php'</script>";
}
else {
    $sql = "INSERT INTO korisnik (username, pass, email) VALUES ('$username', '$password', '$email')";\
    mysqli_query($con, $sql);
    $_SESSION['username']=$username;
    header('Location: home.php');
}
?>