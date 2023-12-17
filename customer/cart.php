<?php 
session_start();
include "../php-connect/db_conn.php";
include "navbar.php"; 
$sql = "SELECT * FROM";
?>
    <!-- Start of Content -->
    <main class="flex-shrink-0 mt-5 pt-5">
        <div class="container-md">
        <a href="home.php" class="text-decoration-none link-dark">
                <div class="fs-6 mt-5 mb-3"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</div>
            </a>
            <div class="fs-2 mb-3">Order Checkout</div>

            <div class="row">
                <!-- Start of Container left Side -->
                <div class="col-lg-8">
                    <!-- Justine's Store -->
                    <div class="container">

                        <!-- 1st Row -->
                        <div class="row bg-white border p-2">

                            <!-- Check Box -->
                            <div class="col-1">
                                <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." checked="">
                            </div>

                            <!-- Select All Label -->
                            <div class="col-4">
                                <label class="form-check-label" for="flexCheckDefault">Justine's Store</label>
                            </div>
                        </div>
                        <!-- 2nd Row -->
                        <div class="row bg-white border pt-3 pb-3 ps-2">
                                <!-- Check Box -->
                                <div class="col-1">
                                    <input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..." checked="">
                                </div>
                                <div class="row col-11">
                                    <!-- Picture -->
                                    <div class="col-4 col-md-3">
                                        <img src="../img/adobo.jpg" alt="" class="img-fluid">
                                    </div>
                                    <!-- Product Description -->
                                    <div class="row col-6 col-sm-4 align-items-center">
                                        <div class="text-start">Adobo</div>
                                    </div>
                                    <!-- Price -->
                                    <div class="row col-6 col-md-3 align-items-center">
                                        <div class="text-danger fw-bold" id="price-1">₱ 80.00</div>
                                    </div>
                                    <!-- Quantity -->
                                    <div class="row col-6 col-md-2 align-items-center">
                                        <!-- Input quantity value -->
                                        <div class="d-flex align-items-center justify-content-center">

                                            <button type="button" id="minus" class="btn btn-outline-secondary d-inline">-</button>
                                            <input type="text" class="form-control text-center d-inline" id="order-1" value="1" style="width: 50px;">
                                            <button type="button" id="plus" class="btn btn-outline-secondary d-inline rounded-end">+</button>
                                        </div>


                                    </div>


                                </div>
                        </div>

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

                <!-- Llean's Store -->



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