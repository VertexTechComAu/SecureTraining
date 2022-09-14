// replaces file - decode.php
<html>
<body>
Encoded Text is : 
<?php 
$target=$_POST["decode"];

// regex to ensure its valid base64 encoded value
if(preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/',$target)){
  if (base64_decode($target, true)){
      echo 'Input is valid base64';
      $target=base64_decode($target);
      echo $target;
  } 
  else {
      echo 'Input is NOT valid base64'; 
   }

}
else {
    echo 'Input is NOT valid base64';
}
 
?>

</body>
</html>
