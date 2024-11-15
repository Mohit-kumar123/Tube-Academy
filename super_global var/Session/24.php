<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Enter username: ">
        <br>
        <input type="password" name="password" placeholder="Enter password: ">
        <br>
        <input type="submit" value="login" name="login">
    </form>
    <?php
        session_start();
        
        // Set session timeout duration (in seconds)
        $timeout_duration = 1800; // 30 minutes
        
        // Check if the session is already started and the last activity is set
        if (isset($_SESSION['LAST_ACTIVITY'])) {
            // Calculate the session duration
            if (time() - $_SESSION['LAST_ACTIVITY'] > $timeout_duration) {
                // If the session has timed out, unset the session and destroy it
                session_unset();
                session_destroy();
                header("Location: timeout.php"); // Redirect to timeout page
                exit();
            }
        }

        // Update the last activity time
        $_SESSION['LAST_ACTIVITY'] = time();

        // Handle login form submission
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $def_user = "Admin";
            $def_pass = "123"; // Change password type to string for comparison

            // Check if the credentials match the default ones
            if($username == $def_user && $password == $def_pass){
                $_SESSION["username"] = $username;
                header('Location: mywelcome.php'); // Redirect to welcome page
                exit();
            } else {
                echo "Invalid credentials!";
            }
        }
    ?>
</body>
</html>
