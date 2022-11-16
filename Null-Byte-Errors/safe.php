<?php 
   $file = $_GET["file"].".php";
   $clean =  str_replace(chr(0),"",$file);
   echo include("$clean");
   echo "I am the SAFE code!";
?>
