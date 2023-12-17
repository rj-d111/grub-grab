<?php
session_start();
include "../php-connect/db_conn.php";

$productCode = $_GET['prod'];
$customerID = $_SESSION['id'];

$sql = "INSERT INTO tbl_to_cart (customerID, prodCode) VALUES ('$customerID','$productCode')";
$result = mysqli_query($conn, $sql);

if($result){
    echo "Successfully inserted";
}

?>