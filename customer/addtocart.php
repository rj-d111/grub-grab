<?php
session_start();
include "../php-connect/db_conn.php";




//Insert into order table
// Assume you have retrieved customerID from the session
$customerID = $_SESSION['id'];

// Check if a similar order already exists
$sqlCheckOrder = "SELECT orderID FROM tbl_order WHERE customerID = '$customerID' ORDER BY order_date DESC LIMIT 1";
$resultCheckOrder = mysqli_query($conn, $sqlCheckOrder);

if ($resultCheckOrder) {
    $row = mysqli_fetch_assoc($resultCheckOrder);

    if ($row) {
        // A similar order exists for the customer
        $orderID = $row['orderID'];
        echo "A similar order already exists. Order ID: $orderID";
    } else {
        // No similar order found, proceed to insert a new order
        $sqlInsertOrder = "INSERT INTO tbl_order (customerID, order_date) VALUES ('$customerID', NOW())";
        mysqli_query($conn, $sqlInsertOrder);

        // Get the last inserted orderID
        $orderID = mysqli_insert_id($conn);

        echo "New order placed! Order ID: $orderID";
    }
}

    $menuItemID = $_GET['menuItem'];
    $sqlCheckOrder = "SELECT * FROM tbl_order_menu WHERE orderID = '$orderID' AND MenuItemID = '$menuItemID'";
    $resultCheckOrder = mysqli_query($conn, $sqlCheckOrder);
    
    if ($resultCheckOrder) {
        $row = mysqli_fetch_assoc($resultCheckOrder);
    
        if ($row) {
            // A similar order exists for the customer
            $menuID = $row['MenuItemID'];
            echo "A similar menu already exists. MenuItemID ID: $menuID";
        } else {
    
        // Insert into tbl_order_menu
        $concessionerID = $_GET['concessioner'];
        $price = $_GET['price'];
        $qty = 0;
    
        $sqlInsertOrderMenu = "INSERT INTO tbl_order_menu (orderID, MenuItemID, qty, price_each) VALUES ('$orderID', '$menuItemID', '$qty', '$price')";
        $resultInsertOrderMenu = mysqli_query($conn, $sqlInsertOrderMenu);

        if (!$resultInsertOrderMenu) {
            // Handle the case where inserting into tbl_order_menu failed
            echo "Error inserting into tbl_order_menu: " . mysqli_error($conn);
        }

    // Free the result set
    mysqli_free_result($resultCheckOrder);
 }
} else {
    // Handle the case where the query to check the order failed
    echo "Error executing query: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);

header("Location: home.php");
?>