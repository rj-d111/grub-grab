<?php
include "../php-connect/db_conn.php";

$customerID = $_GET['id'];

$_SESSION['alertmessage'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
Menu ID <strong>'.$customerID.'</strong> has been deleted
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
';

$sql = "DELETE FROM tbl_customer WHERE customerID ='$customerID'";
$result = mysqli_query($conn, $sql);


header("Location: home.php");
?>