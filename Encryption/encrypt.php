<html>
<body>
<?php 
echo "<p>Weakly Encrypted Text is :";
$target = $_POST["encrypt"];
$password = "MyPassword!1!";
$aes256Key = hash("SHA256", $password, true); 
$size = mcrypt_get_iv_size(MCRYPT_CAST_256, MCRYPT_MODE_CFB);
$iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
$mcrypted=mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $aes256key, $target, MCRYPT_MODE_CBC, $iv);;
echo $mcrypted; 
echo "<br>";
echo "Strong Encrypted Text is :";
?>
</body>
</html>
