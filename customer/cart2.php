<?php 
session_start();
include "../php-connect/db_conn.php";
include "navbar.php"; 

$customerID = $_SESSION['id'];
//Get the order id of the customer
$sql = "SELECT * FROM tbl_order WHERE customerID='$customerID'";
$orderID = mysqli_fetch_assoc(mysqli_query($conn, $sql))['orderID'];


$sql = "SELECT * FROM tbl_order_menu WHERE orderID='$orderID'";
$result = mysqli_query($conn, $sql);
?>
    <!-- Start of Content -->
    <main class=" mt-5 pt-5 bg-light">
        <div class="container-md">
        <a href="home.php" class="text-decoration-none link-dark">
                <div class="fs-6 mt-5 mb-3"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</div>
            </a>
            <div class="fs-2 mb-3">Order Checkout</div>
            <div class="row">
                <!-- Start of Container left Side -->
                <?php while($row = mysqli_fetch_assoc($result)) :?>
                <div class="col-lg-8">
                    <!-- Justine's Store -->
                    <div class="container mb-3">
                      <!-- 1st Row -->
                        <div class="row bg-white border p-2">
                            <!-- Check Box -->
                            <div class="col-1">
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." checked="">
                            </div>
                            <!-- Select All Label -->
                            <div class="col-4">
                                <label class="form-check-label" for="flexCheckDefault">
                                <?php $sql2 = "SELECT *
        FROM tbl_concessioner c
        JOIN tbl_menu_item m ON c.concessionerID = m.concessionerID
        JOIN tbl_order_menu om ON m.menuItemID = om.MenuItemID
        WHERE om.MenuItemID = '{$row['MenuItemID']}
        GROUP BY c.business_name'";
        $res2 = mysqli_query($conn, $sql2);

        echo var_dump(mysqli_fetch_assoc($res2));
        while($row2 = mysqli_fetch_assoc($res2)):
        
        $concessionerID = $row2['concessionerID'];
       
                   ?></label>
                            </div>
                        </div>
                        <!-- 2nd Row -->
                        <?php           
             $sql3 = "SELECT * FROM tbl_menu_item m JOIN tbl_order_menu om ON m.menuItemID=om.MenuItemID WHERE m.concessionerID ='$concessionerID'";
            $res3 = mysqli_query($conn,$sql3);
            while($row3= mysqli_fetch_assoc($res3)):
            ?>
                        <div class="row bg-white border pt-3 pb-3 ps-2">
                                <!-- Check Box -->
                                <div class="col-1">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." checked="">
                                </div>
                                <div class="row col-11">
                                    <!-- Picture -->
                                    <div class="col-4 col-md-3">
                                        <img src="../concessioner/<?php echo $row3['product_pic'] ?>" alt="" class="img-fluid">
                                    </div>
                                    <!-- Product Description -->
                                    <div class="row col-6 col-sm-4 align-items-center">
                                        <div class="text-start"><?php echo $row3['item_name'] ?></div>
                                    </div>
                                    <!-- Price -->
                                    <div class="row col-6 col-md-3 align-items-center">
                                        <div class="text-danger fw-bold" id="price-1">₱ <?php echo $row3['price']?>.00</div>
                                    </div>

                                    <!-- Quantity -->
                                    <div class="row col-6 col-md-2 align-items-center">
                                        <!-- Input quantity value -->
                                        <div class="d-flex align-items-center justify-content-center">

                                        <form action="qty.php" method="post">
                                            <input type="hidden" name="itemName" value="<?php echo $row3['item_name'] ?>">
                                            <button type="submit" id="minus" name="minus" class="btn btn-outline-secondary d-inline">-</button>
                                            <input type="number" class="form-control text-center d-inline" id="order-1" name="qty" style="width: 50px;" required>
                                            <button type="submit" id="plus" name="plus" class="btn btn-outline-secondary d-inline rounded-end">+</button>
                                        </form>
                                        </div>


                                    </div>

                                </div>
                            </div>
                            <?php endwhile; ?>
                            <?php endwhile; ?>

                        <div class="row bg-white border p-2 fw-bold">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <div class="me-auto">Order Total</div>
                            </div>
                            <div class="col-2 ms-auto">

                                <div class="text-end" id="order-total">P80.00</div>
                            </div>
                            <div class="col-1"></div>


                        </div>
                    </div>


                </div>
                <?php endwhile; ?>
                <!-- End of Container Left Side -->

                <!-- Start of Container Right Side -->
                <div class="col-lg-4">
                    <h3 class="mt-3 mb-3">Total Payment</h3>    
                
                    <div class="col-lg-12">
                        <!-- Justine's Store -->
                        <div class="container">
    
                            <!-- 1st Row -->
                            
                            <!-- 2nd Row -->
                            
    
                            
                        <div class="row bg-white border p-2 fw-bold">
                                <div class="col-1"></div>
                                <div class="col-5 py-3">
                                    <div class="me-auto">Cart Total</div>
                                </div>
                                <div class="col-5 ms-auto py-3">
    
                                    <div class="text-end" id="cart-total">P 640.00</div>
                                </div>
                                <div class="col-1"></div>
    
    <div class="text-center pt-3 ps-3 pe-0">
                            <a class="btn btn-danger col-11" href="payment.php">Check Out</a></div></div></div>
    
    
                    </div></div>
                <!-- End of Container Right Side -->
            </div>

        </div>

    </main>

    <br><br><br><br><br><br><br><br><br><br>
    <!-- End of Content -->

    <?php include "../footer.php" ?>