<?php
include("connection.php");
session_start(); // Start the session

// Check if the username is set in the session
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>

<h2>Success</h2>
<h2>Hi <?php echo htmlspecialchars($username); ?></h2> <!-- Display the username -->

</body>
</html>
