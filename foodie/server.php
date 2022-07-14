<?php
session_start();

//initializing variable
$username = "";
$email = "";
$errors = array();

//connect to the database
$db = mysqli_connect('localhost', 'root', '', 'projo');
if (mysqli_connect_errno()) {
	echo "connect failed";
	exit();
}

//register user
if (isset($_POST['reg_user'])) {
    //receive all input values from the form
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $query = "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')";
    
    $db_user = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($db, $db_user);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { //if user exists
        if ($user['$username'] === $username) {
            array_push($errors, "Username already exists");
        }
    if ($user['$email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }
    //finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the databasse
        
        $query = "INSERT INTO users (username, email, password)
                  VALUES('$username', '$email', '$password')";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: profile.php');
        
    }
}

//LOGIN USER 
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    
    if (empty($email)) {
        array_push($errors, "Email required");    
    }if (empty($password)) {
        array_push($errors, "Password required");    
    }
    
if (count($errors) == 0) {
        $password = md5($password_1);        
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: profile.php');
        }else {
            array_push($errorsr, "Wrong username/password");
        }
        
    }    
    
}


//RESTAURANT REG

if (isset($_POST['reg_resto'])) {
    //receive all input values from the form
    $restaurant = stripslashes($_REQUEST['restaurant_name']);
    $restaurant = mysqli_real_escape_string($db, $_POST['restaurant_name']);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $option = stripslashes($_REQUEST['option[]']);
    $option = mysqli_real_escape_string($db, $_POST['option[]']);
    $location = stripslashes($_REQUEST['location']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $date = stripslashes($_REQUEST['date']);
    $date = mysqli_real_escape_string($db, $_POST['date']);
    $service = stripslashes($_REQUEST['service[]']);
    $service = mysqli_real_escape_string($db, $_POST['service[]']);
    $reservation = stripslashes($_REQUEST['reservation']);
    $reservation = mysqli_real_escape_string($db, $_POST['reservation']);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $query    = "INSERT into restaurants (Restaurant_name, email, Restaurant_type, location, date_established, services, password, reservation)
                     VALUES ('$restaurant', $email, $option, $location, $date, $service, $reservation, '" . md5($password) . "')";



    if (empty($restaurant)) {
        array_push($errors, "Restaurant name required");
    }
    if (empty($email)) {
        array_push($errors, "Email  required");
    }
    if (empty($date)) {
        array_push($errors, "Date required");
    }
    if (empty($password)) {
        array_push($errors, "Password required");
    }


    if (count($errors) == 0) {
        $password = md5($password);        
        $query = "SELECT * FROM restaurants WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['success'] = "You are now logged in";
        header('location: admin.php');
        }else {
            array_push($errors, "Wrong username/password");
        }
        
    }    
    
}

















?>