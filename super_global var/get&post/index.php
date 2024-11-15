<?php
// Check if a GET parameter 'name' exists
if (isset($_GET['name'])) {
    $name = htmlspecialchars($_GET['name']); // Get the value and sanitize it
    $message = "Hello, $name!";
} else {
    $message = "No name provided via GET request.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET & POST Example</title>
</head>
<body>
    <h1>GET Request Example</h1>

    <p><?php echo $message; ?></p>

    <h2>Pass a Name via URL (GET)</h2>
    <p>Try passing your name in the URL like this: <br>
        <a href="get_post_example.php?name=John">get_post_example.php?name=John</a>
    </p>
    
    <hr>

    <!-- POST request example -->
    <h1>POST Request Example</h1>
    <form action="get_post_example.php" method="POST">
        <label for="username">Enter your name:</label>
        <input type="text" name="username" id="username">
        <button type="submit">Submit</button>
    </form>

    <?php
    // Check if POST data has been submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['username'])) {
        $username = htmlspecialchars($_POST['username']); // Get the POST value and sanitize it
        echo "<p>POST: Hello, $username!</p>";
    }
    ?>
</body>
</html>
