
<!DOCTYPE>
<html lang="en">
<head>

  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">  
  <link rel="stylesheet" type="text/css" href="css/homepage.css">

</head>
<body>
    <nav id="navBar" class="navbar-white">
        <a href="homepage.php">
            <img src="img/icon.png" class="logo" style="margin: 5px auto;">
        </a>
      <ul class="nav-links">
        <li><a href="homepage.php" class="active">Home</a></li>
        <li><a href="read_post.php">Popular</a></li>
        <li><a href="menu.php" class="register-btn">My Profile</a></li>
      <i class="fas fa-bars" onclick="togglebtn()"></i>
      </ul>
    </nav>
    <div class="resto-details">
        <div class="resto-title">
            <h1><?php echo $_POST['restaurant_name']; ?> Restaurant</h1>
            <div class="row">
                <div>
                    
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-alt"></i>
                        <span>0 Reviews</span>
                </div>
                <div>
                    <p>Location: <?php echo $_POST['location']; ?>, CBD, KE</p>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="gallery-img-1" id="imgBox">
                <i class="fas fa-pencil">
                <img src="img/resto (4).jpg">
                </i>
           </div>
            <div>
                <img src="img/resto (267).jpg">
            </div>
            <div>
                <img src="img/resto (7).jpg">
            </div>
            <div>
                <img src="img/resto (6).jpg">
            </div>
            <div>
                <img src="img/resto (8).jpg">
            </div>
        </div>
        <div class="small-details">
            <h2>Cjs custom cafe loung</h2>
            <p>Coffee tables &nbsp; City park view &nbsp; Fast and secure wifi &nbsp; Fast customer service</p>
            <h4>From Ksh. 250</h4>
        </div>
        <hr class="line">
        <form class="reservation">
            <div>
                <label>Check-In Date</label>
                <input type="date" placeholder="Add date">
            </div>
            <div>
                <label>Check-In</label>
                <input type="time" placeholder="Add date">
            </div>
            <div>
                <label>Check-Out</label>
                <input type="time" placeholder="Add date">
            </div>
            <div class="guest-field">
                <label>Guests</label>
                <input type="number" placeholder="Number of guests">
            </div>
            <button type="submit">Check Availability</button>
        </form>
        <ul class="details-list">
            <li><i class="fa fa-coffee"></i>Table Booking
                <span>You will have an entire table to yourself.</span>
            </li>
            <li><i class="fa fa-paint-brush"></i>Quiet and clean Surrounding
                <span>As cleanlyness is next to Godlyness. We are committed to clean health.</span>
            </li>
            <li><i class="fas fa-map-marker-alt"></i>Great location
                <span>With a view of the CBD and city view you'll enjoy your experience.</span>
            </li>
        </ul>

        <hr class="line">
        <p class="cafe-desc">Guests will be allowed on the ground floor according to availability. You get a comfortble seat with a perfect view of the surroundings to compliment your experience of our services.</p>
        <hr class="line">

        <div class="map">
            <h3>Location on map</h3>
            <iframe src=""></iframe>
            <b>Nairobi, CBD, KE</b>
            <p>A must visit restaurant.</p>
        </div>

        <button class="register-btn" id="edit_content">Edit Page</button>
        <hr class="line">

<div class="comments">
    <p>Leave a comments</p><br>

<?php include('comments.php') ?>


    <div class="reviews-results">
      <section>
        <span id="display"></span>
      </section>
    </div>
    
  
</div>
<!-- <script type="text/javascript">
    var textBox = document.getElementById('editor');
    var imgBox = document.getElementById('imgBox');
    textBox.onkeyup = textBox.onkeypress = function(){
        document.getElementById('prevText').innerHTML = this.value;
    }
    var loadFile = function(event){
        imgBox.style.backgroundImage = 'url('+URL.createObjectURL(event.target.files[0])+ ')';
    }
</script> -->

<script type="text/javascript">
  function showInput(){
    document.getElementById('display').innerHTML = document.getElementById("user_input").value;
  }
  // window.onload = function changeInput(){
  //   if(localstorage.getItem('editor')){
  //       document.querySelector('.editor').innerHTML = localstorage.getItem('editor');
  //   }
  // }
  // let editBtn = document.querySelector('#edit_content');
  // let editor = document.querySelector('.editor');
  // editBtn.addEventListener('click', () =>{
  //   editor.contentEditable = !editor.isContentEditable;
  //   if(editor.contentEditable === 'false') {
  //       localstorage.setItem('editor', editor.innerHTML);
  //   }
  // });
  
</script>

</div>
        <hr class="line">

        <div class="host">
            <img src="">
            <div>
                <h2>Hosted By Foodie</h2>
                <p><span>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-alt"></i>
                </span>&nbsp; 0 Reviews &nbsp;&nbsp; Response rate 100% &nbsp;&nbsp; Response time: 60 mins</p>
            </div>
        </div>
        <a href="about.php" class="contact-host">Contact Host</a>

    </div>
    





    
    <div class="footer">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin-in"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <hr>
      <p>Copyright 2021, Foodie</p>
    </div>

</div>

<script>
  var navBar = document.getElementById('navBar');
  function togglebtn(){
    navBar.classList.toggle('hidemenu');
  }
</script>

</body>
</html>