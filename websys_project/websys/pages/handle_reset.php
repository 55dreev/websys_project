<?php
include("connection.php");

$message = ""; // Initialize an empty message variable

if (isset($_POST['submit'])) {
    $user_or_email = $_POST['user_or_email'];

    // Check if the user_or_email exists in the database
    $stmt = $conn->prepare("SELECT * FROM user WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $user_or_email, $user_or_email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Generate a new random password
        $new_password = bin2hex(random_bytes(4)); // Generate an 8-character random password

        // Update the password in the database
        $stmt = $conn->prepare("UPDATE user SET password = ? WHERE username = ? OR email = ?");
        $stmt->bind_param("sss", $new_password, $user_or_email, $user_or_email);
        $stmt->execute();

        // Set the message to be displayed
        $message = "Your password has been reset. Your new password is: $new_password";

        // Optionally, you can send an email to the user with the new password
        // mail($user_or_email, "Password Reset", "Your new password is: $new_password");

    } else {
        $message = "No user found with that username or email.";
    }

    $stmt->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <style>
        body, html {
            margin: 0;
        padding: 0;
        height: 100%;
        width: 100%;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        background: #f0f0f0;
        overflow: hidden;
        background-image: url(../assets/img/windmell.jpg);
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
            z-index: 1;
        }

        .form-title {
            margin-bottom: 1.5em;
            font-size: 2.5em;
            color: #333;
            font-weight: bold;
        }

        .input-group {
            position: relative;
            margin-bottom: 1.5em;
        }

        .input-group i {
            position: absolute;
            top: 30%;
            left: 10px;
            transform: translateY(-50%);
            color: #999;
            pointer-events: none;
        }

        .input-group input {
            width: calc(100% - 40px);
            padding: 10px 10px 10px 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            font-size: 1em;
            color: #333;
        }

        .input-group input:focus {
            border-color: #5cb85c;
        }

        .input-group label {
            display: block;
            margin-top: 5px;
            color: #666;
            font-size: 0.9em;
        }

        .btn {
            width: 100%;
            padding: 10px;
            background: #5cb85c;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.3s ease;
            margin-top: 1em;
        }

        .btn:hover {
            background: #4cae4c;
        }

        p {
            margin-top: 1em;
            color: #666;
        }

        p a {
            color: #5cb85c;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }
        .login-button {
            display: inline-block;
            padding: 10px 20px;
            background: #5cb85c;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 0.9em;
            text-decoration: none;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .login-button:hover {
            background: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="message">
            <?php echo $message; ?><br><br>
            <a href="login.php" class="login-button">Log in</a>
        </div>
    </div>
</body>
</html>
