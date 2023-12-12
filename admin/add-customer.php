<?php
//call the database connection
include "../php-connect/db_conn.php";

$errormessage = "";
$successmessage = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['first_name'];
    $lastname  = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contactno = $_POST['contact_no'];

    //Check if the fields are empty

    do {
        if (empty($firstname) || empty($lastname) || empty($password) || empty($email)) {
            $errormessage = "All the fields are required";
            break;
        }

        //Hash password first
        $password = md5($password);


        //Inserting into the database
        try {
            // Check duplicates first
            $checkDuplicates = $conn->prepare("SELECT email FROM tbl_customer WHERE email = ?");
            $checkDuplicates->bind_param("s", $email);
            $checkDuplicates->execute();
            $checkDuplicates->store_result();

            if ($checkDuplicates->num_rows > 0) {
                $errormessage = "The email has already been taken";
            } else {
                // Username is not taken, proceed with insertion
                $checkDuplicates->close();
                $stmt = $conn->prepare("INSERT INTO tbl_customer (first_name, last_name, email, password, contact_no) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $firstname, $lastname, $email, $password, $contactno);
                $stmt->execute();
                $stmt->close();

                //Clear the form data
                $firstname = "";
                $lastname = "";
                $email = "";
                $password = "";
                $contactno = "";

                $successmessage = "User Added Successfully";

                //Go to the home page
                header("Location: home.php");
                // exit;
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    } while (false);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- Heading -->
        <h1>New Customer</h1>
        <!-- Start of Alert -->
        <?php if (!empty($successmessage)) {
            echo '<div class="alert alert-success" role="alert">' . $successmessage . '</div>';
        }
        if (!empty($errormessage)) {
            echo '<div class="alert alert-warning" role="alert">' . $errormessage . '</div>';
        }
        ?>
        <!-- End of Alert -->
        <form method="post">
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="first_name" id="floatingInput" placeholder="" required>
                <label for="floatingInput">First Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" name="last_name" id="floatingInput" placeholder="" required>
                <label for="floatingInput">Last Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="" required>
                <label for="floatingInput">Email</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="" required>
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="tel" class="form-control" name="contact_no" id="floatingInput" placeholder="" required>
                <label for="floatingInput">Contact No.</label>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>