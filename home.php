<?php

include 'connect.php';

session_start();

$user_id = $_SESSION['user_id']; 

if(!isset($user_id)){
   header('location:login.php'); 
} 
?>

<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Pharmacy Management System</title>


<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="style.css">



</head>
<body>
  

<section class="home" id="home">

  <div class="image">
    <img src="imgs/home-img.jpg" alt="">
  </div>

  <div class="content">
    <h3>Pharmacy:where hope meets expertise</h3>
    <p>Together, hope and expertise form the cornerstone of the pharmacy profession.We create a space where patients can find reassurance,
       support, and effective solutions to their health challenges, fostering a sense of trust and confidence in the healthcare system.</p>
    <a href="contact.php" class="btn">contact Us<span class="fas fa-chevron-right"></span></a>
  </div>

</section>


<section class="icons-container">

  <div class="icons">
    <i class="	fas fa-female"></i>
    <h3>5+</h3>
    <p>Pharmacist at work</p>
  </div>

<div class="icons">
    <i class="fas fa-users"></i>
    <h3>5+</h3>
    <p>satisfied customers</p>
  </div>  

  <div class="icons">
    <i class="fas fa-user-md"></i>
    <h3>2+</h3>
    <p>Doctors</p>
  </div> 

  <div class="icons">
    <i class="fas fa-procedures"></i>
    <h3>1</h3>
    <p>emergency service</p>
  </div>

</section>

<?php
include 'footer.php';
?>

<script src="script.js"></script> 

</body>
</html>