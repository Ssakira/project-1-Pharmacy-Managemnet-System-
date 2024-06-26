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

  <script src="script.js"></script> 

<section class="doctors" id="doctors">
  <h1 class="heading">our <span>doctors</span></h1>
  <div class="box-container">

    <div class="box">
      <img src="imgs/doc-1" alt="">
      <h3>Franco Rajbhandari</h3>
      <span>expert doctor</span>
      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
      </div>
    </div>

    <div class="box">
      <img src="imgs/fedoc.webp" alt="">
      <h3>Sakira Maharjan</h3>
      <span>expert doctor</span>
      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
      </div>
    </div>  
  </div>
</section>

<?php
include 'footer.php';
?>
