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
    <title>Document</title>
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
        <div class="container mb-5" style="margin-top: 200px; height: 100vh;">
        <div class="text-center">
            <img src="../img/check-icon.png" alt="" srcset="" style="height: 150px;">
            <h1 class="mt-3 mb-5">Your order has been placed successfully</h1>
            <a href="home.php" class="btn btn-danger btn-lg">Back to Main Page</a>
        </div>
        </div>
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