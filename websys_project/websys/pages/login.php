<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="../css/reglog.css"> <!-- Link to your external CSS file -->
</head>
<body>
    <div class="container">
        <h1 class="form-title">Login</h1>
        <form method="post" name="form" action="user.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="user" placeholder="Username" required>
                <label for="user">Username</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="pass" placeholder="Password" required>
                <label for="pass">Password</label>
            </div>
            <input type="submit" class="btn" name="submit" value="Login">
            <p>
                <a href="index.php">Register an account now</a><br><br>
                <a href="reset_password.php">Forgot password?</a>
            </p>
        </form>
    </div>
</body>
</html>
