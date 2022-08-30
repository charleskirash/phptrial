<?php


 
$con = mysqli_connect('localhost', 'root', '', 'projo');
if (mysqli_connect_errno()){
    echo "Failed to connect to MYSQL: " . mysqli_connect_errno();
    exit();
  }

session_start();

include 'session.php';

if(isset($_POST['publish'])){

   $title = $_POST['title'];
   $title = filter_var($title, FILTER_SANITIZE_STRING);
   $content = $_POST['content'];
   $content = filter_var($content, FILTER_SANITIZE_STRING);
   $category = $_POST['category'];
   $category = filter_var($category, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   $status = 'active';
   
   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded/'.$image;


   if(isset($image)){
      if($image_size > 2000000){
         $message[] = 'images size is too large!';
      }else{
         move_uploaded_file($image_tmp_name, $image_folder);
      }
   }
   $post = "INSERT INTO uploads (image, title, caption, category, price, status) VALUES ('$image', '$title', '$content', '$category', '$price', '$status')";

   try {
      $result = mysqli_query($con, $post);
   } catch (Exception $e) {
      header('location:templates/new_posts.php?error='.$e->getMessage());
      die;
   }
   header('location:templates/dashboard.php?id='.$_SESSION['admin_id']);
   } 


   


if(isset($_POST['draft'])){

   $title = $_POST['title'];
   $title = filter_var($title, FILTER_SANITIZE_STRING);
   $content = $_POST['content'];
   $content = filter_var($content, FILTER_SANITIZE_STRING);
   $category = $_POST['category'];
   $category = filter_var($category, FILTER_SANITIZE_STRING);
   $price = $_POST['price'];
   $price = filter_var($price, FILTER_SANITIZE_STRING);
   $status = 'deactive';
   
   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = '../uploaded/'.$image;


   if(isset($image)){
      if(mysqli_num_rows($result) > 0 AND $image != ''){
         $message[] = 'image name repeated!';
      }elseif($image_size > 2000000){
         $message[] = 'images size is too large!';
      }else{
         move_uploaded_file($image_tmp_name, $image_folder);
      }
   }else{
      $image = '';
   }

   if(mysqli_num_rows($result) > 0 AND $image != ''){
      $message[] = 'please rename your image!';
   }else{

   $select_image = "INSERT INTO uploads (name, image, title, caption, category, price, status) VALUES ('$image', '$title', '$content', '$category', '$price', '$status')";
   
   $message[] = 'draft saved!';

   }




   try {
      $result = mysqli_query($con, $select_image);
   } catch (Exception $e) {
      header('location:templates/new_posts.php?error='.$e->getMessage());
      die;
   }
   header('location:templates/dashboard.php?id='.$_SESSION['admin_id']);
   } 

?>