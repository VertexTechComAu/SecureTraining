<!DOCTYPE html>
<html>
<body>
<?php
session_start();
$ishttp = $_SERVER["SERVER_PORT"];
if($ishttp==443)
{
	echo "I am a secure session!";
}
else
{
	echo "I am insecure! Fix Me!";
}
?>
</body>
</html>
