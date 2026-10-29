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
		$error = "Username or password is incorrect";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<main class="login-card">
		<form method="post" action="index.php">
			<label for="username">Username</label>
			<input id="username" type="text" name="username">

			<label for="password">Password</label>
			<input id="password" type="password" name="password">

			<button type="submit">Log in</button>
		</form>
	</main>
</body>
</html>
