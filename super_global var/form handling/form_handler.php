<?php
// Checking if the form is submitted via POST
if (isset($_POST['submit_post'])) {
    // Using $_POST to handle form data submitted via POST
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    $phone = htmlspecialchars($_POST['phone']);


    echo "<h2>Form submitted using POST</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "age: $age<br>";
    echo "phone: $phone<br>";
}

// Checking if the form is submitted via GET
if (isset($_GET['submit_get'])) {
    // Using $_GET to handle form data submitted via GET
    $name = htmlspecialchars($_GET['name']);
    $email = htmlspecialchars($_GET['email']);
    $age = htmlspecialchars($_GET['age']);
    $phone = htmlspecialchars($_GET['phone']);

    echo "<h2>Form submitted using GET</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "age: $age<br>";
    echo "phone: $phone<br>";
}

// Example of using $_REQUEST (it works with both GET and POST)
if (isset($_REQUEST['name'])) {
    $name = htmlspecialchars($_REQUEST['name']);
    $email = htmlspecialchars($_REQUEST['email']);
    $age = htmlspecialchars($_REQUEST['age']);
    $phone = htmlspecialchars($_REQUEST['phone']);

    echo "<h2>Form data using \$_REQUEST</h2>";
    echo "Name: $name<br>";
    echo "Email: $email<br>";
    echo "age: $age<br>";
    echo "phone: $phone<br>";
}
?>

<!-- the diff is post se saare information upar link wale section me show nhi hoga aur 
 get se the all information will be displayed on the link section part -->