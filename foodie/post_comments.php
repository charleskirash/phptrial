<?php

include 'db.php';

if (isset($_POST['submit'])) {
	$rating = $_POST['rating'];
	$rating = filter_var($rating, FILTER_SANITIZE_STRING);
	$comment = $_POST['comment'];
	$comment = filter_var($comment, FILTER_SANITIZE_STRING);



	$sql = "INSERT INTO reviews (comment, rating) VALUES ('$comment', '$rating')";

	try {
        $review = mysqli_query($con, $sql) or die;
        $message = 'Successful';
        header('location:templates/hotel.php?msg='.$message);
    } catch (Exception $e) {
       header('location:hotel.php?error='.$e->getMessage());
       die;
    }
	
}

?>