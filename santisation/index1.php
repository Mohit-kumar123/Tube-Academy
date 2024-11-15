<!-- take age input from the user and valuidate it -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index1.php" method="post">
    <input type="text" name="age" placeholder="Enter your age">
    <input type="submit" value="Submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $age = $_POST["age"];
    if (!filter_var($age, FILTER_VALIDATE_INT)) {
        
        echo  "$age is not valid";
    } else {
        echo "$age is valid";
    }
}


?>

</body>
</html>


<!-- validating url -->
<!-- write a php script to validate the url -->


