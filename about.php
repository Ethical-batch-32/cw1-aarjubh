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
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <!--<p> <a href="index.php">home</a> </p>-->
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/child.jpg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>We took feedbacks from our clients for each therapy session they took.We listen to our clients and their expectations.</p>
         <p>With the help of our excellent licensed therapists and research group, we strive to provide best quality service to our clients.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Our Doctors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>With over 7 years of experience in the field, Mr ABC is a passionate mental healthcare professional specialising in youth and relationship counselling.</p>
         <h3>ABC</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>She has more than 15 years' experience working with women and children, and she has also worked extensively with survivors of gender-based violence.</p>
         <h3>XYZ</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>He has been working in the field of mental health for the last 4 years with specialisation in anxiety disorders, addiction, PTSD, and depression.</p>
         <h3>PQY</h3>
      </div>
      
   </div>

</section>








<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>