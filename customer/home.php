<?php 
session_start();
include "../php-connect/db_conn.php";

//Go to home if the user is not log in yet
if(!isset($_SESSION['email'])){
  header("Location: login.php");
  exit;
}
include "navbar.php";
?>

  <!-- Start of Content -->
  
  <main class="flex-shrink-0">
  <div class="container-xl">

  <?php 
  $sql = "SELECT * FROM tbl_menu_item INNER JOIN tbl_concessioner ON tbl_menu_item.concessionerID = tbl_concessioner.concessionerID WHERE category='main dish'";
  $result = mysqli_query($conn, $sql);
  
  ?>
    <!-- Popular Filipino Dishes -->
    <div class="fs-1 pt-5 pb-5">Popular Filipino Main Dishes</div>
    <div class="row">
      <!-- Card 1 -->
      <?php while($row = mysqli_fetch_assoc($result)){?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../concessioner/<?php echo $row['product_pic']?>" class="card-img-top card-img-top-item" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['item_name']?></h5>
            <p class="card-text text-secondary"><?php echo $row['business_name'] ?></p>
            <div class="d-flex justify-content-between">
              <p>₱<?php echo $row['price']?>.00</p>
              <!-- <a class="btn btn-primary rounded-circle" href="addtocart.php?menuItem=<?php echo $row['menuItemID'] ?>&concessioner=<?php echo $row['concessionerID'] ?>&price=<?php echo $row['price'] ?>"><b>+</b></a> -->
              <buttton class="btn btn-primary rounded-circle"><b>+</b></button>
            </div>
          </div>
        </div>
      </div>
      <?php }?>

   <!-- Another Category -->
      <?php 
  $sql = "SELECT * FROM tbl_menu_item INNER JOIN tbl_concessioner ON tbl_menu_item.concessionerID = tbl_concessioner.concessionerID WHERE category='drinks'";
  $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result)):
     ?>
    <div class="fs-1 pt-5 pb-5">Drinks</div>
    <div class="row">
      <!-- Card 1 -->
      <?php  while($row = mysqli_fetch_assoc($result)){ ?>
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../concessioner/<?php echo $row['product_pic']?>" class="card-img-top card-img-top-item" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?php echo $row['item_name']?></h5>
            <p class="card-text text-secondary"><?php echo $row['business_name'] ?></p>
            <div class="d-flex justify-content-between">
              <p>₱<?php echo $row['price']?>.00</p>
              <a class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>
      <?php } endif;?>
  

    </div>
  </div>
</main>
  <!-- End of Content -->
<script src="../script/index.js"></script>
 <?php include "../footer.php" ?>