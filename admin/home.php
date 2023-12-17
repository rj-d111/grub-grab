<?php
session_start();
include "navbar.php";
include "../php-connect/db_conn.php";

// Assume you have a database connection established
// Include your database connection logic here

if (isset($_SESSION['email'])) {
?>

  <!-- Start of Content -->
  <main class="flex-shrink-0">
    <div class="container my-5">

      <!-- Tabbed Content -->
      <nav>
        <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Manage Customers</button>
          <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Manage Concessioners</button>
        </div>
      </nav>


      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade active show" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <!-- Start of tab 1 -->
          <?php
          //SQL query to join tbl_application and tbl_customer
          $sql = "SELECT * FROM tbl_customer";
          // Execute the query
          $result = mysqli_query($conn, $sql);
          ?>
          <a href="add-customer.php" class="btn btn-maroon my-3">+ Add Customer</a>


          <h2 class="text-maroon mb-3">Customer Profile List</h2>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <!-- <th scope="col">Date Created</th> -->
                <th scope="col">Contact No.</th>
                <th scope="col">Actions</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo '<th scope="row">' . $i . '</td>';
                  echo "<td>{$row['first_name']} {$row['last_name']}</td>";
                  echo "<td>{$row['email']}</td>";
                  echo "<td>{$row['contact_no']}</td>";
                ?>
                  <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                  </td>
                <?php
                  echo "</tr>";
                  $i++;
                }
                ?>
            </tbody>
          </table>
        </div>
        <!-- End of tab 1 -->
      </div>
      <!--Start of tab 2 -->
      <?php
      //SQL query to join tbl_application and tbl_customer
      $sql = "SELECT * FROM tbl_concessioner";
      // Execute the query
      $result = mysqli_query($conn, $sql);
      ?>
      <a href="add-customer.php" class="btn btn-maroon my-3">+ Add Concessioner</a>


      <h2 class="text-maroon mb-3">Concessioner Profile List</h2>
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Business Name</th>
            <!-- <th scope="col">Date Created</th> -->
            <th scope="col">Contact No.</th>
            <th scope="col">Actions</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <?php
            $i = 1;
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
              echo '<th scope="row">' . $i . '</td>';
              echo "<td>{$row['firstName']} {$row['lastName']}</td>";
              echo "<td>{$row['email']}</td>";
              echo "<td>{$row['business_name']}</td>";
              echo "<td>{$row['contact_no']}</td>";
            ?>
              <td>
                <button class="btn btn-primary">Edit</button>
                <button class="btn btn-danger">Delete</button>
              </td>
            <?php
              echo "</tr>";
              $i++;
            }
            ?>
        </tbody>
      </table>
    </div>
    <!--End of tab 2 -->
    </div>
    </div>
    </div>

    <!-- End of Tabbed Content -->


  </main>

<?php
  include "../footer.php";
} else {
  header("Location: login.php");
}
?>