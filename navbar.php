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
  <link rel="stylesheet" href="style/style.css">
  <title>Grub Grab Menu</title>
</head>

<body class="d-flex flex-column h-100">
  <!--Start of navbar -->
  <nav class="navbar navbar-dark bg-maroon fixed-top">
    <div class="container-xl">
      <!-- Hamburger Menu Left Side -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar"
        aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Center of Navbar -->
      <div class="d-flex justify-content-center">
        <a class="navbar-brand fs-2" href="#">
          <!-- Logo Image -->
          <img src="img/grub-grab.png" class="grub-grab-logo" alt="grub-grab">
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
              <a class="nav-link" href="admin/login.php">Login as Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="concessioner/login.php">Login as Concessioner</a>
            </li>
          </ul>
        </div>
        <!-- End of List in offcanvas body -->
      </div>


    </div>
  </nav>
  <!--End of navbar -->