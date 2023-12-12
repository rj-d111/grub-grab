<?php
session_start();
include "../php-connect/db_conn.php";


if(isset($_POST['email']) && isset($_POST['password'])){
        //Sanitize the user input first
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);

    if(empty($email)){
        header("Location: login.php?error=email is required");
    }else if(empty($password)){
        header("Location: login.php?error=Password is empty");
    }else{
        //Hashing the password
        $password = md5($password);

        $sql = "SELECT * FROM tbl_customer WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) === 1){
            //the email must be unique
            $row = mysqli_fetch_assoc($result);
            // Assigning to SESSION
            if($row['password']=== $password){
                $_SESSION['email'] = $row['email'];                
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
            }else{
                header("Location: login.php?incorrect=true");
            }
        }else{
            header("Location: login.php?incorrect=true");
        }
    }
}else{
    header("Location: login.php");
}

?>