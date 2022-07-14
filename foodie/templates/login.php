<?php include('../db.php') ?>
<?php include('../post.php') ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
    <div class="links">
        
    </div>

    <div class="login-form">
        <form action="profile.php" method="POST">
            <?php include('../error.php'); ?>
        <div class="title">
            <h3>Login</h3>
        </div>
            <div class="subtitle">
                <i class="fas fa-user">
                <input type="email" name="email" placeholder="Enter username or Email" required>
                </i>
            </div>
            <div class="subtitle">
                <i class="fas fa-key">
                <input type="password" name="password" placeholder="Enter password">
                </i>
            </div>
            <div class="subtitle">
                <p>Remember me!<input type="checkbox" name="remember"></p>
            </div>
            <div class="login-btn">
                <button type="submit" name="login">Login</button>
            </div>
        </form>
    </div>
</body>
</html> 