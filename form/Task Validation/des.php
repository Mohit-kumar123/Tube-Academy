<!DOCTYPE html>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"];
    $desc = $_POST["desc"];  // Corrected name from "dsc" to "desc"

    // Validate the URL
    if (empty($url) || !filter_var($url, FILTER_VALIDATE_URL)) {
        echo "Please enter a valid URL.<br>";
    } else if (strlen($desc) > 5) {
        echo "Description must be 5 characters or less.<br>";
    } else {
        echo "URL: $url <br>";
        echo "Description: $desc <br>";
    }

    // Define available filters
    $filters = [
        101 => "Price",
        102 => "Brand",
        103 => "Category",
        104 => "Color",
        105 => "Size"
    ];
  
    // Display available filters
    echo "Available filters:<br>";

    // Loop through each filter and display the index (ID) and the filter
    foreach ($filters as $id => $filter) {
        echo "ID: $id - Filter: $filter <br>";
    }
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Video URL</title>
</head>
<body>
    <form method="POST" action="">
        <label for="url">Enter URL:</label>
        <input type="url" name="url" placeholder="Enter valid URL" required>
        <br><br>
        <label for="desc">Enter description of the video:</label>
        <textarea name="desc" placeholder="Enter description here" maxlength="5" required></textarea>
        <br><br>
        <input type="submit" value="SUBMIT FORM">
    </form>
</body>
</html>
