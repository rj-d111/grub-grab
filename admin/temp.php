<?php
//call the database connection
include "../php-connect/db_conn.php";

$errormessage = "";
$successmessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['first_name'];
    $lastname  = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contactno = $_POST['contact_no'];

    //Check if the fields are empty

    do {
        if (empty($firstname) || empty($lastname) || empty($password) || empty($email)) {
            $errormessage = "All the fields are required";
            break;
        }

        //Hash password first
        $password = md5($password);


        //Inserting into the database
        try {
            // Check duplicates first
            $checkDuplicates = $conn->prepare("SELECT email FROM tbl_customer WHERE email = ?");
            $checkDuplicates->bind_param("s", $email);
            $checkDuplicates->execute();
            $checkDuplicates->store_result();

            if ($checkDuplicates->num_rows > 0) {
                $errormessage = "The email has already been taken";
            } else {
                // Username is not taken, proceed with insertion
                $checkDuplicates->close();
                $stmt = $conn->prepare("INSERT INTO tbl_customer (first_name, last_name, email, password, contact_no) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $firstname, $lastname, $email, $password, $contactno);
                $stmt->execute();
                $stmt->close();

                //Clear the form data
                $firstname = "";
                $lastname = "";
                $email = "";
                $password = "";
                $contactno = "";

                $successmessage = "User Added Successfully";

                //Go to the home page
                header("Location: home.php");
                // exit;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } while (false);
}

?>
<!DOCTYPE html>
  <html lang="en">

  <!-- Head Content -->

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />
    <link rel="stylesheet" href="../style/style.css">
    <title>Grub Grab</title>
  </head>

  <body class="d-flex flex-column h-100">
    <!--Start of navbar -->
    <nav class="navbar navbar-dark bg-maroon fixed-top">
      <div class="container-xl">
        <!-- Hamburger Menu Left Side -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
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
            <a href="cart.html" class="icons-btn d-inline-block text-white pe-3">
              <i class="fas fa-shopping-cart"></i>
            </a>
            <a href="#" class="icons-btn d-inline-block text-white">
              <i class="fas fa-user"></i>
            </a>
          </div>
        </div>

        <!-- Appearing when clicked -->
        <div class="offcanvas offcanvas-maroon offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
          <div class="offcanvas-header">
            <h3 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Grub and Grab</h3>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                <a class="nav-link" href="../concessioner/login.php">Login as Concessioner</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../customer/login.php">Login as Customer</a>
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
    <div class="container mb-5" style="margin-top: 150px;">
        <!-- Heading -->
        <h1>New Customer</h1>
        <!-- Start of Alert -->
        <?php if (!empty($successmessage)) {
            echo '<div class="alert alert-success" role="alert">' . $successmessage . '</div>';
        }
        if (!empty($errormessage)) {
            echo '<div class="alert alert-warning" role="alert">' . $errormessage . '</div>';
        }
        ?>
        <!-- End of Alert -->
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="first_name" id="floatingInput" placeholder="" required>
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="last_name" id="floatingInput" placeholder="" required>
                <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" name="contact_no" id="floatingInput" placeholder="" required>
                <label for="floatingInput">Contact No.</label>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
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

    <script src="script/index.js"></script>
    <!-- End of Footer -->
  </body>

  </html>