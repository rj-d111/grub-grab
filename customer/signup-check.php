<?php
include "../php-connect/db_conn.php";



$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$email = $_POST["email"];
$password = $_POST["password"];
$contact_no = $_POST["contact_no"];

//Hash password First
$password = md5($password);

// $sql = "INSERT INTO tbl_concessioner VALUES(firstname='$firstName', lastName='$lastName', password='$password', contact_no='$contact_no')";

// mysqli_query($conn, $sql);

$stmt = mysqli_prepare($conn, "INSERT INTO tbl_customer (firstname,lastname, email, password,contact_no) VALUES (?, ?, ?, ?,?,?)");
mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email ,$password, $contact_no);
mysqli_execute($stmt);

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

echo "<script>alert('Successfully registered');</script>";
header("Location: login.php");

?>
<script>
setTimeout(function(){
  window.location.href = "login.php";
}, 1000); // 1000 milliseconds is 1 second delay
</script>