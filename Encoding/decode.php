<html>
<body>
Encoded Text is : 
<?php 
$target=$_POST["decode"];
$target=base64_decode($target);
echo $target; 
?>

</body>
</html>
