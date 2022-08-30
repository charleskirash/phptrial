
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" type="text/css" href="css/posts.css">

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
<div class="container-fluid">



<!--    -->
</div>

<!--highlights end-->






<div class="new-post">
<section class="post-editor">
   <h1 class="heading">Add New Post</h1>

   <form action="../add_post.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="name" value="<?= $fetch_profile['name']; ?>">
      <p>Title <span>*</span></p>
      <input type="text" name="title" maxlength="100" required placeholder="add post title" class="box">
      <p>Image</p>
      <input type="file" name="image" class="box" accept="image/jpg, image/jpeg, image/png, image/webp">
      <p>Category <span>*</span></p>
      <select name="category" class="box" required>

         <option value="" selected disabled>-- select category* </option>
         <option value="Breakfast">Breakfast</option>
         <option value="Lunch">Lunch</option>
         <option value="Fast">Fast Food</option>
         <option value="Delivery">Delivery</option>
         <option value="Cafe">Cafe</option>
         <option value="Fine">Fine Dinning</option>
         <option value="Dessert">Dessert</option>
         <option value="Family">Family</option>
         <option value="Casual">Casual</option>
         <option value="Dinner">Dinner</option>

      </select>
      <p>Content <span>*</span></p>
      <textarea name="content" class="box" required maxlength="10000" placeholder="write your content..." cols="30" rows="10"></textarea>
      <p>Price</p>
      <input type="number" name="price">
      <div class="flex-btn">
         <button type="submit" name="publish" class="btn">Publish post</button>
         <button type="submit" name="draft" class="option-btn">Save draft</button>
         
      </div>
   </form>

</section>
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
