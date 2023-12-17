<?php
include "../php-connect/db_conn.php";

$productCode = $_GET['id'];

$_SESSION['alertmessage'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
Menu ID <strong>'.$productCode.'</strong> has been deleted
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';

$sql = "DELETE FROM tbl_menu_item WHERE product_code='$productCode'";
$result = mysqli_query($conn, $sql);


header("Location: home.php");
?>