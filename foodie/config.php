<?php

    $con = mysqli_connect("localhost","root","","projo");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (isset($_POST['post_comment'])) {
    	$name = $_POST['name'];
    	$message = $_POST['message'];

    	$sql = "INSERT into reviews (name, comment) VALUES ($name, $message)";
    	$result = mysqli_query($con, $sql) or die;
    }
?>