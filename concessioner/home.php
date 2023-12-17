<?php 
session_start();
include "navbar.php";
include "../php-connect/db_conn.php";

if (!isset($_SESSION['email'])) {
  header("Location: login.php");
}
$concessionerID = $_SESSION['concessionerID'];

$sql = "SELECT * FROM tbl_menu_item WHERE concessionerID = '$concessionerID'";

$result = mysqli_query($conn, $sql);
?>

<div class="bg-light">
  <div class="container-md">
    <div class="fs-2 mb-3">Product Overview</div>
    <a href="add-menu.php" class="btn btn-success">+ Add Menu</a>
  </div>  
</div>
        <div class="container-md my-3">
          <!-- Alert Message -->
          <?php
              if (isset($_SESSION['alertmessage'])) {
              echo $_SESSION['alertmessage'];
              // Clear the session variable after displaying
              }
          ?>
          <!-- End of Alert Message -->
        </div>


<!-- Table Display -->
<div class="container-md">
<table class="table table-striped table-hover"  id="container">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Picture</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Price</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo '<th scope="row">' . $i . '</td>';
                        echo "<td>{$row['item_name']}</td>";
                        echo '<td>
                        <div class="image-container">
                        <img src="'.$row["product_pic"].'" alt="">
                        </div>
                        </td>';
                        echo "<td>{$row['product_code']}</td>";
                        echo "<td>PHP {$row['price']}</td>";
                        echo "<td>{$row['category']}</td>";
                        echo "<td>{$row['status']}</td>";
                        echo '</td>';
                        echo '<td>';
                        echo '<p><a class="link-offset-2 link-underline link-underline-opacity-0" href="#">Edit</a></p>';
                        echo '<div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          More
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="inactive.php?id=' . $row['product_code'] . '">Set Active/Inactive</a></li>
                          <li><a class="dropdown-item" href="delete.php?id=' . $row['product_code'] . '">Delete</a></li>
                        </ul>
                      </div>';
                        echo '</td>';
                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
</div>

  
<?php include "../footer.php" ?>
