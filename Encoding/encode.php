<html>
<body>
Encoded Text is : <?php 
$target = $_POST["encode"];
$target=base64_encode($target);
echo $target; 
?>
</body>
</html>
