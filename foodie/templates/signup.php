<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Welcome to Foodie</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/layout.css">

</head>
        
<body>

  <div class="links">
    <nav>      
      <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="listing.php">Features</a></li>
        <li><a href="signup.php">Sign up</a></li>
      </ul>
    </nav>
</div>



  <div class="signup-form">
        <form action="../post.php" method="POST">
<?php include('../error.php') ; ?>
        <div class="title">
            <h3>Sign Up</h3>
        </div>
            <div class="subtitle">
                <i class="fas fa-user">
                <input type="text" name="username" placeholder="Enter username" required>
                </i>
            </div>
            <div class="subtitle">
                <i class="fas fa-envelope">
                <input type="email" name="email" placeholder="Enter Email" required>
                </i>
            </div>
            <div class="subtitle">
                <i class="fas fa-key">
                <input type="password" name="password" placeholder="Enter password">
                </i>
            </div>
           
            <div class="login-btn">
                <button type="submit" name="reg_user">Register</button>
            </div>
            <span><p>Already have an account?<a href="login.php">Login</a></p></span>
        
    </form>
    </div>
</body>
</html>