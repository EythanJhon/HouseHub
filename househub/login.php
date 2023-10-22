<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: home.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM rate_b WHERE username = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('No User Found'); </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="styles.css">
<head>
  <meta charset="utf-8">
  <title>HomeHub Login</title>
  <link rel="icon" type="image/x-icon" href="image\HH.png">
<body>
    <div class="hero1">
      <nav>
        <h2 class="logo">Home<span>Hub</span></h2>
        <ul>
    </nav>
  </header> 
  <div class="center">
    <h1>Login</h1>
    <form method="post">
      <div class="text_field">
      <label for="usernameemail">USERNAME OR EMAIL</label>
      <input type="text" name="usernameemail" id = "usernameemail" required value=""> 
    </div>
       <div class="text_field">
      <label for="password">Password</label>
      <input type="password" name="password" id = "password" required value=""> 
    </div>
    <div class="pass">New here? Create a Account </div>
      <button type="submit" name="submit">Login</button>
  </form>
    <br>
    <a> Not A Member? <a href="registration.php">Register Here</a>
    <br>
  </body>
  </div>
</html>