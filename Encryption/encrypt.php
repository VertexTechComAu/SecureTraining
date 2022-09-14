<html>
<body>
<?php
// encrypt
echo "<p>Weakly Encrypted Text is :";
$target = $_POST["encrypt"];
$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3"); 
$size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_Cbc);
$iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
$mcrypted=mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $target, MCRYPT_MODE_CBC, $iv);
echo $mcrypted; 
echo "<br>";

// decrypt
$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $target, MCRYPT_MODE_CBC, $iv);
echo $decrypted;

echo "<br>";

echo "Strong Encrypted Text is :";
//insert secure code here
?>
</body>
</html>

