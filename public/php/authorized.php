<?php
var_dump($_POST);
var_dump($_GET);
session_start();
$sessionId = session_id();

if(!isset($_SESSION['LOGGED_IN_USER']))
{
	header("Location: login.php");
	die();
}

	$username = $_SESSION['LOGGED_IN_USER'];

?>

<!doctype html>

<html>
<head>
	<title>Authorized</title>
</head>
<body>
	<h2>Welcome, <?= $_SESSION['LOGGED_IN_USER'] ?></h2>
	<h2> <a href= "logout.php"> Logout </a> </h2>

</body>
</html>
