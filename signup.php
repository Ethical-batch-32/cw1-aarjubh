<?php

include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   //$pass = mysqli_real_escape_string($conn, md5($_POST['password']));
   //$cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
   $user_type = $_POST['user_type'];

   //$select_users = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email' AND password = '$pass'") or die('query failed');
   //$select_users = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'") or die('query failed');
   //$select_users = mysqli_query($conn, "SELECT * FROM `user` WHERE email = '$email'");
   $stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE email = ?");
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
$select_users = mysqli_stmt_get_result($stmt);
   $num_rows = mysqli_num_rows($select_users);
   //$result = mysqli_fetch_assoc($select_users);
   if($num_rows > 0){
    $message[] = 'user already exist!';
 }else{
    // insert the data into the database
    $message[] = 'registered successfully!';
    header('location:login.php');
 }
 


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>signup</title>
    <link rel="stylesheet" href="./css/signupstyle.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
       <img src="images/one.jpg" alt="">
        <div class="text">
          <span class="text-1"><br> </span>
          <span class="text-2"></span>
        </div>
      </div>
      <div class="back">
       <!-- <img class="backImg" src="images/backImg.jpg" alt=""> -->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">  
<div class="signup-form">
  <div class="title">Signup</div>
<form action="process_signup.php" method="post" id="signup">
    <div class="input-boxes">
      <div class="input-box">
        <i class="fas fa-user"></i>
        <input type="name" id="name" name="name" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <i class="fas fa-envelope"></i>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <i class="fas fa-lock"></i>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
      </div>
      <select name="user_type" type="user_type" id="user_type" class="box" >
        <option value="user">user</option>
        <option value="admin">admin</option>
     </select>
      <div class="button input-box">
        <input type="submit" value="Sumbit">
      </div>
      
      <p> Already have an account?<a href="login.php">Login now</a> </p>
</form>
</div>
</div>
</div>
</div>
<script src="./js/validation.js" defer></script>
</body>
</html>






  
</body>
</html>



