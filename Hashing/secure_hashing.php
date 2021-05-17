<html>
<body>
<?php 
echo "<p>Weakly Encrypted Text is:   ";
$target = $_POST["sha"];
$key = pack('H*', "bcb04b7e103a0cd8b54763051cef08bc55abe029fdebae5e1d417e2ffb2a00a3");
$size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_256, MCRYPT_MODE_CBC);
$iv = mcrypt_create_iv($size, MCRYPT_DEV_RANDOM);
$mcrypted=mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $key, $target, MCRYPT_MODE_CBC);
echo base64_encode($mcrypted); 
echo "<br>";
echo "Strong Encrypted Text is :";

//insert strong code here

?>
</body>
</html>

