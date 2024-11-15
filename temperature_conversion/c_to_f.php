<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius to Fahrenheit Converter</title>
</head>
<body>
    <h1>Celsius to Fahrenheit Converter</h1>
    <form method="post"  action="">
        <label for="celsius">Enter temperature in Celsius:</label><br>
        <input type="text" id="celsius" name="celsius" required><br><br>
        <input type="submit" value="Convert">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $celsius = (float)$_POST['celsius']; // Get the Celsius value and convert it to a float

        // Convert Celsius to Fahrenheit
        $fahrenheit = ($celsius * 9/5) + 32;

        // Display the result
        echo "<p>$celsius °C is equal to $fahrenheit °F</p>";
    }
    ?>
</body>
</html>
