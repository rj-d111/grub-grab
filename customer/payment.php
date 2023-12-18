<!DOCTYPE html>
<html lang="en">

<!-- Head Content -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="../style/style.css">
    <title>Payment</title>
</head>


<body class="d-flex flex-column h-100 bg-light">
    <!--Start of navbar -->
    <nav class="navbar navbar-dark bg-maroon fixed-top">
        <div class="container-xl">
            <!-- Hamburger Menu Left Side -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Center of Navbar -->
            <div class="d-flex justify-content-center">
              <a class="navbar-brand fs-2" href="home.php">
                    <!-- Logo Image -->
                    <img src="../img/grub-grab.png" class="grub-grab-logo" alt="grub-grab" style="max-width: 150px;">
                </a>
            </div>

            <!-- Right side of navbar -->
            <div class="d-flex">
                <div class="shopping-icons mr-5">
                    <a href="cart.html" class="icons-btn d-inline-block text-white pe-3">
                        <i class="fas fa-shopping-cart"></i>
                    </a>
                    <a href="#" class="icons-btn d-inline-block text-white">
                        <i class="fas fa-user"></i>
                    </a>
                </div>
            </div>

            <!-- Appearing when clicked -->
            <div class="offcanvas offcanvas-maroon offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h3 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Grub and Grab</h3>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <!-- List in offcanvas body -->
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Shop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <hr>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </ul>
                </div>
                <!-- End of List in offcanvas body -->
            </div>


        </div>
    </nav>
    <!--End of navbar -->

     <!-- Start of Content -->
     <main class="flex-shrink-0 mt-5 pt-5">
        <div class="container-md">
            <a href="cart.php" class="text-decoration-none link-dark">
                <div class="fs-6 mt-5 mb-3"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</div>
            </a>
            <div class="fs-2 mb-3">Order Details</div>
            <div class="fs-5">Recommended Options</div>
        </div>
        <!-- Cards -->
        <div class="container-md">
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
                                <label class="form-check-label" for="flexCheckDefault">Justine Cuisine</label>
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
                                <div class="row col-6 col-md-3 align-items-center">
                                    <div class="text-secondary text-center">x1</div>
                                                            </div>


                            </div>
                        </div>

                        <div class="row bg-white border p-2 fw-bold">
                            <div class="col-1"></div>
                            <div class="col-2">
                                <div class="me-auto">Order Total</div>
                            </div>
                            <div class="col-2 ms-auto">

                                <div class="text-end">P80.00</div>
                            </div>
                            <div class="col-1"></div>


                        </div>
                    </div>


                </div>




                <!-- End of Container Left Side -->

                <!-- Start of Container Right Side -->
                <div class="col-lg-4">
                    <h3 class="mt-3 mb-3">Select Payment Options</h3>

                    <div class="col-lg-12">
                        <div class="container">

                            <!-- 1st Row -->
                            <div class="row bg-white border p-2 fw-bold d-flex align-items-center">
                                <!-- Cash -->
                                    <div class="form-check ms-3 col-1 my-3">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1" checked>
                                    </div>
                                    <div class="col-2">
                                        <img src="../img/money.svg" alt="Cash" class="img-fluid">
                                    </div>
                                    <div class="col-8">

                                        <label class="form-check-label" for="flexRadioDefault1">Cash on Counter
                                            (COC)</label>
                                    </div>
                                <!-- GCash -->
                                 <div class="form-check ms-3 col-1 my-3">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1">
                                </div>
                                <div class="col-2">
                                    <img src="../img/GCash.png" alt="Cash" class="img-fluid">
                                </div>
                                <div class="col-8">

                                    <label class="form-check-label" for="flexRadioDefault1">GCash</label>
                                </div>

                                <div class="text-center pt-3 ps-3 pe-0">
                                    <a href="success.php" class="btn btn-danger col-11">Place Order</a>
                                    <!-- <button class="btn btn-danger col-11" data-bs-toggle="modal" data-bs-target="#exampleModal">Place Order</button> -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- End of Container Right Side -->
                </div>
            </div>
            <!-- Start of Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">Are you sure you want to proceed?</div>
                      <div class="modal-footer d-flex justify-content-center">
                        <a href="success.php" type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</a>
                        <button type="button" class="btn btn-danger">Cancel</button>
                      </div>
                    </div>
                  </div>
              </div>
              </div>
              </main>
            <!-- End of Modal -->
            <br><br><br><br><br><br><br><br><br><br>
            <!-- End of Content -->

    <!-- Start of Footer -->
    <footer class="bg-maroon text-white pt-5 pb-5">
        <div class="container">
            <div class="row">
                <!-- Col 1 -->
                <div class="col-sm-6 col-md-3">
                    <!-- Insert Logo Image -->
                    <img src="../img/grub-grab.png" class="img-fluid" style="max-height: 200px; width: auto;"
                        alt="grub-grab">
                </div>
                <!-- Col 2 -->
                <div class="col-sm-6 col-md-3">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Shop</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">About</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Contact</a></li>
                    </ul>
                    <p class="text-white">© 2023 FordaGraydes. <br \> All rights reserved.</p>
                </div>
                <!-- Col 3 -->
                <div class="col-sm-6 col-md-3">
                    <p>Unit D EPA Bldg. Block 1 Lot 7 & 9
                        Summerwind 2 Subd. Brgy. Salitran 3,
                        Dasmarinas City, Cavite, Philippines</p>
                    <p>+639478872651</p>
                    <p>fordagraydes@gmail.com</p>
                </div>
                <!-- Col 4 -->
                <div class="col-sm-6 col-md-3">
                    <h5>About</h5>
                    <p>Grub Grab is a Canteen Management Ordering System that allows users to place orders online,
                        thereby
                        avoiding long queues and waiting times. The system’s user-friendly interface and efficient
                        payment system
                        make it stand out among other canteen management systems. This eliminates the need to wait in
                        line, which
                        can be especially beneficial during peak hours. Grub Grab is an excellent solution for anyone
                        looking to
                        streamline their canteen experience and make their transactions more convenient.
                    </p>
                </div>
            </div>
        </div>
        </div>

    </footer>
    <!-- End of Footer -->

    <!-- Insertion of Script -->
    <script src="../script/cart.js">
    </script>
     <script src="../script/payment.js">
    </script>
</body>