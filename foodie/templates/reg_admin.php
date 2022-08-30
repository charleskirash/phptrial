 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/layout.css">

</head>
<body>

  <div class="links">
    <nav>      
      <ul>
        <li><a href="homepage.php">Home</a></li>
        <li><a href="login_admin.php">Business</a></li>
        <li><a href="signup.php">Sign up</a></li>
      </ul>
    </nav>
</div>


  <div class="signup-form">
        <form action="../_admin.php" method="POST">
          <?php include('../error.php') ?>
        <div class="title">
            <h3>Register Admin</h3>
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
                <button type="submit" name="reg_admin">Register</button>
            </div>
            <span><p>Already have an account?<a href="login_admin.php">Login</a></p></span>
        
    </form>
    </div>
</body>
</html> 