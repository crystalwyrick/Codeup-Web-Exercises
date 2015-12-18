<?php
require_once "../../lib/Auth.php";
require_once "../../lib/Input.php";

session_start();

// $sessionId = session_id();

$username = Input::get('username');
$password = Input::get('password');
$message = '';

Auth::attempt($username, $password);

if (Auth::check()) {
	header("Location: authorized.php");
	die();
}

Auth::user();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Exercise</title>
</head>
<body>
    <form method="POST" action = "login.php">
        <label>Username</label>
        <input value="<?= $username ?>" type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="password"><br>
        <button type="submit">Submit</button>
    </form>
    <h2><?= $message ?></h2>
</body>
</html>