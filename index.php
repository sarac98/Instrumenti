<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="home.css">
    <title>Welcome</title>
</head>
<body>
    <form action="registration.php" method="post">
        Username: <br>
        <input type="text" name="username" class="box"><br>
        E-mail: <br>
        <input type="text" name="email" class="box"><br>
        Password: <br>
        <input type="password" name="password" class="box"><br>
        Re-enter password: <br>
        <input type="password" name="password2" class="box"><br><br>
        <input type="submit" name="confirm" value="Confirm" class="check"><br>
    </form>
    <div id="user">
    Already a user? Log in <a href="login.php">here</a>
    </div>
</body>
</html>