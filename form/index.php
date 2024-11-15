<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form</title>
</head>
<body>

<h2>Basic Form</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = $_POST['name'];
    $number = $_POST['number'];
    $age = $_POST['age'];

    // Display the captured data
    echo "<h2>Form Data Submitted</h2>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Phone Number: " . htmlspecialchars($number) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>";
} else {
?>
    <form action="" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="number">Phone Number:</label><br>
        <input type="tel" id="number" name="number" required><br><br>

        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>

        <input type="submit" value="Submit">
    </form>
<?php
}
?>

</body>
</html>
