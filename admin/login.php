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
  <title>Grub Grab Customer Login</title>
</head>

<body class="d-flex flex-column h-100">
  <nav class="navbar navbar-dark bg-maroon fixed-top">
    <div class="container-xl">
      <!-- Hamburger Menu Left Side -->
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvassuccessNavbar"
        aria-controls="offcanvassuccessNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Center of Navbar -->
      <div class="d-flex ms-auto me-auto">
        <a class="navbar-brand fs-2" href="#">
          <!-- Logo Image -->
          <img src="../img/grub-grab.png" class="grub-grab-logo" alt="grub-grab">
        </a>
      </div>


      <!-- Appearing when clicked -->
      <div class="offcanvas offcanvas-success offcanvas-start text-bg-maroon" tabindex="-1" id="offcanvassuccessNavbar"
        aria-labelledby="offcanvassuccessNavbarLabel">
        <div class="offcanvas-header text-white bg-maroon">
          <h3 class="offcanvas-title" id="offcanvassuccessNavbarLabel">Grub and Grab</h3>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <!-- List in offcanvas body -->
        <div class="offcanvas-body bg-maroon">
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
              <a class="nav-link" href="../concessioner/login.php">Login as Concessioner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../customer/login.php">Login as Customer</a>
            </li>
          </ul>
        </div>
        <!-- End of List in offcanvas body -->
</div>    
    </div>
</nav>
<!--End of navbar -->

<!-- Start of main content -->
<div class="d-flex justify-content-center" style="margin-top: 100px;">
        <div class="card py-3 px-5 my-5" style="width: 30rem;">
            <!-- Start of Login Page -->
            <form class="form-signin" action="function.php" method="post">
                <div class="text-center">
                    <img src="../img/logo (with shadow).png" alt="" width="200" class="mb-4">
                    <h1 class="h3 mb-3 fw-bold">ADMIN LOG IN</h1>
                </div>
                <?php if(isset($_GET['incorrect']) && $_GET['incorrect']){ ?>
                    <div class="alert alert-success" role="alert">Incorrect Email or Password</div>
                <?php }?>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="" autofocus="">
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <div class="form-check mb-3">
                    <input type="checkbox" value="remember-me" id="rememberMe" class="form-check-input">
                    <label for="rememberMe" class="form-check-label">Remember me</label>
                </div>
                <div class="text-center">
                    <button class="btn btn-maroon" value="admin-log-in" name="submit" type="submit">Sign in</button>
                </div>
                <p class="mt-5 mb-3 text-muted text-center">© 2023 ALL RIGHTS RESERVED</p>
            </form>
            <!-- End of Login Page -->
        </div>
    </div>

 <?php include "../footer.php" ?>