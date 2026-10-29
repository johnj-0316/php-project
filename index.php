<?php
session_start();

$username = "user";
$password = "password";

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
	header("Location: loginsuccess.php");
	exit;
}

if (isset($_POST['username'], $_POST['password'])) {
	if ($_POST['username'] === $username && $_POST['password'] === $password) {
		$_SESSION['loggedin'] = true;
		header("Location: loginsuccess.php");
		exit;
	} else {
		echo "Username or password is incorrect";
	}
}
?>
<!DOCTYPE html>
<html>
<body>
	<form method="post" action="index.php">
	username: <br>
	<input type="text" name="username"><br>
	password :<br>
	<input type="password" name="password"><br>
	<input type="submit" value="login">
</form>
</body>
</html>
