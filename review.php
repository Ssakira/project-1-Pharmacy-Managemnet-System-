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
  <title>Review</title>

<section class="review" id="review">
  <h1 class="heading">client's <span>review</span></h1>
  <div class="box-container">
    <div class="box">
      <img src="imgs/boy.png" alt="">
      <h3>Ram Bahadur Thapa</h3>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p class="text">Online Pharmacy has very competitive pricing and huge range of products. They are incredibly efficient and helpful. And delivery was amazingly fast.</p>
    </div>

    <div class="box">
      <img src="imgs/go" alt="">
      <h3>Rosie Rai</h3>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p class="text">Although I was a little apprehensive at first I have used online pharmacy for 8 separate orders. Each time the process was seamless and the goods ordered were promptly delivered. I would highly recommend them</p>
    </div>

    <div class="box">
      <img src="imgs/grand" alt="">
      <h3>Jhon Kumar Shrestha</h3>
      <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
      </div>
      <p class="text">It's so hard to get Brolene eye drops in pharmacies, but I had the product 3 days after ordering online. Fantastic service, will definitely shop online here again</p>
    </div>
  </div>
</section>

<?php
include 'footer.php';
?>
