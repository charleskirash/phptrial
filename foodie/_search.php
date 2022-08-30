<?php
 
    $con = mysqli_connect("localhost","root","","projo");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    if (isset($_POST['search'])) {
    	// $location = $_POST['location'];
     //    $location = filter_var($location, FILTER_SANITIZE_STRING);
    	// $restaurant = $_POST['restaurant'];
     //    $restaurant = filter_var($restaurant, FILTER_SANITIZE_STRING);

    	$srch = "SELECT * FROM restaurants WHERE location = '".$_POST['search']."' OR restaurant_name = '".$_POST['search']."' ";
    	$sql = mysqli_query($con, $srch);
        $result = mysqli_fetch_all($sql, MYSQLI_ASSOC);
    }

    // if (isset($_POST['search'])) {
    //     $search = "SELECT * FROM uploads";
    //     $result = mysqli_query($con, $search);


    // }
?>