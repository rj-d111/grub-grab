<?php include "navbar.php" ?>
<!-- Start of Sign up -->

<div class="container mt-5">
  <h1 class="mb-5">Concessioner Registration Form</h1>
  <form class="row g-3 needs-validation" method="post" action="signup-check.php">
    <div class="col-md-6">
      <label for="firstName" class="form-label">First Name:</label>
      <input type="text" class="form-control" id="firstName" name="firstName" required>
      <div class="invalid-feedback">
        Please enter your first name.
      </div>
    </div>
    <div class="col-md-6">
      <label for="lastName" class="form-label">Last Name:</label>
      <input type="text" class="form-control" id="lastName" name="lastName" required>
      <div class="invalid-feedback">
        Please enter your last name.
      </div>
    </div>
    <div class="col-md-6">
      <label for="business_name" class="form-label">Business Name:</label>
      <input type="text" class="form-control" id="business_name" name="business_name" required>
      <div class="invalid-feedback">
        Please enter your business name.
      </div>
    </div>
    <div class="row my-3">
      <div class="col-md-6">
        <label for="email" class="form-label">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
        <div class="invalid-feedback">
          Please enter a valid email address.
        </div>
      </div>
      <div class="col-md-6">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" name="password" required>
        <div class="invalid-feedback">
          Please enter a password.
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <label for="contact_no" class="form-label">Contact No.:</label>
      <input type="text" class="form-control" id="contact_no" name="contact_no" required>
      <div class="invalid-feedback">
        Please enter your contact number.
      </div>
    </div>
    <div class="col-md-12">
      <button type="submit" class="btn btn-maroon">Register</button>
    </div>
  </form>
</div>

<script>
  (function() {
    'use strict';

    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply validation to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission on invalid input
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false
      // Add custom JavaScript for specific functionality (optional)

    )
  });

  // Example: validate contact number format
  // document.getElementById('contact_no').addEventListener('input', function() {
  //   // Your custom validation logic goes here
  //   // Update invalid-feedback message if needed
  // });
</script>
<?php include "../footer.php" ?>