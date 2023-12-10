<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomeHub</title>
  <link rel="icon" type="image/x-icon" href="image\HH.png">
  <link rel="stylesheet" href="reviews1.css">  
  <script>
    function toggleForm() {
      var form = document.getElementById("reviewForm");
      if (form.style.display === "none" || form.style.display === "") {
        form.style.display = "block"; 
      } else {
        form.style.display = "none"; 
      }
    }

    function showAlert() {
      alert("Please rename your file and upload a single file only in the image upload.");
    }
  </script>
</head>
<body>
  <div class="nav">
    <nav>
      <h2 class="logo">HOME<span>HUB</span></h2>
      <a href="PSAU.php" class="search-button">BACK </a>        
      <a href="#" class="search-button" onclick="openMap()">Open Map</a> <!-- Added link to open map -->    
    </nav>
  </div>
  <div id="mapModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeMap()">&times;</span>
      <h2>Here's a Map</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!4v1702110664008!6m8!1m7!1sXJPP4lbrdzBnHCjgtnRb0Q!2m2!1d15.2180255732502!2d120.6875988633077!3f243.55138!4f0!5f0.7820865974627469"
 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
  <div class="hero5">
    <h3> HERRERA HOMES</h3>
    <div class="container"></div>
  </div>
  <br>
  <h1>Submit a Review</h1>
  <button class="black-button" onclick="toggleForm()">WRITE A REVIEW</button>
  <form id="reviewForm" action="displayherrera_reviewed.php" method="post" enctype="multipart/form-data">
    <label>Name:</label>
    <input type="text" name="name" required><br><br>
    <label>Rating:</label>
    <select name="rating" required>
      <option value="1">1 star</option>
      <option value="2">2 star</option>
      <option value="3">3 star</option>
      <option value="4">4 star</option>
      <option value="5">5 star</option>
    </select><br><br>
    <label>Review:</label>
    <textarea name="review" required></textarea><br><br>
    <label>Upload Image:</label>
    <input type="file" name="image" accept="image/*" onclick="showAlert()"><br><br>
    <input type="submit" value="Submit Review">
  </form>
      </div>

      <script>
    function openMap() {
      document.getElementById('mapModal').style.display = 'block';
    }
    function closeMap() {
      document.getElementById('mapModal').style.display = 'none';
    }
    
  </script>
   <div class="main-content">
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "review_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM hererrareviews";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='review'>";
            echo "<h2>Review by " . $row['name'] . "</h2>";
            echo "Rating: " . $row['rating'] . "/5<br>";
            echo "Review: " . $row['review'] . "<br>";
            echo "<img src='uploads/" . $row['image'] . "' height ='100', width='100'><br><br>";
            echo "</div>";
        }
    } else {
        echo "No reviews yet.";
    }

    $conn->close();

    
    ?>
</div>
    
</header> 
</section>
<footer class="footer">
    <div class="footer-nav">
      <p> HOME HUB</p>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-youtube"></a>
      <a href="#" class="fa fa-reddit"></a>
      <a href="#" class="fa fa-google"></a>
      <p> copyright &copy; 2022 HomeHub.com</p>
    </div>
  </footer>
</body>
</html>

