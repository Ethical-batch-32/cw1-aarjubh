<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $number = $_POST['number'];
   $msg = mysqli_real_escape_string($conn, $_POST['message']);
   $date = $_POST['date'];

   //$select_message = mysqli_query($conn, "SELECT * FROM `form` WHERE name = '$name' AND number = '$number' AND message = '$msg' AND date ='$date'") or die('query failed');
   $stmt = mysqli_prepare($conn, "SELECT * FROM `form` WHERE name = ? AND number = ? AND message = ? AND date = ?");
   mysqli_stmt_bind_param($stmt, "ssss", $name, $number, $msg, $date);
   mysqli_stmt_execute($stmt);
   $select_message = mysqli_stmt_get_result($stmt);
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      //mysqli_query($conn, "INSERT INTO `form`( name, number, message,date) VALUES( '$name', '$number', '$msg', '$date')") or die('query failed');
      $stmt = mysqli_prepare($conn, "INSERT INTO `form`( name, number, message,date) VALUES(?,?,?,?)");
      mysqli_stmt_bind_param($stmt, "ssss", $name, $number, $msg, $date);
      mysqli_stmt_execute($stmt);
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<h1 class="title">Message us</h1>
  

<section class="contact">

   <form action="" method="post">
      <h3>say something!</h3>
      <input type="text" name="name" required placeholder="enter your name" class="box">
      <input type="number" name="number" required placeholder="enter your number" class="box">
      <textarea name="message" class="box" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="send" class="btn">
   </form>

</section>




<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>