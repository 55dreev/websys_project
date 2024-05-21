<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/reglog.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <div class="container" id="signup">
        <h1 class="form-title">Register</h1>
        <?php
include 'connect.php'; // Assuming this file contains your database connection

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = ($password); // Note: MD5 is not recommended for secure password storage

    // Check if the email already exists in the 'user' table
    $checkEmail = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if($result->num_rows > 0){
        echo "<script>alert('Email Address Already Exists!');</script>";
    } else {
        // Insert data into 'user' table
        $insertQueryUser = "INSERT INTO user (firstName, lastName, email, password, username) VALUES ('$firstName', '$lastName', '$email', '$password', '$username')";
        if($conn->query($insertQueryUser) === TRUE){
            header("Location: login.php"); // Redirect to login page upon successful registration
            exit(); // Stop further execution
        } else {
            echo "Error: ".$conn->error;
        }
    }
}
?>



        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="username" id="username" placeholder="Username" required>
                <label for="username">Username</label> <!-- New input for username -->
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp">
            <p>
                <a href="login.php">Already have an account? Log in here</a>
            </p>
        </form>
    </div>
</body>
</html>
