<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "review_system";

$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$name = $_POST['name'];
$rating = $_POST['rating'];
$review = $_POST['review'];


$image_path = "uploads/";
$image_name = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$allowTypes = array('jpg','png','jpeg','gif'); 

if (move_uploaded_file($image_tmp, $image_path . $image_name)) {    

    $sql = "INSERT INTO reviews (name, rating, review, image) VALUES ('$name', '$rating', '$review', '$image_name')";

    if ($conn->query($sql) === TRUE) {
        echo "Review submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Error uploading the image.";
}

$conn->close();
?>
