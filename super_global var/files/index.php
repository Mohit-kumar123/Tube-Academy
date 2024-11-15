<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload Example</title>
</head>
<body>

<h2>Upload an Image</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select an image to upload (max 2MB):
    <input type="file" name="uploadedFile" accept="image/*">
    <input type="submit" value="Upload Image">
</form>

</body>
</html>


<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['uploadedFile']) && $_FILES['uploadedFile']['error'] === UPLOAD_ERR_OK) {
        // File properties
        $fileTmpPath = $_FILES['uploadedFile']['tmp_name'];
        $fileName = $_FILES['uploadedFile']['name'];
        $fileSize = $_FILES['uploadedFile']['size'];
        $fileType = $_FILES['uploadedFile']['type'];
        $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        // Allowed file extensions for images
        $allowedFileExtensions = ['jpg', 'jpeg', 'png', 'gif'];

        // Validate file extension
        if (!in_array($fileExtension, $allowedFileExtensions)) {
            echo "Error: Only image files (JPG, JPEG, PNG, GIF) are allowed.<br>";
            exit();
        }

        // Validate file size (max 2MB)
        if ($fileSize > 2 * 1024 * 1024) {
            echo "Error: The file size exceeds the 2MB limit.<br>";
            exit();
        }

        // Target directory where the file will be moved
        $uploadDir = 'uploads/';
        $destPath = $uploadDir . $fileName;

        // Move the uploaded file to the target directory
        if (move_uploaded_file($fileTmpPath, $destPath)) {
            echo "File uploaded successfully!<br>";
            echo "File Name: " . $fileName . "<br>";
            echo "File Path: " . $destPath . "<br>";
        } else {
            echo "Error: There was an issue moving the uploaded file.<br>";
        }
    } else {
        echo "Error: " . getUploadErrorMessage($_FILES['uploadedFile']['error']);
    }
} else {
    echo "Invalid request method.";
}

// Function to return the error message based on the error code
function getUploadErrorMessage($errorCode) {
    switch ($errorCode) {
        case UPLOAD_ERR_INI_SIZE:
            return "The uploaded file exceeds the upload_max_filesize directive in php.ini.";
        case UPLOAD_ERR_FORM_SIZE:
            return "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
        case UPLOAD_ERR_PARTIAL:
            return "The uploaded file was only partially uploaded.";
        case UPLOAD_ERR_NO_FILE:
            return "No file was uploaded.";
        case UPLOAD_ERR_NO_TMP_DIR:
            return "Missing a temporary folder.";
        case UPLOAD_ERR_CANT_WRITE:
            return "Failed to write file to disk.";
        case UPLOAD_ERR_EXTENSION:
            return "A PHP extension stopped the file upload.";
        default:
            return "Unknown error occurred.";
    }
}
?>
