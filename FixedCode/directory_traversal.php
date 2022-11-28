<?php
  //use of whitelisted pages and folders too
  $file =$_GET['file'];
  $allowed = ['home', 'blog', 'gallery', 'catalog'];
  if (in_array($file,$allowed)){
     $file=$file;
     }
  else{
     $file='home';
  }
  echo file_get_contents('folder/'.$file);
?>
