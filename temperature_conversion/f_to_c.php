<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit to Celsius Converter</title>
</head>
<body>
    <h1>Fahrenheit to Celsius Converter</h1>
    <form method="post">
        <label for="fahrenheit">Enter the temperature in Fahrenheit:</label><br><br>
        <input type="text" id="fahrenheit" name="fahrenheit" required><br><br>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fahrenheit = (float)$_POST['fahrenheit']; // Corrected variable name

        // Convert Fahrenheit to Celsius
        $celsius = ($fahrenheit - 32) * 5/9;

        // Display the result
        echo "<p>$fahrenheit °F is equal to $celsius °C</p>";
    }
    ?>
</body>
</html>
