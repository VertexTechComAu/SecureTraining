<?php
$user = $_GET['user'];
$file = $user.'.php';
echo file_get_contents($file);
?>
