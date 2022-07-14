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
          <a href="dashboard.php" class="active">
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
          <a href="logout.php">
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
        <form action="search" method="GET">
           <input type="search" placeholder="Search...">
          <i class='bx bx-search' ></i>
        </form>
      </div>
    </nav>

<body>

<!--highlights-->
<div class="container-fluid">
  
{% block content %} 


{% endblock %}
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

