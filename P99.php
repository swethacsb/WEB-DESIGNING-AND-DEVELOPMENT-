<?php 
session_start();  
if (!isset($_SESSION['counter'])) { 
$_SESSION['counter'] = 0; 
echo "New session started.<br>"; 
} 
$_SESSION['counter']++; 
echo "You have visited this page " . $_SESSION['counter'] . " times.<br>"; 
echo "<a href='" . $_SERVER['PHP_SELF'] . "?PHPSESSID=" . session_id() . "'>Reload 
Page with Session ID</a><br><br>"; 
?> 
<form method="post" enctype="multipart/form-data"> 
<label>Select file to upload:</label> 
<input type="file" name="myfile"> 
    <input type="submit" value="Upload"> 
</form> 
<?php 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['myfile'])) { 
    $uploadDir = "uploads/"; 
    if (!is_dir($uploadDir)) { 
        mkdir($uploadDir); // create uploads folder if not exists 
    } 
    $targetFile = $uploadDir . basename($_FILES['myfile']['name']); 
    if (file_exists($targetFile)) { 
        echo "<p style='color:red;'>Error: This file already exists. Please choose a different 
file.</p>"; 
    } else { 
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetFile)) { 
            echo "<p style='color:green;'>File uploaded successfully!</p>"; 
        } else { 
            echo "<p style='color:red;'>Error uploading file.</p>"; 
        } 
    } 
} 
?>