<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/reglog.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <div class="container">
    <a href="login.php" class="back-button"><i class="fas fa-arrow-left"></i> Back</a>
        <h1 class="form-title">Reset Password</h1>
        <form method="post" action="handle_reset.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="user_or_email" placeholder="Username or Email" required>
                <label for="user_or_email">Username or Email</label>
            </div>
            <input type="submit" class="btn" name="submit" value="Reset Password">
        </form>
    </div>
</body>
</html>
