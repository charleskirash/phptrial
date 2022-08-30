<?php 
$con = mysqli_connect('localhost', 'root', '', 'projo');
$error = array();


//LOGIN USER  
    if (isset($_POST['login'])){
        $email = stripcslashes($_POST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripcslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $query = "SELECT * FROM users WHERE email= ? AND password='" . md5($password) ."'";

        if (empty($email)) {array_push($errors ,["email is required"]); }
        if (empty($password)) {array_push($errors ,["password is required"]); }
    

        $result = mysqli_query($con, $query) or die;
        $_SESSION['email'] = 'email';
        echo @$_SESSION['email'] ;
        // if (is_null($_SESSION['email'])) {
        //         header('location: login.php');
//     }
}
 ?>