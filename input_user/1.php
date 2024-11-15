<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculation</title>
</head>
<body>
    <form method="post">
        <label for="numbers">Enter numbers separated by commas:</label><br>
        <input type="text" id="numbers" name="numbers" required><br><br>
        <input type="submit" value="Calculate Grade">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numbers = $_POST['numbers'];

        // Convert the comma-separated string to an array
        $numberArray = explode(',', $numbers);
        $value = 0;

        foreach ($numberArray as $val) {
            $value += (int)$val; // Convert each element to integer and sum it
        }

        $x = $value / count($numberArray); // Divide by the number of elements in the array

        echo "<p>Average: $x</p>";

        // Determine the grade
        switch (true) {
            case $x >= 90:
                echo "<p>Grade: A</p>";
                break;
            case ($x >= 70 && $x < 90):
                echo "<p>Grade: B</p>";
                break;
            case ($x >= 40 && $x < 70):
                echo "<p>Grade: C</p>";
                break;
            default:
                echo "<p>Grade: D</p>";
        }
    }
    ?>
</body>
</html>
