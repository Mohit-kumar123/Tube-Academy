<!DOCTYPE html>

<?php
session_start();

$form_data = [];
$errors = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Sanitize and validate the inputs
    $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
    $mob = filter_input(INPUT_POST, 'mobno', FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Full name validation
    if (empty($fullname) || !preg_match("/^[A-Za-z ]+$/", $fullname)) {
        $errors["name"] = "Full name is either empty or invalid";
    } else {
        $form_data["fullname"] = htmlspecialchars(trim($fullname)); 
    }

    // Mobile number validation
    if (empty($mob) || !preg_match("/^\d{10}$/", $mob)) {
        $errors["mob"] = "Mobile number is invalid";
    } else {
        $form_data["mobno"] = htmlspecialchars(trim($mob)); 
    }

    // Email validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email address";
    } else {
        $form_data["email"] = htmlspecialchars(trim($email)); 
    }

    // Password validation
    if (empty($password) || strlen($password) < 6) {
        $errors["password"] = "Password must be at least 6 characters long";
    } else {
        $form_data["password"] = password_hash(trim($password), PASSWORD_DEFAULT);
    }

    // Profile picture upload handling
    if (isset($_FILES['pic']) && $_FILES['pic']['error'] == UPLOAD_ERR_OK) {
        // Define the upload directory
        $uploads_dir = 'uploads';
        // Ensure the directory exists
        if (!is_dir($uploads_dir)) {
            mkdir($uploads_dir, 0777, true);
        }

        // Validate file type (e.g., JPEG, PNG)
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
        if (!in_array($_FILES['pic']['type'], $allowed_types)) {
            $errors["pic"] = "Only JPEG, PNG, and GIF files are allowed.";
        }

        // Check file size (e.g., max 5MB)
        if ($_FILES['pic']['size'] > 5 * 1024 * 1024) {
            $errors["pic"] = "File size must be less than 5MB.";
        }

        if (empty($errors["pic"])) {
            // Sanitize the file name and move the file to the upload directory
            $tmp_name = $_FILES["pic"]["tmp_name"];
            $name = basename($_FILES["pic"]["name"]);
            $target_file = "$uploads_dir/$name";

            if (move_uploaded_file($tmp_name, $target_file)) {
                $form_data["pic"] = $target_file;  // Store file path in session
            } else {
                $errors["pic"] = "Failed to upload the profile picture.";
            }
        }
    } else {
        $errors["pic"] = "Please upload a profile picture.";
    }

    // Process if no errors
    if (empty($errors)) {
        $_SESSION["form_data"] = $form_data;
        header('Location:myconfirmation.php');
        exit();
    }
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>REGISTRATION FORM</h1>
    <form action="" method="post" enctype="multipart/form-data">
        Enter fullname: 
        <input type="text" name="fullname" placeholder="enter your full name">
        <span style="color: red;">
            <?php echo $errors["name"] ?? ''; ?>
        </span>
        <br/>

        Enter mobile no: 
        <input type="text" name="mobno" placeholder="enter mobile number">
        <span style="color: red;">
            <?php echo $errors["mob"] ?? ''; ?>
        </span>
        <br/>

        Enter email id : 
        <input type="email" name="email" placeholder="enter email id ">
        <span style="color: red;">
            <?php echo $errors["email"] ?? ''; ?>
        </span>
        <br/>

        Enter your profile pic:
        <input type="file" name="pic">
        <span style="color: red;">
            <?php echo $errors["pic"] ?? ''; ?>
        </span>
        <br/>

        Enter password: 
        <input type="password" name="password" placeholder="enter password">
        <span style="color: red;">
            <?php echo $errors["password"] ?? ''; ?>
        </span>
        <br/>

        <input type="submit" name="submit" value="Submit my form">
    </form>

</body>
</html>