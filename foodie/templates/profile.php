
<?php include("../db.php") ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="css/dashboard.css">

   </head>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Foodie</span>
    </div>
      <ul class="nav-links">
        <li>
          <a href="templates/dashboard.php" class="active">
            <i class="fas fa-clipboard-list"></i>            <span class="icon">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
<i class="fas fa-envelope-open"></i>            <span class="icon">Messages</span>
          </a>
        </li>
        <li>
          <a href="#">
<i class="fa fa-thumbs-up"></i>
           <span class="icon">Favrorites</span>
          </a>
        </li>
        <li>
          <a href="#">
<i class="fas fa-cogs"></i>
            <span class="icon">Settings</span>
          </a>
        </li>
        <li class="log_out">
          <a href="templates/logout.php">
<i class="fa-sign-out"></i>
<span class="icon">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <form action="templates/search.php" method="GET">
           <input type="search" placeholder="Search...">
          <i class='bx bx-search' ></i>
        </form>
      </div>
    </nav>

<body>

<!--highlights-->
<div class="content">

    <p>Welcome <strong><?php echo $_SESSION['email']; ?></strong></p>
    <p><a href="templates/homepage.php?logout='1'" style="color: red;">Logout</a></p>
</div>

<div class="container-fluid">
  
</div>

<!--highlights end-->

<div class="container">
  <div class="article-container">
    <article class="article-card">
      <figure class="article-image">
        <img src="../img/resto (225).jpg" alt="">
      </figure>
      <div class="article-content">
        <a href="#" class="card-category">Visit</a>
        <h3 class="card-title">View more</h3>
        <p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </article>

    <article class="article-card">
      <figure class="article-image">
        <img src="../img/resto (219).jpg" alt="">
      </figure>
      <div class="article-content">
        <a href="#" class="card-category">Visit</a>
        <h3 class="card-title">View more</h3>
        <p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.it anim id est laborum.</p>
      </div>
    </article>

    <article class="article-card">
      <figure class="article-image">
        <img src="../img/resto (238).jpg" alt="">
      </figure>
      <div class="article-content">
        <a href="#" class="card-category">Visit</a>
        <h3 class="card-title">View more</h3>
        <p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </article>

    <article class="article-card">
      <figure class="article-image">
        <img src="../img/resto (244).jpg" alt="">
      </figure>
      <div class="article-content">
        <a href="#" class="card-category">Visit</a>
        <h3 class="card-title">View more</h3>
        <p class="card-excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
    </article>

  </div>

</div>






  <script>
   let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</body>
</html>

