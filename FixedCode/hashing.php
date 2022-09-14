// replaces file - secure_hasing.php
<html>
<body>
<?php 
echo "Strong hashed text using PHPs password_hash function:";
echo "<br>";

$target = $_POST["sha"];
$hash = password_hash($target, PASSWORD_BCRYPT);

echo $hash;
?>
</body>
</html>
