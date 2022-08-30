<?php
session_start();

$username = "";
$email = "";
$errors = array();
 

$con = mysqli_connect('localhost', 'root', '', 'projo');
if (mysqli_connect_errno()){
    echo "Failed to connect to MYSQL: " . mysqli_connect_errno();
    exit();
  }

// REGISTER USER

include 'user_check.php';


if (isset($_REQUEST['reg_user'])) {
        $email = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $username    = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "INSERT into `users` (username, password, email)
                     VALUES ('$username', '" . md5($password) . "', '$email')";
        $_SESSION['user_id'] = $email;
        try {
            $result = mysqli_query($con, $query);
        } catch (Exception $e) {
            header('location:templates/signup.php?error='.$e->getMessage());
        }
            header('location:templates/homepage.php?id='.$_SESSION['user_id']);
        
    } 
 

//LOGIN USER  


    if (isset($_POST['login'])){
        $email = stripcslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripcslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $query = "SELECT * FROM 'users' WHERE email='$email' AND password='" . md5($password) ."'";
        $error = array();

        if (empty($email)) {array_push($errors ,["email is required"]); }
        if (empty($password)) {array_push($errors ,["password is required"]); }

        try {
              $result = mysqli_query($con, $query) or die;  
            } catch (Exception $e) {
                header('location:templates/login.php?error='.$e->getMessage());
            }
            header('location:templates/profile.php?id='.$_SESSION['user_id']);

        
        $rows = mysqli_num_rows($result);

        if ($rows == 1){
           
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }

//REGISTER RESTAURANT

if (isset($_REQUEST['reg_resto'])) {
    $restaurant = stripslashes($_POST['restaurant_name']);
    $restaurant = mysqli_real_escape_string($con, $_POST['restaurant_name']);
    $email = stripslashes($_POST['email']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $option =  $_POST['option'];
    $location = stripslashes($_POST['location']);
    $location = mysqli_real_escape_string($con, $_POST['location']);
    $date = stripslashes($_POST['date']);
    $date = mysqli_real_escape_string($con, $_POST['date']);
    $service =$_POST['service'];

    @$empty  = array();
    @$reservation = $_POST['reservation'] ?? $empty;
    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    
    $finalOption;
    foreach ($option as $opt) {
        @$finalOption .= $opt . '  ';
            }
     

    $serviceOption;
    foreach ($service as $sv) {
        @$serviceOption .= $sv . '  ';
    }

    @$reservOption;
    foreach ($reservation as $rsv) {
        @$reservOption .= $rsv . '  ';
    }


    $q = "INSERT into restaurants (Restaurant_name, email, Restaurant_type, location, services, date, reservation,  password) VALUES ('$restaurant', '$email', '$finalOption', '$location', '$serviceOption', '$date', '$reservOption', '" .md5($password). "')";
    $_SESSION['resto_id'] = $email;
    try {
        $result = mysqli_query($con, $q) or die;
    } catch (Exception $e) {
       header('location:templates/resto_account.php?error='.$e->getMessage());
       die;
    }
        header('location:templates/hotel.php');
 


// RESTAURANT LOGIN

if (isset($_POST['resto_login'])) {
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $password = sha1($_POST['password']);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $query = "SELECT email, password FROM restaurants WHERE 'email'= $email AND 'password' = $password";

    try {
        $result = mysqli_query($con, $result) or die;
    } catch (Exception $e) {
        header('location:templates/resto_account.php?error='.$e->getMessage());
        die;
    }
    header('location:templates/dashboard.php');
}
}
?>