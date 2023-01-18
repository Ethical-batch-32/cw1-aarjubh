<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Need someone to talk to?</h3>
      <p>Make appointment with us. Meet with the best Therapists and see the wonders.</p>
      <a href="contact.php" class="white-btn">Appointment</a>
   </div>

</section>


<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/home.png" alt="">
      </div>

      <div class="content">
         <h3>about us</h3>
         <p>Let's break the cycle.
There's a powerful connection between how we think, how we act, and how we feel. Our therapists use clinically proven approaches to help you see how they're connected for you, then learn new habits to break this exhausting cycle.</p>
         <a href="about.php" class="btn">read more</a>
      </div>

   </div>

</section>



<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>