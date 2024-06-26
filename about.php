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
   <!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- custom css file link  -->
  <link rel="stylesheet" href="style.css">


  <!-- About page code  -->
   <title>About us</title>
<section class="about" id="about">
  <h1 class="heading"><span>about</span> us </h1>
  <div class="row">
    <div class="image">
      <img src="imgs/abt.png">
    </div>
    
    <div class="content">
      <h3>Where Health Comes First</h3>
      <p>Welcome to Pharmapro, where your health and well-being are our top priorities. Established with a commitment to excellence in pharmaceutical care, we strive to provide personalized and professional services to meet the diverse healthcare needs of our community.</p>
        <p>Our pharmacy is more than just a place to pick up medications; it's a trusted resource for health information and support. With a focus on patient education and empowerment, we aim to empower you to make informed decisions about your health and wellness.</p>
        <a href="services.php" class="btn"> learn more<span class="fas fa-chevron-right"></span></a>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>          
  <script src="script.js"></script> 
