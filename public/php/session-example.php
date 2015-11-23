<?php
// start the session (or resume an existing one)
// this function must be called before trying to set of get any session data!
session_start();

// get the current session id
$sessionId = session_id();

// initialize view count variable
$viewCount = 0;

// check to see if we have a view count being tracked in the session
if (!empty($_POST['reset'])) {
    endSession();
    header('Location: session-example.php');
    exit();
} elseif (!empty($_SESSION['VIEW_COUNT'])) {
    // we found one, use it instead of the default
    $viewCount = $_SESSION['VIEW_COUNT'];
}

// increment the counter
$viewCount++;

// store the new value to the session
$_SESSION['VIEW_COUNT'] = $viewCount;

function endSession()
{
    // Unset all of the session variables.
    $_SESSION = array();

    // If it's desired to kill the session, also delete the session cookie.
    // Note: This will destroy the session, and not just the session data!
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Finally, destroy the session.
    session_destroy();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Session Example</title>
</head>
<body>
    Session Id: <?= $sessionId; ?><br>
    View Count: <?= $viewCount; ?>
     <form method="POST">
        <input type="hidden" name="reset" value="reset">
        <input type="submit" value="Reset Counter">
    </form>
</body>
</html>