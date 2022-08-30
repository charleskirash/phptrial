<header class="header">

   <section class="flex">

      <a href="homepage.php" class="logo">Foodie</a>

      <form action="search.php" method="POST" class="search-form">
         <input type="text" name="search_box" class="box" maxlength="100" placeholder="search for blogs" required>
         <button type="submit" class="fas fa-search" name="search_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <nav class="navbar">
         <a href="homepage.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="posts.php"> <i class="fas fa-angle-right"></i> Posts</a>
         <a href="all_category.php"> <i class="fas fa-angle-right"></i> Category</a>
         <a href="login.php"> <i class="fas fa-angle-right"></i> Login</a>
         <a href="signup.php"> <i class="fas fa-angle-right"></i> Register</a>
      </nav>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$users_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <a href="update.php" class="btn">update profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="signup.php" class="option-btn">register</a>
         </div> 
         <a href="includes/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
         <?php
            }else{
         ?>
            <p class="name">please login first!</p>
            <a href="login.php" class="option-btn">login</a>
         <?php
            }
         ?>
      </div>

   </section>

</header>