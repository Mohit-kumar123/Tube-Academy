<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default username in XAMPP/WAMP
$password = ""; // Default password is empty
$dbname = "user_database"; // Updated database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Prepare SQL statement with updated table name
    $stmt = $conn->prepare("INSERT INTO details (name, email, age) VALUES (?, ?, ?)");
    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ssi", $name, $email, $age);

    // Execute the statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
