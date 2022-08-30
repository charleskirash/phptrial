<?php


if(isset($_SESSION['users_id'])){
   header('location:templates/homepage.php');
}else{
   header('location:templates/signup.php');
}


?> 