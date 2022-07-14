<?php include('../server.php') ?>
<!DOCTYPE>
<html lang="en">
<head>

  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">  
  <link rel="stylesheet" type="text/css" href="css/homepage.css">

</head>
<body>
    <nav id="navBar" class="navbar-white">
        <a href="homepage.php">
            <img src="img/logo.png" class="logo">
        </a>
      <ul class="nav-links">
        <li><a href="homepage.php" class="active">Home</a></li>
        <li><a href="popular.php">Popular</a></li>
        <li><a href="profile.php">Profile</a></li> 
      <a href="signup.php" class="register-btn">Register Now</a>
      <i class="fas fa-bars" onclick="togglebtn()"></i>
      </ul>
    </nav>
    <div class="resto-details">
        <div class="resto-title">
            <h1>Cj's Restaurant</h1>
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
                    <p>Location: Nairobi, CBD, KE</p>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="gallery-img-1"><img src="img/resto (4).jpg"></div>
            <div><img src="img/resto (267).jpg"></div>
            <div><img src="img/resto (7).jpg"></div>
            <div><img src="img/resto (6).jpg"></div>
            <div><img src="img/resto (8).jpg"></div>
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
        <hr class="line">

<div class="comments">
    <p>Leave a comments</p><br>

<div class="rev-section">
<h2 class="title">Reviews & Ratings</h2>
    <form action="hotel.php" method="POST">
      <fieldset class="ratings">
        <input type="radio" name="rating[]" value="1" id="rating1"><label class="far fa-star" for="rating1" name="1 star"></label>
        <input type="radio" name="rating[]" value="2" id="rating2"><label class="far fa-star" for="rating2" name="2 star"></label>
        <input type="radio" name="rating[]" value="3" id="rating3"><label class="far fa-star" for="rating3" name="3 star"></label>
        <input type="radio" name="rating[]" value="4" id="rating4"><label class="far fa-star" for="rating4" name="4 star"></label>
        <input type="radio" name="rating[]" value="5" id="rating5"><label class="far fa-star" for="rating5" name="5 star"></label>
      </fieldset><br>
      <div class="content">
          <textarea name="comment" id="user_input"></textarea>
    </div><br>
    <div class="btn">
          <button type="submit" onclick="showInput()">Submit</button>
    </div>
      
    </form>
    <div class="reviews-results">
      <section>
        <span id="display"></span>
      </section>
    </div>
    
  
</div>
<script type="text/javascript">
  function showInput(){
    document.getElementById('display').innerHTML = document.getElementById("user_input").value;
  }
  
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
        <a href="our_page.php" class="contact-host">Contact Host</a>

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