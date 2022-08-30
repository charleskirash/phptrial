<?php include('../post.php') ?> 
<?php include('../check.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/homepage.css">
  <title>Foodie</title>
</head>

<body>
  <div class="header">
    <nav id="navBar">
      <img src="img/icon.png" class="logo" style="margin: 5px auto;">
      <ul class="nav-links">
        <li><a href="homepage.php" class="active">Popular</a></li>
        <li><a href="listing.php">Featured</a></li>
        <li><a href="profile.php">My Profile</a></li>
      <a href="index.php" class="register-btn">Register Now</a>
      <i class="fas fa-bars" onclick="togglebtn()"></i>
      </ul>
    </nav>
    <div class="container">
      <h1>Find your next restaurant</h1>
      <div class="search-bar">
        <form action="../_search.php" method="POST">
          <div class="location-input">
            <label>Location</label>
            <input type="search" placeholder="Where are you looking to go?" name="location">
          </div>
          <div>
            <label>Restaurant</label>
            <input type="search" placeholder="What are you looking for?" name="restaurant">
          </div>
          <button type="submit" name="submit"><i class="fas fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <h2 class="sub-title">Exclusives</h2>
    <div class="exclusives">
      <div>
        <img src="img/resto (173).jpg">
        <span>
          <h3>Fast Food</h3>
          <p>Starts @ Ksh. 100</p>
        </span>
      </div>
      <div>
        <img src="img/resto (287).jpg">
        <span>
          <h3>Healthy Meals</h3>
          <p>Starts @ Ksh. 200</p>
        </span>
      </div>
      <div>
        <img src="img/resto (265).jpg">
        <span>
          <h3>Fancy meals</h3>
          <p>Starts @ Ksh. 500</p>
        </span>
      </div>
      <div>
        <img src="img/resto (75).jpg">
        <span>
          <h3>Meat lovers</h3>
          <p>Starts @ Ksh. 200</p>
        </span>
      </div>
      <div>
        <img src="img/resto (217).jpg">
        <span>
          <h3>Meat lovers</h3>
          <p>Starts @ Ksh. 200</p>
        </span>
      </div>
      <div>
        <img src="img/resto (119).jpg">
        <span>
          <h3>On the go</h3>
          <p>Starts @ Ksh. 200</p>
        </span>
      </div>
      <div>
        <img src="img/resto (125).jpg">
        <span>
          <h3>Cool</h3>
          <p>Starts @ Ksh. 200</p>
        </span>
      </div>
      <div>
        <img src="img/resto (35).jpg">
        <span>
          <h3>Breakfast</h3>
          <p>Starts @ Ksh. 100</p>
        </span>
      </div>
      <div>
        <img src="img/resto (31).jpg">
        <span>
          <h3>Sauces</h3>
          <p>Starts @ Ksh. 400</p>
        </span>
      </div>
      <div>
        <img src="img/resto (148).jpg">
        <span>
          <h3>Dessert</h3>
          <p>Starts @ Ksh. 200</p>
        </span>
      </div>
    </div>


    <h2 class="sub-title">Trending</h2>
    <div class="trending">
      <div>
        <img src="img/resto (280).jpg">
        <h3>Fast Food</h3>
      </div>
      <div>
        <img src="img/resto (248).jpg">
        <h3>Cafe</h3>
      </div>
      <div>
        <img src="img/resto (38).jpg">
        <h3>Family Treats</h3>
      </div>
      <div>
        <img src="img/resto (256).jpg">
        <h3>Healthy</h3>
      </div>
      <div>
        <img src="img/resto (154).jpg">
        <h3>Fine</h3>
      </div>
    </div>

    <div class="cta">
      <h3>Discover <br> New Restaurants</h3>
      <p>Great opportunity to discover new restaurants <br> around you and enrich your pallet.</p>
      <a href="listing.php" class="cta-btn">Know More</a>
    </div>

    <h2 class="sub-title">Popular</h2>
    <div class="popular">
      <div>
        <img src="img/resto (104).jpg">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
      </div>
      <div>
        <img src="img/resto (280).jpg">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
      </div>
      <div>
        <img src="img/resto (287).jpg">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
      </div>
      <div>
        <img src="img/resto (8).jpg">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
      </div>
    </div>
    <a href="listing.php" class="view-btn">View More</a>

    <div class="about-msg">
      <h2>About Foodie</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div class="footer">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <hr>
      <p>Copyright 2021, Foodie</p>
    </div>



  </div>
<script>
  var navBar = document.getElementById('navBar');
  function togglebtn(){
    navBar.classList.toggle('hidemenu');
  }
</script>
</body>
</html>

