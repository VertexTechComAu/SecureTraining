<html>
<body>
<?php 
echo "<p>Weak Storage Methods of Passwords are : ";
$target = $_POST["md"];
echo "<br>1. Plain Text: ";
echo $target;
$weak_hash=md5($target,false);
echo "<br>2. Weak Hashing Algorithm (md5): ";
echo $weak_hash;
?>
</body>
</html>
