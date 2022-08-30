<?php

include '../db.php';

session_start();

 

if(isset($_POST['delete'])){

   $p_id = $_POST['uploads_id'];
   $p_id = filter_var($p_id, FILTER_SANITIZE_STRING);

   $delete_image = $conn->prepare("SELECT * FROM `uploads` WHERE id = ?");
   $delete_image->execute([$p_id]);
   $fetch_delete_image = $delete_image->fetch(PDO::FETCH_ASSOC);

   if($fetch_delete_image['image'] != ''){
      unlink('/uploaded/'.$fetch_delete_image['image']);
   }
   $delete_post = $conn->prepare("DELETE FROM `uploads` WHERE id = ?");
   $delete_post->execute([$p_id]);
   $delete_comments = $conn->prepare("DELETE FROM `reviews` WHERE post_id = ?");
   $delete_comments->execute([$p_id]);
   header('location:templates/posts.php');

}

if(isset($_POST['delete_comment'])){

   $comment_id = $_POST['comment_id'];
   $comment_id = filter_var($comment_id, FILTER_SANITIZE_STRING);
   $delete_comment = $conn->prepare("DELETE FROM `reviews` WHERE id = ?");
   $delete_comment->execute([$comment_id]);
   $message[] = 'comment delete!';

}

?>