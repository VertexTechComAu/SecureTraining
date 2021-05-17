<html>
<body>
<?php 
echo "<p>Weakly Encrypted Text is:   ";
$target = $_POST["sha"];
$password = "MyPassword!1!";
$aes256key = hash("SHA256", $password, true); 
$size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
$iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
$mcrypted=mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $aes256key, $target, MCRYPT_MODECBC);
echo base64_encode($mcrypted); 
echo "<br>";
echo "Strong Encrypted Text is :";

//insert strong code here

?>
</body>
</html>

