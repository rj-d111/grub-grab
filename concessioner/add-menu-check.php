<?php
session_start();
// Include your database connection file
include "../php-connect/db_conn.php";


// Get concessioner ID from session
$concessionerID = $_SESSION['concessionerID'];

// 1. Validate user input
// ... (Add code to validate item_name, description, price)

// 2. Generate unique product code
$unique = false;
do {
  $product_code = rand(1000000, 9999999);
  $check_code = mysqli_query($conn, "SELECT COUNT(*) FROM tbl_menu_item WHERE product_code = '$product_code'");
  $code_exists = mysqli_fetch_array($check_code)[0];
} while ($code_exists > 0);

// 3. Validate and handle product picture
     // Define allowed file formats and maximum file size
     $allowedFormats = array('jpg', 'jpeg', 'png', 'pdf', 'heic', 'hif', 'webp', 'bmp', 'tif', 'tiff');
     $maxFileSize = 10 * 1024 * 1024; // 10 MB
 
     // Function to get file extension
     function getFileExtension($filename) {
         return pathinfo($filename, PATHINFO_EXTENSION);
     }
 
     // Function to create a folder if it doesn't exist
     function createFolder($folderName) {
         if (!file_exists($folderName)) {
             mkdir($folderName, 0777, true);
         }
     }
 
     // Function to handle file upload
     function uploadFile($fileInputName, $folderName, $allowedFormats, $maxFileSize) {
         $filename = $_FILES[$fileInputName]['name'];
         $fileSize = $_FILES[$fileInputName]['size'];
         $fileTmpName = $_FILES[$fileInputName]['tmp_name'];
         $fileError = $_FILES[$fileInputName]['error'];
 
         // Check if file format is allowed
         $fileFormat = getFileExtension($filename);
         if (!in_array($fileFormat, $allowedFormats)) {
             echo "Invalid file format. Allowed formats are: " . implode(', ', $allowedFormats);
             return false;
         }
 
         // Check if file size is within limit
         if ($fileSize > $maxFileSize) {
             echo "File size exceeds the maximum limit (10MB).";
             return false;
         }
 
         // Create a folder for each customer using customerID
         createFolder($folderName);
 
         // Move the uploaded file to the specified folder
         $destination = $folderName . '/' . $filename;
         move_uploaded_file($fileTmpName, $destination);
 
         return $destination; // Return the file path for database storage
     }

        // Upload Product Picture
        $productPicPath = uploadFile('product_pic', 'uploads/' . $concessionerID, $allowedFormats, $maxFileSize);



// 4. Prepare and execute SQL statement
$item_name = $_POST['item_name'];
$description = $_POST['description'];
$price = $_POST['price'];
$category = $_POST['category'];

$stmt = mysqli_prepare($conn, "INSERT INTO tbl_menu_item (concessionerID, product_code, item_name, description, price, product_pic, category) VALUES (?, ?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, "sssssss", $concessionerID, $product_code, $item_name, $description, $price, $productPicPath, $category);
mysqli_stmt_execute($stmt);

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($conn);

// Success message
echo "<script>alert('Menu item added successfully!');</script>";

header("Location: home.php");
exit();
?>