<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
</head>
<body>
	<div class="sidebar"> 
		<div class="profile">
			<h1>Adminpanel</h1>
			<section class="profile-info" id="imgBox">
				<h3>Page Admin</h3>
				<div class="profile-pic">
				<input type="file" name="file" accept="img/*" id="file" style="display: none;" onchange="loadFile(event)">
				<label for="file"><img src="" class="upload-icon"></label>
				</div>
				<button>Update Profile</button>
			</section>
		</div>
		<nav class="nav-bar">
			<ul>
				<li><a href="">Home</a></li>
				<li><a href="">Add Post</a></li>
				<li><a href="">View Posts</a></li>
				<li><a href="">Comments</a></li>
			</ul>
		</nav>
			<div class="btn">
				<button>Logout</button>
			</div>
		
	</div>
	<div class="searchbar">
		<form action="search.php" method="POST">
		<i class="fas fa-search"></i>
			<input type="search" name="search_btn" placeholder="Search ...">
		</form>
	</div>
	
<div class="page"> 
	<div class="article-container">
	<article class="card">
		<figure class="image">
			<img src="img/resto (3).jpg">
		</figure>
		<div class="content">
			<a href="#">Visit</a>
			<h3 class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

		</div>
	</article>
	</div>
<!-- 
	<div class="article-container">
	<article class="card">
		<figure class="image">
			<img src="img/resto (3).jpg">
		</figure>
		<div class="content">
			<a href="#">Visit</a>
			<h3 class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

		</div>
	</article>
	</div>

	<div class="article-container">
	<article class="card">
		<figure class="image">
			<img src="img/resto (3).jpg">
		</figure>
		<div class="content">
			<a href="#">Visit</a>
			<h3 class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

		</div>
	</article>
	</div>

	<div class="article-container">
	<article class="card">
		<figure class="image">
			<img src="img/resto (3).jpg">
		</figure>
		<div class="content">
			<a href="#">Visit</a>
			<h3 class="details">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

		</div>
	</article>
	</div> -->
</div>

<script type="text/javascript">
	var imgBox = document.getElementById('imgBox');
	var loadFile = function(event){
		imgBox.style.backgroundImage = 'url('+URL.createObjectURL(event.target.files[0])+ ')';
	}
</script>

</body>
</html>