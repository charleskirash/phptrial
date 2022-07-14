<?php include('../server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Post</title>

	<meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/posts.css">

</head>
<body>
  
  <div class="upload-form">
  	<form action="posts.php" method="POST" target="#new" enctype="multipart/form-data">
	<h1>New upload</h1>

		<div class="file-field">
				<input type="file" name="file" id="file"  multiple>
		</div>

		<div class="field-group">
			<div class="field-label">Title: 
			<input type="text" name="title" placeholder="Dish Title">	
			</div>
		</div>

		<div class="field-group">
			<div class="field-label">Tags: 
			<input type="number" name="tags" placeholder="Price Tag"> 	
			</div>
		</div>

		<div class="field-group">
			<div class="field-label">Caption: 
			<input type="text-box" name="caption" placeholder="Dish Caption">	
			</div>
		</div>

		<div class="submit-field">
			<button type="submit" name="upload">Upload</button>
		</div>

		
	</form>

  </div>
	
	<div class="new-posts" id="#new">
		<section >
			
		</section>
		
	</div>
</body>
</html>
