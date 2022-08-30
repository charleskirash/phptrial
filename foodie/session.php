<?php

if(isset($_SESSION['admin_id'])) {
  header('location:templates/dashboard.php?id='.$_SESSION['admin_id']);
}else{
  header('location:templates/reg_admin.php?error='.$e->getMessage());
       die;
}


?>