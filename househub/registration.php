<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM rate_b WHERE username = '$username' OR  email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO rate_b VALUES('','$name','$username','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <meta name="viewport" content="view-device-width , initial-scale=1.0">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>HomeHub Registration</title>
    <link rel="icon" type="image/x-icon" href="image\HH.png">
  </head>
  <body>
    <div class="hero2">
      <nav>
        <h2 class="logo">Home<span>Hub</span></h2>
        <ul>
    </nav>
  </header> 
   <div class="center">
    <h1>SIGNUP</h1>
    <form method="post">
    <div class="text_field">
    <input type="text" placeholder="Enter Name" name="name" id = "name" required value="">
    <input type="text" placeholder="Enter Username" name="username" id = "username" required value=""> <br>
    <input type="email"  placeholder="Enter Email" name="email" id = "email" required value=""> <br> 
    <input type="password" placeholder="Enter  Password"  name="password" id = "password" required value=""> <br>
    <input type="password"placeholder="Confirm Password"  name="confirmpassword" id = "confirmpassword" required value=""> <br> 
    <br>
  <button type="submit" name="submit">REGISTER</button>
<br>
<br>
 <a> Already Have an Account ? <a href="login.php">LOGIN</a>
 <br>
    </form>
</div>
    <p> Copyright &copy; 2022 HomeHub.com</p>
</body>
</div>
    <footer>
      <p> Copyright &copy; 2022 HomeHub.com</p>
    </footer>
</html>