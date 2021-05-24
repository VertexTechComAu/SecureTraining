<?php
$target_dir = "uploads/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$file_uploaded=move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file);
echo "File Uploaded!";
echo "<pre>";
print_r ($_FILES);
echo "</pre>";
?>

