<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="submit" name="logout" value="logout">
    </form>
    <?php
        session_start();
        if(isset($_SESSION["username"])){
            echo "Welcome!!".$_SESSION["username"];
        }
        if(isset($_POST["logout"])){
            session_unset();
            session_destroy();
            header('location: 24.php');
        }
    ?>
</body>
</html>