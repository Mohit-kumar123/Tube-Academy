<!DOCTYPE html>
<html>
<head>
    <title>String Validation</title>
</head>
<body>
    <form method="post" action="">
        <label for="stringInput">Enter a string:</label>
        <input type="text" id="stringInput" name="stringInput">
        <input type="submit" value="Validate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stringInput = $_POST["stringInput"];

        $regex = '/^[a-zA-Z]+$/';

        if (preg_match($regex, $stringInput)) {
            echo "<p>Valid String!</p>";
        } else {
            echo "<p>Invalid String! Only letters are allowed.</p>";
        }
    }
    ?>
</body>
</html>