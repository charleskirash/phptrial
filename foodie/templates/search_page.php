<?php include('../db.php')?>

<!DOCTYPE html> 
<html lang="en">
<head>

  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/page.css">
  <title>Search Page</title>
</head>
<body>
	<div class="search-btn">	
      <form action="_search.php" method="POST">
      	<input type="search" name="search" placeholder="Search here....">
      </form>
 <div class="btn-btn">
 	<form action="../_search.php" method="POST">
 	<select name="options" class="box">

 		<option value="" selected disabled>-- select location* </option>
 		<option value="nakuru">Nakuru</option>
 		<option value="nairobi">Nairobi</option>
 		<option value="boma">Boma</option>
 	</select> 

 	<select name="category" class="box">

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
      <button type="submit">Go</button>	
      </form>
 </div>
	</div>

<?php
$query = "SELECT * FROM uploads";
$sql = mysqli_query($con, $query);
$result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
?>
		<?php
		foreach ($result as $rlst) {
		?>
<div class="grid">
<div class="results">


	<div class="status">
		<span>
		<?php echo $rlst['status']; ?>
		</span>

	</div>



	<div class="display-image">
		<span>
			<?php echo "<img width= 300px; border-radius=10px; src='../uploaded/".$rlst['image']."'>"; ?>
		</span>
	</div>


	<div class="caption">

		<span>
			<?php echo $rlst['caption']; ?>
		</span>

	</div>

	<div class="category">

		<span>
			<?php echo $rlst['category']; ?>
		</span>

	</div>

	<div class="price">

		<span>
			Ksh.  <?php echo  $rlst['price']; ?>
		</span>

	</div>	

	<div class="location">

		<span>
			Ksh.  <?php echo  $rlst['price']; ?>
		</span>

	</div>


</div>
</div>
<?php
}
?>

</body>
</html>