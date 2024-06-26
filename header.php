<?php
include 'connect.php';
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <link rel="stylesheet" href="style.css">
  <header class="header">

<div class="header-2">
   <div class="flex">
   <a href="home.php" class="logo"> <i class="fas fa-heartbeat"></i> PharmaPro</a>

   <nav class="navbar">
      <a href="home.php">Home</a>
      <a href="medicine.php">Medicine</a>
      <a href="about.php">About us</a>
      <a href="review.php">Review</a>
        <a href="services.php">Services</a>
        <a href="orders.php">Orders</a>
        <a href="contact.php">Messages</a>

        </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search.php" class="fas fa-search"></a>
         <div id="user-btn" class="fas fa-user"></div>
         <?php
            $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'") or die('query failed');
            $cart_rows_number = mysqli_num_rows($select_cart_number); 
         ?>
         <a href="cart.php"> <i class="fas fa-shopping-cart"></i> <span>(<?php echo $cart_rows_number; ?>)</span> </a>
      </div>

      <div class="user-box">
         <p>username : <span><?php echo $_SESSION['user_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['user_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">logout</a>
      </div>
   </div>
</div>

</header>

<script src="script.js"></script>
