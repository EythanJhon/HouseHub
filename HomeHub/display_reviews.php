<?php
// Database connection setup (adjust as needed)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve reviews from the database
$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>Review by " . $row['name'] . "</h2>";
        echo "Rating: " . $row['rating'] . "/5<br>";
        echo "Review: " . $row['review'] . "<br>";
        echo "<img src='uploads/" . $row['image'] . "' height ='100', width='100' onclick=\"displayImage('uploads/" . $row['image'] . "')\"><br><br>";
echo "</div>";
    }
} else {
    echo "No reviews yet.";
}

$conn->close();
?>