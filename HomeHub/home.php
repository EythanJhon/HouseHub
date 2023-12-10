<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM rate_b WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>HomeHub</title>
    <link rel="icon" type="image/x-icon" href="image\HH.png">
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
<div class="nav">
  <nav>
      <h2 class="logo">Home<span>Hub</span></h2>
      <div class="search-container">
         <h3>WELCOME USER ! <span> <?php echo $row["name"]; ?> </h3>           
          <a href="logout.php" class="search-button">SIGN OUT</a>                  
</div>
</div> 
<div>
<br>
<div class="hero">
        <h3>Boarding <br>House <br>Reviews</h3>
        <div class="search-container">
        </div>
    </div>
</header> 
<br>
</section>
  <div class="about-section">
  <h2>About Us </h2>
  <br>
  <p>House hob is The first BoardingHouse platform  reviews in the Philippines</p>
  <p>Users can read/write reviews, and connect with other Users in the community.</p>
<br>
  <h2>Our Philosopy</h2>
<br>
    <p>At HouseHub, our mission is to empower individuals in their
       search for the perfect boarding house by providing a platform where honest, insightful,
        and constructive reviews thrive. We are dedicated to fostering trust, transparency, 
        and a sense of community among travelers and boarding house owners alike.
        Core Principles:</p>
    <p>To give you some context on myself, <br>
   We're in a Boarding House right now so we come up to this idea</p>
</div>
<div class="review">
      <h1> PAMPANGA STATE AGRICULTURAL UNIVERSITY</h1>
      <div class="container">
        <div class="box">
            <img src="image/psau2.png">
            <h3> PAMPANGA STATE AGRICULTURAL UNIVERSITY </h3>
            <p> </p>
             <a href="PSAU.php" class="btn">View Reviews</a>
        </div>          
</div>
</section>
</div>
</div>
</div>
        <div>       
        <div class="review">
      <h1> WHY NOT LISTEN & CHILL TO THE BEST SONGS WHILE WRITING A REVIEW TO OUR WEBSITE</h1>
      <iframe style="border-radius:12px" src="https://open.spotify.com/embed/playlist/37i9dQZF1EIdpNXsS4rYtd?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      </div>
      <div class="review">
      <h1> HERE'S A MAP  </h1>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15399.28059917845!2d120.68182640180173!3d15.223005620324312!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3396ef47164a7783%3A0x4d0084c45d09fab2!2sSan%20Agustin%2C%20Magalang%2C%20Pampanga!5e0!3m2!1sen!2sph!4v1696334773195!5m2!1sen!2sph" 
        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
        <footer>
        <div class="footer-nav">
        <p> HOME HUB</p>
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
        <a href="#" class="fa fa-youtube"></a>
        <a href="#" class="fa fa-reddit"></a>
        <a href="#" class="fa fa-google"></a>
        <p> copyright &copy; 2022 HomeHub.com</p>
    </footer>
</body>
</html>