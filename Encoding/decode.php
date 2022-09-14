<html>
<body>
Decoded Text is :
<?php
$target=$_POST["decode"];
//change code here


$target=base64_decode($target);
echo $target;
?>

</body>
</html>
