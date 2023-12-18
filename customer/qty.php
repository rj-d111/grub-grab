<?php

    $qty = $_POST['qty'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the "plus" button was clicked
        if (isset($_POST['plus'])) {
            // The "plus" button was clicked
            // Handle the logic for the "plus" button
            $amt = $_POST['plus'];
            $amt++;

            echo $amt;
        }
    
        // Check if the "minus" button was clicked
        if (isset($_POST['minus'])) {
            // The "minus" button was clicked
            // Handle the logic for the "minus" button
            $amt = $_POST['minus'];

            if((int)$amt!=0){
                $amt--;
            }else{
                echo "this is 0";
            }

            echo $amt;
        }
    }

?>