<?php include('../db.php')?>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" type="text/css" href="css/dashboard.css">

  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-c-plus-plus'></i>
      <span class="logo_name">Foodie</span>
    </div>
      <ul class="nav-links">
          <li>
          <a href="homepage.php" class="active">
            <i class="fa-solid fa-house"></i>
             <span class="icon">Home</span>
          </a>
        </li>
        <li>
          <a href="dashboard.php">
<i class="fa-solid fa-clipboard-list"></i>            <span class="icon">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="new_post.php">
<i class="fa-solid fa-upload"></i>
           <span class="icon">Post</span>
          </a>
        </li>
        <li>
          <a href="listing.php">
<i class="fa-brands fa-pagelines"></i>
            <span class="icon">Pages</span>
          </a>
        </li>
        <li class="log_out">
          <a href="includes/user_logout.php">
<i class="fa-solid fa-arrow-right-from-bracket"></i>
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
        <form action="search" method="GET">
           <input type="search" placeholder="Search...">
          <i class='bx bx-search' ></i>
        </form>
      </div>
    </nav>

<body>

<!--highlights-->
<div class="form-container">
  <div class="image-form">
    <form action="" method="POST">
      
    </form>
  </div>
  <br>
  <hr>

  <div class="details-form">
    <form action="" method="POST">
      <span>Restaurant Name *</span><input type="text" name="resto-name">  
      <span>Restaurant Email *</span><input type="text" name="resto-email">  <span>Ambience </span><input type="text" name="atmos">
      <span>Cafe </span><input type="text" name="coffee">           
      <span>Location</span><input type="text" name="location">    
      <span>Description</span><textarea name="cafe-desc"></textarea>
    </form>
  </div>
  <br>
  <hr>

</div>

<!--highlights end-->






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