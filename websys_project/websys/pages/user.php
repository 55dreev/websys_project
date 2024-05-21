<?php
include("connection.php");
session_start(); // Start the session

if (isset($_POST['submit'])) {
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $count = $result->num_rows;

    if ($count == 1) {
        $_SESSION['username'] = $username; // Store the username in the session
        header("Location: dummy.php");
        exit(); // Ensure the script stops after redirection
    } else {
        echo '<script>
            window.location.href="login.php";
            alert("Login failed. Invalid username or password");
            </script>';
    }
    $stmt->close(); // Close the statement
}
?>
