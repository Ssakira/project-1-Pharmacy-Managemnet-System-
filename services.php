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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="style.css">

  <title>Service</title>
<section class="services" id="services">
  <h1 class="heading"> our<span>services</span></h1>

<div class="box-container">
<div class="box">
<i class="fas fa-pills"></i>
<h3>medicines</h3>
<p>From over-the-counter remedies to prescription medications, we prioritize safety, efficacy, and your well-being.</p>
   <a href="medicine.php" class="btn"> learn more<span class="fas fa-chevron-right"></span></a>
    </div>

  <div class="box">
    <i class="fas fa-shipping-fast"></i>
      <h3>Delivery</h3>
      <p>Say goodbye to waiting in line and hello to doorstep convenience.</p>
         <a href="orders.php" class="btn"> learn more<span class="fas fa-chevron-right"></span></a>
          </div>

  <div class="box">
    <i class="fas fa-user-md"></i>
      <h3>physicians</h3>
      <p>Our experienced doctors bring expertise in various medical specialties, ensuring you receive the highest standard of care and guidance.</p>
         <a href="#" class="btn"> learn more<span class="fas fa-chevron-right"></span></a>
          </div>
  </div>
</section>

<?php
include 'footer.php';
?>
  <script src="script.js"></script> 
