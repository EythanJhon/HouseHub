<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HouseHub/title>
    <link rel="icon" type="image/x-icon" href="image\HH.png">
    <link rel="stylesheet" href="reviews.css">
    <style>
        /* Hide the form by default */
        form {
            display: none;
        }
    </style>
    <script>
        function toggleForm() {
            var form = document.getElementById("reviewForm");
            if (form.style.display === "none" || form.style.display === "") {
                form.style.display = "block"; // Show the form
            } else {
                form.style.display = "none"; // Hide the form
            }
        }

        
    </script>
</head>
<body>
 <div class="#">
    <nav>
      <h2 class="logo">HOME<span>HUB</span></h2>
      <a href="logout.php" class="search-button">SIGN OUT</a>            
    </nav>
</div>
  <div class="hero5">
      <h3> Review this Boarding</h3>
    <div class="container">
</div>
      </div>
      <br>
    <h1>Submit a Review</h1>
    <button class="black-button" onclick="toggleForm()">WRITE A REVIEW</button>
    <form id="reviewForm" action="display_reviewed.php" method="post" enctype="multipart/form-data">
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
        <input type="file" name="image" accept="image/*"><br><br>

        <input type="submit" value="Submit Review">
    </form>
      </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "review_system";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM reviews";
    $result = $conn->query($sql);
    $allowTypes = array('jpg','png','jpeg','gif'); 
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='review'>";
            echo "<h2>Review by " . $row['name'] . "</h2>";
            echo "Rating: " . $row['rating'] . "/5<br>";
            echo "Review: " . $row['review'] . "<br>";
            echo "<img src='uploads/" . $row['image'] . "' height ='0', width='100'><br><br>";
            echo "</div>";
        }
    } else {
        echo "No reviews yet.";
    }

    $conn->close();

    
    ?>
</header> 
</section>

</body>
</html>

