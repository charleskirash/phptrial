<?php


session_start();

$con = mysqli_connect('localhost', 'root', '', 'projo');
if (mysqli_connect_errno()){
    echo "Failed to connect to MYSQL: " . mysqli_connect_errno();
    exit();
  }


include 'session.php';

/*.......register admin.........*/



if(isset($_POST['reg_admin'])){
   $username    = stripslashes($_POST['username']);
   $username = mysqli_real_escape_string($con, $username);
   $email = stripslashes($_POST['email']);
   $email    = mysqli_real_escape_string($con, $email);
   $password = stripslashes(sha1($_POST['password']));
   $password = mysqli_real_escape_string($con, $password);
   
   $select_admin = "INSERT INTO admins (name, email, password) VALUES ('$username', '$email', '$password')";
   $_SESSION['admin_id'] = $email;
   try {
        $result = mysqli_query($con, $select_admin);

    } catch (Exception $e) {
      if(!isset($_SESSION['admin_id'])) {
          header('location:templates/reg_admin.php?error='.$e->getMessage());
       die;
        }
    }
    header('location:templates/dashboard.php?id='.$_SESSION['admin_id']);
  
} 
  





/*.......login admin.........*/

if(isset($_POST['loginadmin'])){

   $username    = stripslashes($_POST['username']);
   $username = mysqli_real_escape_string($con, $username);
   $email = stripslashes($_POST['email']);
   $email    = mysqli_real_escape_string($con, $email);
   $password = stripslashes(sha1($_POST['password']));
   $password = mysqli_real_escape_string($con, $password);
   
   $select_admin = "SELECT * FROM `admins` WHERE email = '$email' AND password = '" .sha1($password)."' ";
   $_SESSION['admin_id'] = $email;
   
    try {
        $result = mysqli_query($con, $select_admin);
    } catch (Exception $e) {
      if(!isset($_SESSION['admin_id'])) {
          header('location:templates/reg_admin.php?error='.$e->getMessage());
       die;
        }
    }
    header('location:templates/dashboard.php?id='.$_SESSION['admin_id']);
   
} 


   // if(mysqli_num_rows($result) > 0){
   //    $fetch_admin_id = $select_admin->fetch(PDO::FETCH_ASSOC);
   //    $_SESSION['admin_id'] = $fetch_admin_id['id'];
   //    header('location:dashboard.php');
   // }




?>