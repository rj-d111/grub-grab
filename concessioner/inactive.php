<?php
session_start();
include "../php-connect/db_conn.php";

$productCode = $_GET['id'];

$messageSuccessful = "";
$sql1 = "SELECT status FROM tbl_menu_item WHERE product_code='$productCode'";
$result = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($result)['status'];


if($row =='active'){
    $activated = "inactive";
    $sql2 = "UPDATE tbl_menu_item SET status='$activated' WHERE product_code='$productCode' ";
    $result = mysqli_query($conn, $sql2);

    // Check if the query was successful
}else{
    $activated = "active";
    $sql2 = "UPDATE tbl_menu_item SET status='$activated' WHERE product_code='$productCode' ";
    $result = mysqli_query($conn, $sql2);
}
// Check if the query was successful
if ($result) {
    $_SESSION['alertmessage'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
    Menu ID <strong>'.$productCode.'</strong> has been updated to <strong>'.ucwords($activated).'</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  ';
    header("Location: home.php");
} else {
    // Handle the case where the query failed
    $_SESSION['alertmessage'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    Error updating record:'.mysqli_error($conn).'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  ';
    header("Location: home.php");
}


header("Location: home.php");


?>