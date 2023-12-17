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
  <title>Grub Grab</title>
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
          <img src="../img/grub-grab.png" class="grub-grab-logo" alt="grub-grab">
        </a>
      </div>

      <!-- Right side of navbar -->
      <div class="d-flex">
        <div class="shopping-icons mr-5">
          <a href="cart.php" class="icons-btn d-inline-block text-white pe-3">
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
  
  <main class="flex-shrink-0">
  <div class="container-xl">

    <!-- Popular Filipino Dishes -->
    <div class="fs-1 pt-5 pb-5">Popular Filipino Dishes</div>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../img/menudo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Menudo</h5>
            <p class="card-text text-secondary">Justine's Store</p>
            <div class="d-flex justify-content-between">
              <p>₱80.00</p>
              <a class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../img/bicol-express.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bicol Express</h5>
            <p class="card-text text-secondary">Menta's Store</p>
            <div class="d-flex justify-content-between">
              <p>₱85.00</p>
              <a href="#" class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../img/adobo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Adobo</h5>
            <p class="card-text text-secondary">Michael's Store</p>
            <div class="d-flex justify-content-between">
              <p>₱85.00</p>
              <a href="#" class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../img/sisig.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Sisig</h5>
            <p class="card-text text-secondary">Justine's Store</p>
            <div class="d-flex justify-content-between">
              <p>₱85.00</p>
              <a href="#" class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Drinks -->
    <div class="fs-1 pt-5 pb-5">Drinks</div>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../img/bottled-water.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bottled Water</h5>
            <p class="card-text text-secondary">Ana's Store</p>
            <div class="d-flex justify-content-between">
              <p>₱30.00</p>
              <a href="#" class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../img/coke.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Coke</h5>
            <p class="card-text text-secondary">Michelle's Store</p>
            <div class="d-flex justify-content-between">
              <p>₱40.00</p>
              <a href="#" class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../img/mountain-dew.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Mountain Dew</h5>
            <p class="card-text text-secondary">Dewey's Store</p>
            <div class="d-flex justify-content-between">
              <p>₱50.00</p>
              <a href="#" class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-4 col-lg-3 pb-5">
        <div class="card">
          <img src="../img/royal.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Royal</h5>
            <p class="card-text text-secondary">Alyssa's Store</p>
            <div class="d-flex justify-content-between">
              <p>₱60.00</p>
              <a href="#" class="btn btn-primary rounded-circle"><b>+</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
  <!-- End of Content -->

  <!-- Start of Footer -->
  <footer class="bg-maroon text-white pt-5 pb-5">
    <div class="container">
      <div class="row">
        <!-- Col 1 -->
        <div class="col-sm-6 col-md-3">
          <!-- Insert Logo Image -->
          <img src="../img/grub-grab.png" class="img-fluid" style="max-height: 200px; width: auto;" alt="grub-grab">
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
          <p>Grub Grab is a Canteen Management Ordering System that allows users to place orders online, thereby
            avoiding long queues and waiting times. The system’s user-friendly interface and efficient payment system
            make it stand out among other canteen management systems. This eliminates the need to wait in line, which
            can be especially beneficial during peak hours. Grub Grab is an excellent solution for anyone looking to
            streamline their canteen experience and make their transactions more convenient.
          </p>
        </div>
      </div>
    </div>

  </footer>

  <script src="../script/index.js"></script>
  <!-- End of Footer -->
</body>

</html>