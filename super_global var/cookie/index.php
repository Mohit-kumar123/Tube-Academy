<?php
// Set a cookie (only set if it doesn't exist)
if (!isset($_COOKIE['user'])) {
    setcookie("user", "JohnDoe", time() + (86400 * 7), "/"); // Cookie set for 7 days
    $message = "Cookie has been set!";
} else {
    $message = "Cookie 'user' already exists!";
}

// Delete the cookie (only delete if it exists)
if (isset($_GET['delete'])) {
    setcookie("user", "", time() - 3600, "/"); // Expire the cookie by setting it in the past
    $message = "Cookie has been deleted!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Management</title>
</head>
<body>

    <h1>PHP Cookie Example</h1>

    <p><?php echo $message; ?></p>

    <h2>Current Cookies</h2>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Cookie Name</th>
                <th>Cookie Value</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (count($_COOKIE) > 0) {
                foreach ($_COOKIE as $name => $value) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($name) . "</td>";
                    echo "<td>" . htmlspecialchars($value) . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No cookies found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <br>

    <a href="cookie_example.php">Refresh Page</a>
    <br>
    <a href="cookie_example.php?delete=true">Delete Cookie</a>

</body>
</html>
