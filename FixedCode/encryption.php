// replaces file - encrypt.php

<html>
<body>
<?php 
// encrypt
//echo "<p>Weakly Encrypted Text is :";
//$target = $_POST["encrypt"];
//$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3"); 
//$size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_Cbc);
//$iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
//$mcrypted=mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $target, MCRYPT_MODE_CBC, $iv);
//echo $mcrypted; 
//echo "<br>";

// decrypt
//$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $key, $target, MCRYPT_MODE_CBC, $iv);
//echo $decrypted;

//echo "<br>";

echo "Strong Encrypted Text is :";

//insert secure code here

$key = openssl_random_pseudo_bytes(32);

$method = 'aes256';
$target = $_POST["encrypt"];

$encrypted = openssl_encrypt($target, $method, $key);
echo "Encrypted text is";
echo $encrypted;

// decrypt
$decrypted = openssl_decrypt($encrypted, $method, $key);
echo "<br>";
echo "Decrypted text is: ";
echo $decrypted;
?>
</body>
</html>

