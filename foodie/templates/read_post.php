<?php include('../read.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>posts</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>


<section class="read-post">

   <?php
      $select_posts = $conn->prepare("SELECT * FROM `uploads` WHERE admin_id = ? AND id = ?");
      $select_posts->execute([$admins_id, $get_id]);
      if($select_posts->rowCount() > 0){
         while($fetch_posts = $select_posts->fetch(PDO::FETCH_ASSOC)){
            $post_id = $fetch_posts['id'];

            $count_post_comments = $conn->prepare("SELECT * FROM `reviews` WHERE post_id = ?");
            $count_post_comments->execute([$post_id]);
            $total_post_comments = $count_post_comments->rowCount();

            $count_post_likes = $conn->prepare("SELECT * FROM `likes` WHERE post_id = ?");
            $count_post_likes->execute([$post_id]);
            $total_post_likes = $count_post_likes->rowCount();

   ?>
   <form action="../read.php" method="post">
      <input type="hidden" name="post_id" value="<?= $post_id; ?>">
      <div class="status" style="background-color:<?php if($fetch_posts['status'] == 'active'){echo 'limegreen'; }else{echo 'coral';}; ?>;"><?= $fetch_posts['status']; ?></div>
      <?php if($fetch_posts['image'] != ''){ ?>
         <img src="../uploaded/<?= $fetch_posts['image']; ?>" class="image" alt="">
      <?php } ?>
      <div class="title"><?= $fetch_posts['title']; ?></div>
      <div class="content"><?= $fetch_posts['content']; ?></div>
      <div class="icons">
         <div class="likes"><i class="fas fa-heart"></i><span><?= $total_post_likes; ?></span></div>
         <div class="comments"><i class="fas fa-comment"></i><span><?= $total_post_comments; ?></span></div>
      </div>
      <div class="flex-btn">
         <a href="edit_post.php?id=<?= $post_id; ?>" class="inline-option-btn">edit</a>
         <button type="submit" name="delete" class="inline-delete-btn" onclick="return confirm('delete this post?');">delete</button>
         <a href="posts.php" class="inline-option-btn">go back</a>
      </div>
   </form>
   <?php
         }
      }else{
         echo '<p class="empty">no posts added yet! <a href="posts.php" class="btn" style="margin-top:1.5rem;">add post</a></p>';
      }
   ?>

</section>

<section class="comments" style="padding-top: 0;">
   
   <p class="comment-title">post comments</p>
   <div class="box-container">
   <?php
         $select_comments = $conn->prepare("SELECT * FROM `reviews` WHERE post_id = ?");
         $select_comments->execute([$get_id]);
         if($select_comments->rowCount() > 0){
            while($fetch_comments = $select_comments->fetch(PDO::FETCH_ASSOC)){
      ?>
   <div class="box">
      <div class="user">
         <i class="fas fa-user"></i>
         <div class="user-info">
            <span><?= $fetch_comments['user_name']; ?></span>
            <div><?= $fetch_comments['date']; ?></div>
         </div>
      </div>
      <div class="text"><?= $fetch_comments['comment']; ?></div>
      <form action="../delete_post.php" method="POST">
         <input type="hidden" name="comment_id" value="<?= $fetch_comments['id']; ?>">
         <button type="submit" class="inline-delete-btn" name="delete_comment" onclick="return confirm('delete this comment?');">delete comment</button>
      </form>
   </div>
   <?php
         }
      }else{
         echo '<p class="empty">no comments added yet!</p>';
      }
   ?>
   </div>

</section>









<!-- custom js file link  -->
<script src="js/admin_script.js"></script>

</body>
</html>