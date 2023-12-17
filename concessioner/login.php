<?php 
session_start();
include "navbar.php" 
?>
<!-- Start of main content -->
<div class="d-flex justify-content-center">
        <div class="card py-3 px-5 my-5 col-md-5" >
            <!-- Start of Login Page -->
            <form class="form-signin" action="function.php" method="post">
                <div class="text-center">
                    <img src="../img/logo (with shadow).png" alt="" width="200" class="mb-4">
                    <h1 class="h3 mb-3 fw-bold">CONCESSIONER LOG IN</h1>
                </div>
                <?php if(isset($_GET['incorrect']) && $_GET['incorrect']){ ?>
                    <div class="alert alert-info" role="alert">Incorrect Email or Password</div>
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
                  <div class="my-3">
                  <p>Don't have an account? <a class="link-offset-2 link-underline link-underline-opacity-0" href="signup.php">Sign up here.</a></p>
                    
                  </div>
                <div class="text-center">
                    <button class="btn btn-maroon" value="admin-log-in" name="submit" type="submit">Sign in</button>
                </div>
                <p class="mt-5 mb-3 text-muted text-center">© 2023 ALL RIGHTS RESERVED</p>
            </form>
            <!-- End of Login Page -->
        </div>
    </div>

    <!-- End of main content -->
<?php include "../footer.php" ?>