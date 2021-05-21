<?php
$user = $_GET['user'];
$file = $user.'.php';
   echo get_file_contents($file);
?>
