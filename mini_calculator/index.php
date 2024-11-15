<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post">
        <label for="x">Enter the value of x:</label><br>
        <input type="text" id="x" name="x" required><br><br>

        <label for="y">Enter the value of y:</label><br>
        <input type="text" id="y" name="y" required><br><br>

        <label for="operation">Enter the operation you want to perform ('+', '-', '*', '/', '%'):</label><br>
        <input type="text" id="operation" name="operation" required><br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $x = (float)$_POST['x']; // Get the value of x and convert it to a float
        $y = (float)$_POST['y']; // Get the value of y and convert it to a float
        $operation = $_POST['operation']; // Get the operation

        $result = null;

        // Perform the calculation based on the operation
        switch ($operation) {
            case '+':
                $result = $x + $y;
                break;
            case '-':
                $result = $x - $y;
                break;
            case '*':
                $result = $x * $y;
                break;
            case '/':
                if ($y != 0) {
                    $result = $x / $y;
                } else {
                    $result = "Error: Division by zero";
                }
                break;
            case '%':
                if ($y != 0) {
                    $result = $x % $y;
                } else {
                    $result = "Error: Division by zero";
                }
                break;
            default:
                $result = "Error: Invalid operation";
        }

        // Display the result
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
