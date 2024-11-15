<!DOCTYPE html>
<?php
session_start();

// Check if form data exists in the session
if (!isset($_SESSION["form_data"])) {
    // If there's no form data, redirect to the form page
    header('Location: index.php');
    exit();
}

$form_data = $_SESSION["form_data"];

// Handle profile picture path (assuming it was saved in the session)
$profile_pic_path = isset($form_data["pic"]) ? $form_data["pic"] : null;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmation</title>
</head>
<body>
    <h1>Your Registration is Confirmed</h1>

    <p><strong>Full Name: </strong>
        <?php
        // Output the sanitized full name from session
        echo htmlspecialchars($form_data["fullname"]);
        ?>
    </p>

    <p><strong>Mobile Number: </strong>
        <?php
        // Output the sanitized mobile number from session
        echo htmlspecialchars($form_data["mobno"]);
        ?>
    </p>

    <p><strong>Email: </strong>
        <?php
        // Output the sanitized email from session
        echo htmlspecialchars($form_data["email"]);
        ?>
    </p>

    <p><strong>Password: </strong>
        <?php
        // For security reasons, do not display the actual password
        echo "Password has been saved securely.";
        ?>
    </p>

    <p><strong>Profile Picture: </strong>
        <?php
        // Display the uploaded profile picture if it exists
        if ($profile_pic_path) {
            echo '<br><img src="'.htmlspecialchars($profile_pic_path).'" alt="Profile Picture" width="150" height="150">';
        } else {
            echo "No profile picture uploaded.";
        }
        ?>
    </p>

    <p><a href="1.php">Go back to the form</a></p>
</body>
</html>