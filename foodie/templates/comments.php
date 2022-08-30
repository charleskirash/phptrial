<?php include('../db.php')?>
<!DOCTYPE html>
<html>
<head>
  <title></title>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel='stylesheet' type='text/css' media='screen' href="css/comments.css">

</head>
<body>

<div class="rev-section">
<h2 class="title">Reviews & Ratings</h2>
    <form action="../post_comments.php" method="POST">
      <fieldset class="ratings">
        <input type="radio" name="rating" value="5_star" id="rating1"><label class="far fa-star" for="rating1"></label>
        <input type="radio" name="rating" value="4_star" id="rating2"><label class="far fa-star" for="rating2"></label>
        <input type="radio" name="rating" value="3_star" id="rating3"><label class="far fa-star" for="rating3"></label>
        <input type="radio" name="rating" value="2_star" id="rating4"><label class="far fa-star" for="rating4"></label>
        <input type="radio" name="rating" value="1_star" id="rating5"><label class="far fa-star" for="rating5"></label>
      </fieldset><br>
      <div class="content">
          <textarea name="comment" id="user_input"></textarea>
    </div><br>
    <div class="btn">
          <button name="submit" type="submit" onclick="showInput()">Submit</button>
    </div>
      
    </form>
    <div class="reviews-results" style="margin-top: 20px">
      <section>
        <span id="display">
          <?php 
          //$comment = $_POST['comment'];
          $query = "SELECT comment, rating FROM reviews";
          $SQL = mysqli_query($con, $query);
          // $result = mysqli_fetch_array($entry);
        $results = mysqli_fetch_all($SQL, MYSQLI_ASSOC);
        
          ?>
          <div class="results" style="border-bottom: 1px solid #404040; border-left: 1px solid #404040;">
          <?php 
          foreach ($results as  $result) {
            ?>
          
            <?php 
              for ($i=0; $i < $result['rating'] ; $i++) { 
                 echo '<i class="fa fa-star checked" for="rating3" style="color:#f39c12;"></i>';
              }
            ?><br>
            <span style="color: #000;"><?php echo $result['comment'];?></span><br><br>
              <?php 
            }
             ?>
          </div>
        </span>
      </section>
    </div>
    
  
</div>
<script type="text/javascript">
  function showInput(){
    document.getElementById('display').innerHTML = document.getElementById("user_input").value;
  }
  
</script>

</body>

<head>
</html>