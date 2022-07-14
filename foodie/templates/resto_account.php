<?php include('../post.php') ?>
<?php include('../db.php') ?>
<?php include('../checkbox.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="css/resto.css">
  <title>Business Account</title>
</head>
<body>

    <div class="business-form">
        <form action="admin.php" method="POST" enctype="multipart/formdata">
            <?php include('../error.php') ?>
        <div class="title">
            <h3>Register Business Account</h3>
        </div>
        <div class="sub-heading">
            <span class="title"><i class="fas fa-pencil"></i>Restaurant Name: </span><input type="text" name="restaurant_name" placeholder="Restaurant Name..." required multiple>
        </div>
        <div class="sub-heading">
            <span class="title"><i class="fas fa-envelope"></i>Official Email: </span><input type="email" name="email" placeholder="Official Email..." required>
        </div>
        <div class="sub-heading">
            <span class="title"><i class="fa-solid fa-utensils"></i> Restaurant Type:<input type="hidden" name="restaurant_type"></span><br>
                <div class="options">
                    <input type="checkbox" name="option[]" value="Fast" id="option1">
                    <label for="option1">Fast Food</label><br> 

                    <input type="checkbox" name="option[]" value="Cafe" id="option2">
                    <label for="option2">Cafe</label><br> 

                    <input type="checkbox" name="option[]" value="Family" id="option3">
                    <label for="option3">Family</label><br>

                    <input type="checkbox" name="option[]" value="Healthy" id="option4">
                    <label for="option4">Healthy</label><br> 

                    <input type="checkbox" name="option[]" value="Dessert" id="option5">
                    <label for="option5">Dessert</label><br>

                    <input type="checkbox" name="option[]" value="Casual" id="option6">
                    <label for="option6">Casual</label><br>

                    <input type="checkbox" name="option[]" value="Fine" id="option7">
                    <label for="option7">Fine Dining</label><br>


                </div>
        </div>
        <div class="sub-heading">
            <span class="title"><i class="fa fa-location-dot"></i>Location: </span><input type="text" name="location" value="" id="location" placeholder="Location" onclick="getLocation()"required>
        </div>
        <div class="sub-heading">
            <span class="title"><i class="fa-solid fa-calendar"></i> Date Established: </span><input type="date" name="date" placeholder="Date Established" required>
        </div>
        <div class="sub-heading">
            <span class="title"><i class="fa-solid fa-bell-concierge"></i>Services: <input type="hidden" name="services_offered"></span><br>
                <div class="options">
                    <input type="checkbox" name="service[]" value="Air" id="option1">
                    <label for="service">Air Cons</label><br>
                    <input type="checkbox" name="service[]" value="wifi" id="option2">
                    <label for="option2">Wi-Fi</label><br>
                    <input type="checkbox" name="service[]" value="Swimming" id="option3">
                    <label for="option3">Swimming Pool</label><br>
                    <input type="checkbox" name="service[]" value="Gym" id="option4">
                    <label for="option4">Gym</label><br>
                    <input type="checkbox" name="service[]" value="Accomodation" id="option5">
                    <label for="option5">Accomodation</label><br>                   
                </div>  
        </div>
        <div class="sub-heading">
            <span class="title"><i class="fas fa-key"></i>Restaurant Password: </span><input type="password" name="password" placeholder="Restaurant Password..." required>
        </div>
        
        <div class="sub-heading">
            <span class="title"><i></i>Reservation Available: <input type="checkbox" name="reservation[]" value="reservation"></span>
        </div>
        <div class="btn">
            <input type="submit" name="reg_resto" value="reg_resto">
        </div>
        <span class="footer"><p>Already have an account? <a href="resto_login.php">Login</a></p></span>
    </form>
    </div>


<footer class="footnote">
    <p>&copy; 2022 Foodie</p>
</footer>
    

<script type="text/javascript">
    var=x
    document.getElementById('location');
    function getLocation(){
        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(showPosition);
        }else{
            x.innerHTML = 'Geolocation not supported by browser.';
        }
    }
    function showPosition(position){
        x.innerHTML = 'Latitude: ' + position.coords.latitude + '<br>Longitude';
    }
</script>
 
</body>
</html>
