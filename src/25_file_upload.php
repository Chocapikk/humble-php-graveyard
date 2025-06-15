<?php
// curl -gki "http://localhost:8000/25_file_upload.php" -F "file=@src/osk.png;filename=osk.png"

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $filename = $_FILES['file']['name'];
    if (strtolower(pathinfo($filename, PATHINFO_EXTENSION)) === 'php') {
        echo "PHP files are not allowed.";
        exit;
    }
    move_uploaded_file($_FILES['file']['tmp_name'], __DIR__ . '/' . $filename);
    echo "Uploaded to: " . __DIR__ . '/' . $filename;
    exit;
}
?>
<!DOCTYPE html>
<html><body>
<form method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit">Upload</button>
</form>
</body></html> 