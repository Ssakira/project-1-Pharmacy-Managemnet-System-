<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">
   <a href="dashboard.php" class="logo"> <i class="fas fa-heartbeat"></i> PharmaPro(Admin)</a>

      <nav class="navbar">
         <a href="dashboard.php">Home</a>
         <a href="products.php">Products</a>
         <a href="placed_orders.php">Orders</a>
         <a href="accounts.php">Accounts</a>
         <a href="admin_contacts.php">Messages</a>
      </nav>

      <div class="icons">
    <a href="logout.php" class="fas fa-power-off"></a>
   </div>

</header>

