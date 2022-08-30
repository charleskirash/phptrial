<div class="error" style="color: white;">
<?php 
// $errors = array();
// array_push($errors, "something went wrong");


if (isset($_GET['error']) AND $_GET['error']){ 
	echo $_GET['error'];
}

	// if (isset($errors) AND count($errors) > 0){ 
 //        foreach ($errors as $error){
 //         echo $error; 
 //        }  
 //   } 
?>
</div> 