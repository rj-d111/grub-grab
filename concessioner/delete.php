<?php
include "../php-connect/db_conn.php";

$productCode = $_GET['id'];


$sql = "DELETE FROM tbl_menu_item WHERE product_code='$productCode'";
$result = mysqli_query($conn, $sql);

header("Location: home.php");

?>