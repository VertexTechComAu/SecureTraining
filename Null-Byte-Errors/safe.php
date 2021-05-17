<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body> 
  <?php 
  $file = $_GET['file'];
  $clean =  str_replace(chr(0),"",$file);
   echo file_get_contents("$clean");
   echo "I am the SAFE code!";
   ?>
  </body>
</html>
