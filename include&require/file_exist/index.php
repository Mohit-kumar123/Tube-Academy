<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Page Loader</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php?page=about">About</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
        </ul>
    </nav>
    
    <div>
        <?php
        // Array of valid pages that can be included
        $allowed_pages = array('about', 'contact');
        
        // Check if 'page' parameter exists
        if (isset($_GET['page'])) {
            // Get and sanitize the 'page' parameter
            $page = $_GET['page'];
            
            // Check if the page is allowed
            if (in_array($page, $allowed_pages)) {
                $file = $page . '.php'; // Construct the file name

                // Check if the file exists before including
                if (file_exists($file)) {
                    include_once $file;
                } else {
                    echo "The requested page does not exist.";
                }
            } else {
                echo "Invalid page selection.";
            }
        } else {
            echo "Welcome! Please select a page.";
        }
        ?>
    </div>
</body>
</html>
